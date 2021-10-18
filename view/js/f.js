import { User } from './modules.js';
$(function () {
    if ($("input[name='userid']").val() !== '' && $("input[name='name']").val() !== '') {
        $("input[name='userid'], input[name='name']").addClass("is-success");
        $("#userid .j_icon, #name .j_icon").addClass("fa-check");
        $(".j_submit").prop('disabled', false);
    }

    $("._back").click(function () {
        window.location.href = '/';
    });

    $("input[name='userid']").change(function () {
        $("input[name='userid']").removeClass("is-danger is-success");
        $("#userid .help").text('');
        $("#userid .j_icon").removeClass("fa-check");
        $(".j_submit").prop('disabled', true);
        var userid = $("input[name='userid']").val();
        if (userid == 0) return;
        if (userid.match(/[^A-Za-z0-9]+/)) {
            $("input[name='userid']").addClass("is-danger");
            $("#userid .help").text('特殊文字不可');
        } else {
            var deferred = User.find(userid);
            //Deferredオブジェクトを監視し、完了の通知がきたらdone内を実行
            deferred.done(function (data) {
                if (data) {
                    $("input[name='userid']").addClass("is-danger");
                    $("#userid .help").text('既に使用されています。');
                } else {
                    $("input[name='userid']").addClass("is-success");
                    $("#userid .j_icon").addClass("fa-check");
                    if ($("input[name='name']").hasClass("is-success")) $(".j_submit").prop('disabled', false);
                }
            });
        }
    });
    $("input[name='name']").change(function () {
        $("input[name='name']").removeClass("is-danger is-success");
        $("#name .j_icon").removeClass("fa-check");
        $(".j_submit").prop('disabled', true);
        var name = $("input[name='name']").val();
        if (name == 0) {
            return
        } else {
            $("input[name='name']").addClass("is-success");
            $("#name .j_icon").addClass("fa-check");
            if ($("input[name='userid']").hasClass("is-success")) $(".j_submit").prop('disabled', false);
        };
    });
});