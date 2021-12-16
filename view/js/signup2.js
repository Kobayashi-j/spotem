import { Mail, SQL, checkPassword } from './modules.js';

$(function () {
    if ($("input[name='email']").val() !== '' && $("input[name='password']").val() !== '' && $("input[name='password_check']").val() !== '') {
        $(".j-email-check, .j-password-check, .j-password_check-check").removeClass("invisible");
        $(".j-submit").removeClass("cursor-not-allowed");
        $(".j-submit").prop('disabled', false);
    }

    $("input[name='email']").on("change", function () {
        //装飾のリセット
        $(".j-email-help").text('');
        $(".j-email-check").addClass("invisible");
        $(".j-submit").addClass("cursor-not-allowed");
        $(".j-submit").prop("disabled", true);

        var email = $("input[name='email']").val();
        //値が入力されていない場合
        if (email.length == 0) return;
        if (Mail.check(email)) {
            var params = { key: email };
            var deferred = SQL.get("SELECT COUNT(id) FROM users WHERE id = :key OR email = :key", params);
            deferred.done(function (data) {
                if (data[0]["COUNT(id)"]) {
                    $(".j-email-help").text('既に使用されています。');
                } else {
                    $(".j-email-check").removeClass("invisible");
                    if (!$(".j-password-check, j-password_check-check").hasClass("invisible")) {
                        $(".j-submit").removeClass("cursor-not-allowed");
                        $(".j-submit").prop('disabled', false);
                    }
                }
            });
        } else {
            $(".j-email-help").text('形式が正しくありません。');
        }
    });

    $("input[name='password']").on("change", function () {
        //装飾のリセット
        $(".j-password-help").text('');
        $(".j-password-check").addClass("invisible");
        $(".j-submit").addClass("cursor-not-allowed");
        $(".j-submit").prop("disabled", true);

        var password = $("input[name='password']").val();
        //値が入力されていない場合
        if (password.length != 0) {
            if (checkPassword(password)) {
                $(".j-password-check").removeClass("invisible");
            } else {
                $(".j-password-help").text("形式が正しくありません");
            }
        }
        passwordCheckAction();

    });

    $("input[name='password_check']").on("change", function () {
        passwordCheckAction();
    });

    function passwordCheckAction() {
        //装飾のリセット
        $(".j-password_check-help").text('');
        $(".j-password_check-check").addClass("invisible");
        $(".j-submit").addClass("cursor-not-allowed");
        $(".j-submit").prop("disabled", true);

        var password_check = $("input[name='password_check']").val();
        //値が入力されていない場合
        if (!$(".j-password-check").hasClass("invisible") && password_check.length != 0) {
            var password = $("input[name='password']").val();
            if (password === password_check) {
                $(".j-password_check-check").removeClass("invisible");
                if (!$(".j-email-check").hasClass("invisible")) {
                    $(".j-submit").removeClass("cursor-not-allowed");
                    $(".j-submit").prop('disabled', false);
                }
            } else {
                $(".j-password_check-help").text("パスワードが一致しません。");
            }
        }
    }
});