import { Alert } from './modules.js';

var deferred = Alert.get();
deferred.done(function (data) {
    if (data) {
        $(".help").text(data);
    }
});
var params = (new URL(document.location)).searchParams;
var unique = params.get('unique');
$("input[name='unique']").val(unique);
$(function () {
});