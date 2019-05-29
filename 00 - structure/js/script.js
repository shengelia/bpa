// rating stars
var options = {
    max_value: 5,
    step_size: 0.5,
    initial_value: 0,
    cursor: 'pointer',
    readonly: true,
    change_once: true,
    // ajax_method: 'POST',
    // url: 'http://localhost/test.php',
    additional_data: {} // Additional data to send to the server
}
$(".rating").rate(options);


// current day (today) starts
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();

months = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
]

today = months[parseInt(mm) - 1] + ' ' + dd + ' ' + yyyy;

var todayElem = document.getElementById('current_date');
todayElem.innerHTML = today;


// Subscribe
function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
$("#signup-button").click(function(e) {
    var $email = $("#subscribe-email").val();
    if (validateEmail($email)) {
        $(".message-content").html("Success! You are subscribed!");
        $(".message-content-err").html("")
    } else {
        $(".message-content").html("");
        $(".message-content-err").html("Enter a valid email address, please.");
    }
    $(".subscribe-message").fadeIn(1500).css("display", "block").delay(2000);
    e.preventDefault();
});


// filter starts
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
// filter ends