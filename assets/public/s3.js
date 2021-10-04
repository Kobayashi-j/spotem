import { Mail } from './modules.js';

// 認証コード
let Code = 0;

$(function () {
    var deferred = Mail.sendAuthCode($("input[name='email']").val());
    deferred.done(function (data) {
        Code = data;
        console.log(Code);
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