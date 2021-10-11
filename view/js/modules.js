/**
 * @constructor ユーザーオブジェクト
 */
export class User {
    /**
     * 
     * @param {string} userid
     * @param {string} email
     * @param {string} password
     * @param {string} comment
     * @param {string} image
     * @param {string} is_official
     */
    constructor(userid, name, email, password, comment = null, image = null, is_official = null) { /* コンストラクタ */
        this.userid = userid;
        this.name = name;
        this.email = email;
        this.password = password;
        this.comment = comment;
        this.image = image;
        this.is_official = is_official;
    }
    /**
     * ユーザーが存在するかどうか
     * @param {string} unique ユーザー識別子（ユーザーID or メールアドレス）
     */
    static find(unique) {
        var deferred = new $.Deferred();
        $.ajax({
            type: "POST",
            url: "../controller/async/db/get",
            data: {
                query: "SELECT COUNT(userid) FROM users WHERE userid = :key OR email = :key",
                params: { key: unique }
            }
        }).done(function (data) {
            var data = JSON.parse(data);
            var flag = false;
            if (data["COUNT(userid)"]) flag = true;
            deferred.resolve(flag);
        }).fail(function () {
            deferred.resolve(-1);
        });
        return deferred;
    }

    /**
     * パスワードの条件（文字数8文字以上かつ半角英数含む）を満たしているかどうか
     * @param {string} password パスワード
     * @return {Boolean}
     */
    static checkPassword(password) {
        if (password.length > 7 && password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) return true;
        return false;
    }

    /**
     * ユーザー登録（インスタンス必須）
     * @return {Object}
     */
    signup() {
        var hash_password = '';
        var deferred = Hash.get(this.password);
        deferred.done(function (data) {
            hash_password = data["to"];
        });
        var deferred = new $.Deferred();
        $.ajax({
            type: "POST",
            url: "../controller/async/db/set",
            data: {
                query: "INSERT INTO users VALUES(:userid, :name, :email, :password, :comment, :image, :is_official)",
                params: {
                    ":userid": this.userid,
                    ":name": this.name,
                    ":email": this.email,
                    ":password": hash_password,
                    ":comment": this.comment,
                    ":image": this.image,
                    ":is_official": this.is_official,
                }
            }
        }).done(function (data) {
            deferred.resolve(data);
        }).fail(function () {
            deferred.resolve(-1);
        });
        return deferred;
    }
}

export const Hash = {
    get: function (value) {
        var deferred = new $.Deferred();

        $.ajax({
            type: "POST",
            url: "../controller/async/hash/get",
            data: {
                value: value
            }
        }).done(function (data) {
            var data = JSON.parse(data);
            deferred.resolve(data);
        }).fail(function () {
            deferred.resolve(-1);
        });

        return deferred;
    },
    check: function (value, hashed_value) {
        var deferred = new $.Deferred();

        $.ajax({
            type: "POST",
            url: "../controller/async/hash/get",
            data: {
                value: value,
                hashed_value: hashed_value
            }
        }).done(function (data) {
            deferred.resolve(data);
        }).fail(function () {
            deferred.resolve(-1);
        });

        return deferred;
    }
}

export class Post {

}

export class Mail {

    static send(email, params) {
        /* 
        */

        var deferred = new $.Deferred();

        $.ajax({
            type: "POST",
            url: "../controller/async/mail/send",
            data: {
                email: email,
                params: params
            }
        }).done(function (data) {
            var data = JSON.parse(data);
            deferred.resolve(data);
        }).fail(function () {
            deferred.resolve(-1);
        });

        return deferred;
    }

    /**
     * @param {string} email - email address
     * @return {boolean} true:使用可能, false:使用不可
     */
    static check(email) {
        // 形式確認
        return email.match(/.+@.+\..+/);
    }
}