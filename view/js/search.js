import { Cookie } from './modules.js';
/*
let map;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: -34.397,
            lng: 150.644
        },
        zoom: 8
    });
    alert('no--');
    /*
            if ("geolocation" in navigator) {
                var opt = {
                    "enableHighAccuracy": true,
                    "timeout": 10000,
                    "maximumAge": 0,
                };
                navigator.geolocation.getCurrentPosition(setLocation, showErr, opt);
            } else {
                alert("繝悶Λ繧ｦ繧ｶ縺御ｽ咲ｽｮ諠��ｱ蜿門ｾ励↓蟇ｾ蠢懊＠縺ｦ縺�∪縺帙ｓ");
            }

}

function setLocation(pos) {

    lat = pos.coords.latitude;
    lon = pos.coords.longitude;

    latlon = {
        lat: lat,
        lng: lon
    };
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: latlon
    });

    new google.maps.Marker({
        position: latlon,
        map,
        title: "Hello World!",
    });

}

function showErr(err) {
    switch (err.code) {
        case 1:
            alert("菴咲ｽｮ諠��ｱ縺ｮ蛻ｩ逕ｨ縺瑚ｨｱ蜿ｯ縺輔ｌ縺ｦ縺�∪縺帙ｓ");
            break;
        case 2:
            alert("繝�ヰ繧､繧ｹ縺ｮ菴咲ｽｮ縺悟愛螳壹〒縺阪∪縺帙ｓ");
            break;
        case 3:
            alert("繧ｿ繧､繝�繧｢繧ｦ繝医＠縺ｾ縺励◆");
            break;
        default:
            alert(err.message);
    }
}*/
var flag = true;
var cookiesRow = document.cookie; //全てのcookieを取り出して
var cookiesArray = cookiesRow.split(';'); // ;で分割し配列に
for (var cookieRow of cookiesArray) { //一つ一つ取り出して
    console.log(cookieRow);
    var cookie = cookieRow.split('='); //さらに=で分割して配列に
    if (cookie[0] == "spotem_thema") { // 取り出したいkeyと合致したら
        alert(cookie[1]); // [key,value] 
        flag = false;
    }
}
if (flag) {
    document.cookie = "spotem_thema=dark";
}