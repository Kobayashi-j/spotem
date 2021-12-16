$(function () {
    $("input[name='accept_image']").on("change", function () {
        var file = $("input[name='accept_image']").prop('files')[0];
        var filereader = new FileReader();
        //添付ファイルの読み込みが成功したときに実行されるイベント（成功時のみ）
        //一旦飛ばしてreader_ .readAsDataURLが先に動く
        filereader.onload = function () {
            //Data URI Schemeをimgタグのsrcにいれてリアルタイムに添付画像を描画する
            $('#Preview').empty();
            $('#Preview').html('<img src="' + filereader.result + '" class="h-64">');
        }
        //Data URI Schemeを取得する 
        filereader.readAsDataURL(file);
    });

    $(".j-auto_address").on("click", function () {
        var postal = $("input[name='postal1']").val() + $("input[name='postal2']").val();
        if (!postal.match(/[0-9]{7}/)) return false;
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            "address": postal
        }, function (results, status) {
            if (status === 'ZERO_RESULTS') return;
            var length = results[0].address_components.length;
            var prefecture = results[0].address_components[length - 2].long_name;
            var city = results[0].address_components[length - 3].long_name;
            var town = results[0].address_components[length - 4].long_name;
            $("option[value='" + prefecture + "']").prop("selected", true);
            $("input[name='city']").val(city);
            $("input[name='town']").val(town);
        });
    });
});
/*
    $(document).on("click", ".j-autocomplete li", function (e) {
        console.log($(this).text());
    });
*/