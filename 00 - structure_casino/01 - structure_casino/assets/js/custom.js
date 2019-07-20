$(document).ready(function () {
    $(".loader").fadeOut(600);
    $(".init-lang").each(function () {
        $(this).text($(this).attr("data-text").split(",")[0])
    });

    $(".blanked").on("click", function () {
        showMenu('close');
    })

    $(".rating-list").each(function () {
        $(this).empty();
        var count = parseInt($(this).attr("data-star"));
        var max = 5;
        var html_m = '';
        for (var i = 0; i < max; i++) {
            if (i < count) {
                html_m += '<i class="fas fa-star scale-in-center d' + i + '"></i>';
            } else {
                html_m += '<i class="far fa-star scale-in-center d' + i + '"></i>';
            }

        }
        $(this).append(html_m);
    });


    $(".c-score").each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text().replace(",",".")
        }, {
            duration: 1200,
            easing: 'linear',
            step: function(now) {
                $(this).text(now.toFixed(1));
            },
        });
    });


    /*var el = document.getElementsByClassName("lazy-line-painter");
    for(var i = 0; i < el.length; i++) {
        var  myAnimation = new LazyLinePainter(el[i], {"ease":"easeLinear","strokeWidth":1,"strokeOpacity":1,"strokeColor":"#e9601d","strokeCap":"square"});
        myAnimation.paint();
    }*/

});