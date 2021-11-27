const POST = '<div class="p-2 border-b border-gray-400"><div class="flex items-center p-2"><img class="w-10 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン"><div class="ml-4 flex-grow"><p class="font-bold">ぎおん徳屋&nbsp;<i class="text-sm fas fa-utensils"></i></p><p class="text-sm text-gray-600"><span>@</span>gion-tokuya</p></div></div><div class="pl-16 pr-2"><p>本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。本日は臨時休業です。</p><i class="far fa-heart"></i><i class="far fa-heart"></i></div></div>';

$(function () {
    $(".j-tabs li").on("click", function (e) {
        alert("ok");
        $(this).addClass("text-yellow-200");
        var showTab = "#tab" + $(this).data("tab");
        $(showTab).removeClass("hidden");
    });
});