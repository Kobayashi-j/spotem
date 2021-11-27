$(function () {
    $(".j-back").on("click", function () {
        window.history.back();
    });

    $("textarea[name='body']").on("input", function () {
        var body = $("textarea[name='body']").val();
        if (body.length > 0) {
            $(".j-submit").removeClass("bg-gray-400");
            $(".j-submit").addClass("bg-yellow-600");
            $(".j-submit").prop('disabled', false);
        } else {
            $(".j-submit").removeClass("bg-yellow-600");
            $(".j-submit").addClass("bg-gray-400");
            $(".j-submit").prop('disabled', true);
        }
    })
});