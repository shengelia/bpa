// Scrolling navbar
$(function () {
  $(document).scroll(function () {
      var $nav = $(".fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});
// Scrolling navbar

// Filter Starts
var arr = [];
var listLength = $(".filter-body>div").length
$(".filter-header [filter]").click(function(e) {
    e.preventDefault()
    var filterName = $(this).attr('filter');

    var card = $('.filter-body .cards');

    if (filterName === 'all') {
        $('.filter-header li').removeClass('filter_active');
        $(this).addClass('filter_active');
        card.fadeIn();
        arr = []
    } else {
        $(".filter-header li[filter='all']").removeClass('filter_active')
        $(this).toggleClass('filter_active');
        card.fadeOut(0);
        var attr = $(this).attr('filter')
        if (arr.includes(attr)) {
            if (arr.length == 1) {
                $(".filter-header li[filter='all']").addClass('filter_active');
                card.fadeIn();
                arr = jQuery.grep(arr, function(value) {
                    return value != attr;
                });
            } else {
                arr = jQuery.grep(arr, function(value) {
                    return value != attr;
                });
            }
        } else {
            arr.push($(this).attr('filter'))
        }
        console.log(arr);

        // console.log(arr)

        for (var i = 1; i < listLength + 1; i++) {
            // console.log('a');

            // $('.filter-body .card[filter=' + arr[i] + ']').fadeIn();
            if (arr.length == 1) {
                var item = $('.filter-body .cards:nth-child(' + i + ')').attr('filter')
                if (item.includes(arr[0])) {
                    $('.filter-body .cards:nth-child(' + i + ')').fadeIn();
                }

            } else if (arr.length == 2) {
                var item = $('.filter-body .cards:nth-child(' + i + ')').attr('filter')
                if (
                    item.includes(arr[0]) &&
                    item.includes(arr[1])
                ) {
                    $('.filter-body .cards:nth-child(' + i + ')').fadeIn();
                }
            } else if (arr.length == 3) {
                var item = $('.filter-body .cards:nth-child(' + i + ')').attr('filter')
                if (
                    item.includes(arr[0]) &&
                    item.includes(arr[1]) &&
                    item.includes(arr[2])
                ) {
                    $('.filter-body .cards:nth-child(' + i + ')').fadeIn();
                }
            } else if (arr.length == 4) {
                var item = $('.filter-body .cards:nth-child(' + i + ')').attr('filter')
                if (
                    item.includes(arr[0]) &&
                    item.includes(arr[1]) &&
                    item.includes(arr[2]) &&
                    item.includes(arr[3])
                ) {
                    $('.filter-body .cards:nth-child(' + i + ')').fadeIn();
                }
            } else if (arr.length == 5) {
                var item = $('.filter-body .cards:nth-child(' + i + ')').attr('filter')
                if (
                    item.includes(arr[0]) &&
                    item.includes(arr[1]) &&
                    item.includes(arr[2]) &&
                    item.includes(arr[3]) &&
                    item.includes(arr[4])
                ) {
                    $('.filter-body .cards:nth-child(' + i + ')').fadeIn();
                }
            } else if (arr.length == 6) {
                var item = $('.filter-body .cards:nth-child(' + i + ')').attr('filter')
                if (
                    item.includes(arr[0]) &&
                    item.includes(arr[1]) &&
                    item.includes(arr[2]) &&
                    item.includes(arr[3]) &&
                    item.includes(arr[4]) &&
                    item.includes(arr[5])
                ) {
                    $('.filter-body .cards:nth-child(' + i + ')').fadeIn();
                }
            } else if (arr.length == 7) {
                var item = $('.filter-body .cards:nth-child(' + i + ')').attr('filter')
                if (
                    item.includes(arr[0]) &&
                    item.includes(arr[1]) &&
                    item.includes(arr[2]) &&
                    item.includes(arr[3]) &&
                    item.includes(arr[4]) &&
                    item.includes(arr[5]) &&
                    item.includes(arr[6])
                ) {
                    $('.filter-body .cards:nth-child(' + i + ')').fadeIn();
                }
            } else if (arr.length == 8) {
                var item = $('.filter-body .cards:nth-child(' + i + ')').attr('filter')
                if (
                    item.includes(arr[0]) &&
                    item.includes(arr[1]) &&
                    item.includes(arr[2]) &&
                    item.includes(arr[3]) &&
                    item.includes(arr[4]) &&
                    item.includes(arr[5]) &&
                    item.includes(arr[6]) &&
                    item.includes(arr[7])
                ) {
                    $('.filter-body .cards:nth-child(' + i + ')').fadeIn();
                }
            } else if (arr.length == 9) {
                var item = $('.filter-body .cards:nth-child(' + i + ')').attr('filter')
                if (
                    item.includes(arr[0]) &&
                    item.includes(arr[1]) &&
                    item.includes(arr[2]) &&
                    item.includes(arr[3]) &&
                    item.includes(arr[4]) &&
                    item.includes(arr[5]) &&
                    item.includes(arr[6]) &&
                    item.includes(arr[7]) &&
                    item.includes(arr[8])
                ) {
                    $('.filter-body .cards:nth-child(' + i + ')').fadeIn();
                }
            } else if (arr.length == 10) {
                var item = $('.filter-body .cards:nth-child(' + i + ')').attr('filter')
                if (
                    item.includes(arr[0]) &&
                    item.includes(arr[1]) &&
                    item.includes(arr[2]) &&
                    item.includes(arr[3]) &&
                    item.includes(arr[4]) &&
                    item.includes(arr[5]) &&
                    item.includes(arr[6]) &&
                    item.includes(arr[7]) &&
                    item.includes(arr[8]) &&
                    item.includes(arr[10])
                ) {
                    $('.filter-body .cards:nth-child(' + i + ')').fadeIn();
                }
            }
        }
    }
    e.preventDefault()
    return false;
});
// Filter End

// Games
$(document).ready(function() {
    // Hide When focus lost on BlackJack
    $('.tab [tab]').on('click', function() {
        var tabBl = $(this).attr('tab');
        if (tabBl != 'afl') {
            $('#info_blackjack').hide();
        } else if (tabBl == 'all') {
            $('.tab-body .card').showAll();
        } else {
            $('#info_blackjack').show();
        }
    });

    var tabTextLength = $(".filter-body .tab-texts [tab]").length;
    var tabCardLength = $(".filter-body .tab-cards [tab]").length;
    $('.tab [tab]').click(function() {
        var tabName = $(this).attr('tab');

        $(this).addClass('active_filter').siblings().removeClass('active_filter');

        $('.tab-body [tab]').removeClass('active main');
        var j = 0
        for (var i = 1; i < tabCardLength + 1; i++) {
            var item = $('.filter-body .tab-cards [tab]:nth-child(' + i + ')').attr('tab');
            // console.log(item.includes(tabName))
            if (item.includes(tabName)) {
                $('.filter-body .tab-cards [tab]:nth-child(' + i + ')').addClass('active');
                j++;
                if (j == 1) {
                    $('.filter-body .tab-cards [tab]:nth-child(' + i + ')').addClass('main');
                }
            }
        }

        for (var i = 1; i < tabTextLength + 1; i++) {
            var item = $('.filter-body .tab-texts [tab]:nth-child(' + i + ')').attr('tab');
            console.log(item.includes(tabName))
            if (item.includes(tabName)) {
                $('.filter-body .tab-texts [tab]:nth-child(' + i + ')').addClass('active');
            }
        }
    });
});
// Games End

$(document).ready(function () {
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
})