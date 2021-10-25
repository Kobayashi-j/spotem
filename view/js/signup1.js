import { User } from './modules.js';
$(function () {
    if ($("input[name='userid']").val() !== '' && $("input[name='name']").val() !== '') {
        $(".j-userid-check, .j-name-check").removeClass("invisible");
        $(".j-submit").removeClass("cursor-not-allowed");
        $(".j-submit").prop('disabled', false);
    }
    $("input[name='userid']").on("change", function () {
        //装飾のリセット
        $(".j-userid-help").text('');
        $(".j-userid-check").addClass("invisible");
        $(".j-submit").addClass("cursor-not-allowed");
        $(".j-submit").prop("disabled", true);

        var userid = $("input[name='userid']").val();
        //値が入力されていない場合
        if (userid.length == 0) return;
        switch (userid) {
            case 'top':
            case 'login':
            case 'signup':
            case 'home':
            case 'info':
            case 'search':
            case 'new':
            case 'show':
            case 'settings':
                $(".j-userid-help").text('利用不可');
                break;
            default:
                if (userid.match(/[^A-Za-z0-9\-_]+/)) {
                    $(".j-userid-help").text('特殊文字不可');
                } else {
                    var deferred = User.find(userid);
                    //Deferredオブジェクトを監視し、完了の通知がきたらdone内を実行
                    deferred.done(function (data) {
                        if (data) {
                            $(".j-userid-help").text('既に使用されています。');
                        } else {
                            $(".j-userid-check").removeClass("invisible");
                            if (!$(".j-name-check").hasClass("invisible")) {
                                $(".j-submit").removeClass("cursor-not-allowed");
                                $(".j-submit").prop('disabled', false);
                            }
                        }
                    });
                }
                break;
        }
    });

    $("input[name='name']").on("change", function () {
        //装飾のリセット
        $(".j-name-check").addClass("invisible");
        $(".j-submit").addClass("cursor-not-allowed");
        $(".j-submit").prop("disabled", true);

        var name = $("input[name='name']").val();
        //値が入力されていない場合
        if (name.length !== 0) {
            $(".j-name-check").removeClass("invisible");
            if (!$(".j-userid-check").hasClass("invisible")) {
                $(".j-submit").removeClass("cursor-not-allowed");
                $(".j-submit").prop('disabled', false);
            }
        }
    });
});