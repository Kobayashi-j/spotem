import { Mail, User } from './modules.js';

$(function () {
    if ($("input[name='email']").val() !== '' && $("input[name='password']").val() !== '' && $("input[name='password_check']").val() !== '') {
        $("input[name='email'], input[name='password'], input[name='password_check']").addClass("is-success");
        $("#email .j_icon, #password .j_icon, #password_check .j_icon").addClass("fa-check");
        $(".j_submit").prop('disabled', false);
    }

    $("._back").click(function () {
        $("form[name='back']").submit();
    });

    $("input[name='email']").change(function () {
        $("input[name='email']").removeClass("is-danger is-success");
        $("#email .help").text('');
        $("#email .j_icon").removeClass("fa-check");
        $(".j_submit").prop('disabled', true);
        var email = $("input[name='email']").val();
        if (email == 0) return;
        if (Mail.check(email)) {
            var deferred = User.find(email);
            deferred.done(function (data) {
                if (data) {
                    $("input[name='email']").addClass("is-danger");
                    $("#email .is-danger").text('既に使用されています。');
                } else {
                    $("input[name='email']").addClass("is-success");
                    $("#email .is-right i").addClass("fa-check");
                    if ($("input[name='password'], input[name='password_check']").hasClass("is-success")) $("#__two ._next").prop('disabled', false);
                }
            });
        } else {
            $("input[name='email']").addClass("is-danger");
            $("#email .is-danger").text('形式が正しくありません。');
        }
    });

    $("input[name='password']").change(function () {
        $("input[name='password'], input[name='password_check']").removeClass("is-danger is-success");
        $("#password .help, #password_check .help").text('');
        $("#password .j_icon, #password_check .j_icon").removeClass("fa-check");
        $(".j_submit").prop('disabled', true);
        var password = $("input[name='password']").val();
        if (password == 0) return;
        if (User.checkPassword(password)) {
            $("input[name='password']").addClass("is-success");
            $("#password .j_icon").addClass("fa-check");
            var password_check = $("input[name='password_check']").val();
            if (password_check == 0) return;
            if (password === password_check) {
                $("input[name='password_check']").addClass("is-success");
                $("#password_check .j_icon").addClass("fa-check");
                if ($("input[name='email']").hasClass("is-success")) $(".j_submit").prop('disabled', false);
            } else {
                $("input[name='password_check']").addClass("is-danger");
                $("#password_check .help").text('パスワードが一致しません。');
            }
        } else {
            $("input[name='password']").addClass("is-danger");
            $("#password .help").text("形式が正しくありません");
        }
    });

    $("input[name='password_check']").change(function () {
        $("input[name='password_check']").removeClass("is-danger is-success");
        $("#password_check .is-danger").text('');
        $("#password_check .j_icon").removeClass("fa-check");
        $(".j_submit").prop('disabled', true);
        var password_check = $("input[name='password_check']").val();
        var password = $("input[name='password']").val();
        if (password_check == 0 || password == 0) return;
        if ($("input[name='password']").val() === password_check) {
            $("input[name='password_check']").addClass("is-success");
            $("#password_check .j_icon").addClass("fa-check");
            if ($("input[name='email']").hasClass("is-success")) $(".j_submit").prop('disabled', false);
        } else {
            $("input[name='password_check']").addClass("is-danger");
            $("#password_check .help").text('パスワードが一致しません。');
        }
    });
});