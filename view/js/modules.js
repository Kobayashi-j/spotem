/**
 * @constructor ユーザーオブジェクト
 */
export class User {
    /**
     * ユーザーが存在するかどうか
     * @param {string} unique ユーザー識別子（ユーザーID or メールアドレス）
     * @return deferredオブジェクトdata{bool}既存であればtrue
     */
    static find(unique) {
        var deferred = new $.Deferred();
        $.ajax({
            type: "POST",
            url: "https://naotoge5-works.tk/spotem/get/",
            data: {
                query: "SELECT COUNT(id) FROM users WHERE id = :key OR email = :key",
                params: { key: unique }
            },
            dataType: "json"
        }).done(function (data) {
            var flag = false;
            if (data[0]["COUNT(id)"]) flag = true;
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
}

export const Hash = {
    get: function (value) {
        var deferred = new $.Deferred();

        $.ajax({
            type: "POST",
            url: "../controller/async/?hash=get",
            data: {
                value: value
            },
            dataType: "json"
        }).done(function (data) {
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
            url: "../controller/async/?hash=get",
            data: {
                value: value,
                hashed_value: hashed_value
            },
            dataType: "json"
        }).done(function (data) {
            deferred.resolve(data);
        }).fail(function () {
            deferred.resolve(-1);
        });

        return deferred;
    }
}

export class Alert {
    static get() {
        var deferred = new $.Deferred();

        $.ajax({
            type: "POST",
            url: "../controller/async/?alert=get",
            dataType: "json"
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

    static send(address, title, body) {
        /* 
        */

        var deferred = new $.Deferred();

        $.ajax({
            type: "POST",
            url: "../controller/async/?mail=send",
            data: {
                email: address,
                params: {
                    title: title,
                    body: body
                }
            },
            dataType: "json"
        }).done(function (data) {
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

export const Cookie = {
    /**
     * @param {string} key cookieのkey
     * @return {string|boolean} cookieのvalue
     */
    get: function (key) {
        var cookiesRow = document.cookie; //全てのcookieを取り出して
        var cookiesArray = cookiesRow.split(';'); // ;で分割し配列に
        for (var cookieRow of cookiesArray) { //一つ一つ取り出して
            console.log(cookieRow);
            var cookie = cookieRow.split('='); //さらに=で分割して配列に
            if (cookie[0] == key) { // 取り出したいkeyと合致したら
                return cookie[1];
            }
        }
        return false;
    },
    /**
     * @param {string} key cookieのkey
     * @param {string} value cookieのvalue
     */
    set: function (key, value) {
        document.cookie = key + "=" + value;
    }
}