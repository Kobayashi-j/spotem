export class User {
    /**
     * @param {string} unique - unique key:userid or email
     * @return {any} Deferredオブジェクト in data - 既存:1, 新規:0
     */
    static find(unique) {
        var deferred = new $.Deferred();

        $.ajax({
            type: "POST",
            url: "controller/aync.php",
            data: { func: 'User::find', value: unique }
        }).done(function (data) {
            deferred.resolve(data);
        }).fail(function () {
            deferred.resolve(-1);
        });

        return deferred;
    }

    /**
     * @param {string} password ds
     */
    static checkPassword(password) {
        // 文字数8文字以上かつ半角英数含む
        if (password.length > 7 && password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) return true;
        return false;
    }
}

export class Post {

}

export const Mail = {
    /**
     * @param {string} email - email address
     * @return {any} Deferredオブジェクト in data - 認証コード（6ケタ）
     */
    sendAuthCode: function (email) {
        var deferred = new $.Deferred();
        $.ajax({
            type: "POST",
            url: "controller/aync.php",
            data: { func: 'sendAuthCode', value: email }
        }).done(function (data) {
            deferred.resolve(data);
        }).fail(function () {
            deferred.resolve(-1);
        });

        return deferred;
    },
    /**
     * @param {string} email - email address
     * @return {boolean} true:使用可能, false:使用不可
     */
    check: function (email) {
        // 形式確認
        return email.match(/.+@.+\..+/);
    }
}

export const Alert = {
    /**
     * @return {any} Deferredオブジェクト in data - メッセージ
     */
    get: function () {
        var deferred = new $.Deferred();
        $.ajax({
            type: "POST",
            url: "controller/aync.php",
            data: { func: 'getAlert', value: '' },
            dataType: 'json'
        }).done(function (data) {
            deferred.resolve(data);
        }).fail(function () {
            deferred.resolve(-1);
        });

        return deferred;
    }
}
