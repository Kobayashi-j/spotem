import { Alert } from './modules.js';

var deferred = Alert.get();
deferred.done(function (data) {
    if (data) {
        var message = data["message"];
        var type = data["type"];
        console.log('alert:' + message + ', type:' + type);
    }
});

$(function () {
    $(".j-hamburger").on("click", function () {
        $(".j-menu-bg").removeClass("hidden");
        $(".j-menu").animate({
            "width": "40%"
        }, 200, "linear");
    });
    
});