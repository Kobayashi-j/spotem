$(function () {
    // サイドメニュー
    $(".j-hamburger").on("click", function () {
        $(".j-side-transparent").removeClass("hidden");
        $(".j-side-bg").animate({
            "width": "60%"
        }, 200, "swing", function () {
            $(".j-side-menu").removeClass("hidden");
        });
    });

    $(".j-side-transparent, .j-side-close").on("click", function () {
        $(".j-side-menu").addClass("hidden");
        $(".j-side-bg").animate({
            "width": "0%"
        }, 200, "swing", function () {
            $(".j-side-transparent").addClass("hidden");
        });
    });
});