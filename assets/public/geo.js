function initMap() {
    'use strict';
    var xtarget = document.getElementById('xmap');
    var geocoder = new google.maps.Geocoder();
    var map;
    var tokyo = { lat: 35.681167, lng: 139.767052 };

    map = new google.maps.Map(xtarget, {
        center: tokyo,
        // zoom: 0
        // zoom: 6
        zoom: 15
    });
    geocoder.geocode({
        location: tokyo
    }, function (results, status) {
        if (status !== 'OK') {
            alert('Failed: ' + status);
            return;
        }
        // results[0].formatted_address
        if (results[0]) {
            document.getElementById('address').innerHTML = results[0].formatted_address;
        } else {
            alert('場所が特定できません。');
            return;
        }
    });
    navigator.geolocation.getCurrentPosition(function (position) {
        map = new google.maps.Map(xtarget, {
            center: {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            },
            zoom: 15
        });
        geocoder.geocode({
            location: {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            }
        }, function (results, status) {
            if (status !== 'OK') {
                alert('Failed: ' + status);
                return;
            }
            // results[0].formatted_address
            if (results[0]) {
                document.getElementById('address').innerHTML = results[0].formatted_address + "<br>" +
                    "緯度: " + position.coords.latitude + "<br>" +
                    "経度: " + position.coords.longitude;
            } else {
                alert('場所が特定できません。');
                return;
            }
        });
        map.addListener('click', function (e) {
            geocoder.geocode({
                location: e.latLng
            }, function (results, status) {
                if (status !== 'OK') {
                    alert('Failed: ' + status);
                    return;
                }
                // results[0].formatted_address
                if (results[0]) {    // 地図上をクリックするとマーカーをドロップ
                    var marker = new google.maps.Marker({
                        position: e.latLng,
                        map: map,
                        title: results[0].formatted_address,  // マーカーをホーバーすると取得した住所を表示
                        animation: google.maps.Animation.DROP
                    });
                    marker.addListener('click', function () {
                        this.setMap(null);      // マーカーをクリックした時に消す
                    });

                }
                else {
                    alert('場所が特定できません。');
                    return;
                }
            });
        });

    }, function () {
        alert('Geolocation failed!');
        return;
    });
    //---------------------------------------------------
    // 位置情報をサポートしていない端末で地図をクリックした時の処理
    //---------------------------------------------------
    map.addListener('click', function (e) {
        geocoder.geocode({
            location: e.latLng
        }, function (results, status) {
            if (status !== 'OK') {
                alert('Failed: ' + status);
                return;
            }
            // results[0].formatted_address
            if (results[0]) {
                var marker = new google.maps.Marker({
                    position: e.latLng,
                    map: map,
                    title: results[0].formatted_address,  // マーカーをホーバーすると取得した住所を表示
                    animation: google.maps.Animation.DROP
                });
                marker.addListener('click', function () {
                    this.setMap(null);      // マーカーをクリックした時に消す
                });
            } else {
                alert('No results found');
                return;
            }
        });
    });
}