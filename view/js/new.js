$(function () {
    $("input[name='keyword']").on("input", function () {
        var keyword = $("input[name='keyword']").val();
        $(".j-autocomplete").addClass("hidden");
        $(".j-submit").removeClass("bg-yellow-600");
        $(".j-submit").addClass("bg-gray-400");
        $(".j-submit").prop('disabled', true);
        var service = new google.maps.places.AutocompleteService()
        service.getPlacePredictions({
            componentRestrictions: { country: "jp" },
            input: keyword,
        }, function (results, status) {
            if (status === 'ZERO_RESULTS') return;
            $(".j-autocomplete").empty();
            $(".j-autocomplete").removeClass("hidden");
            results.forEach(data => {
                $(".j-autocomplete").append('<li class="pl-2 py-2 hover:bg-gray-50 text-xs" data-id="' + data.place_id + '" data-place="' + data.structured_formatting.main_text + '">' + data.structured_formatting.main_text + " - " + data.structured_formatting.secondary_text + '</li>');
            });
        });
    });

    $(document).on("click", ".j-autocomplete li", function (e) {
        $(".j-autocomplete li").removeClass("bg-gray-200");
        $(".j-autocomplete li").addClass("hover:bg-gray-50");
        $(this).removeClass("hover:bg-gray-50");
        $(this).addClass("bg-gray-200");
        var placeId = $(this).data("id");
        var place = $(this).data("place");
        $("input[name='place_id']").val(placeId);
        $("input[name='place']").val(place);
        $(".j-submit").removeClass("bg-gray-400");
        $(".j-submit").addClass("bg-yellow-600");
        $(".j-submit").prop('disabled', false);
    });
});