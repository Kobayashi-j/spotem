import { Mail } from './modules.js';

// 認証コード
let Code = 0;

$(function () {
    var email = $("input[name='email']").val();
    Code = Math.ceil(Math.random() * 1000000);
    var params = { title: '認証コードのご案内', body: '認証コード：' + Code + '\n\nこの番号を認証コード入力画面で入力してください。' };
    var deferred = Mail.send(email, params);
    deferred.done(function (data) {
        if (!data) $("p.help.is-warning").html("メールの送信に失敗しました。<br>再度お試しください。");
    });

    $("._back").click(function () {
        $("form[name='back']").submit();
    });

    $("input[name='code']").change(function () {
        $("input[name='code']").removeClass("is-danger is-success");
        $("#code .help").text('');
        $("#code .j_icon").removeClass("fa-check");
        $(".j_submit").prop('disabled', true);
        var code = $("input[name='code']").val();
        if (code.length > 0) {
            if (code == Code) {
                $("input[name='code']").addClass("is-success");
                $("#code .j_icon").addClass("fa-check");
                $(".j_submit").prop('disabled', false);
            } else {
                $("input[name='code']").addClass("is-danger");
                $("#code .help").text('認証コードが正しくありません。');
            }
        }
    });
});