import { Mail } from './modules.js';

// 認証コード
let Code = 0;

$(function () {
    var email = $("input[name='email']").val();
    Code = ("0000000" + Math.floor(Math.random() * 1000000)).slice(-6);
    var title = '認証コードのご案内';
    var body = '認証コード：' + Code + '\n\nこの番号を認証コード入力画面で入力してください。';
    var deferred = Mail.send(email, title, body);
    deferred.done(function (data) {
        if (!data) $(".j-message").html("メールの送信に失敗しました。<br>再度お試しください。");
    });

    $("form[name='final_submit']").submit(function () {
        var code = $("input[name='code']").val();
        console.log('inputCode:' + code + ', authCode:' + Code);
        if (code != Code) return false;
    });
});