let userid = '';
var params = getParams();
userid = params.userid;

function getParams() {
    var params = {};
    if (1 < window.location.search.length) {
        var query = window.location.search.substring(1);
        var emp = query.split('&');
        for (var i = 0; i < emp.length; i++) {
            var element = emp[i].split('=');
            var key = decodeURIComponent(element[0]);
            var value = decodeURIComponent(element[1]);
            params[key] = value;
        }
    }
    alert(params['userid']);
    return params;
}
$(function () {


    getUserParam();

    function getUserParam() {
        $.ajax({
            type: "POST",
            url: "controller/aync.php",
            data: { func: 'getUserParam', value: userid },
            dataType: 'json'
        }).done(function (data) {
            // 通信成功時のコールバック処理
            if (data) {
                console.log(data['name']);
            } else {//return 0 ユーザー使用可
                console.log("error");
            }
        }).fail(function (data) {
            // 通信失敗時のコールバック処理
            alert("申し訳ございません。エラーが発生しました。\n時間を空けてもう一度お試しください。");
        });
    }
});