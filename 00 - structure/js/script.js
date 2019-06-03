// navbar
$(function () {
  $(document).scroll(function () {
      var $nav = $(".navbar-fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});

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
// subscribe ends

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

//games
$(document).ready(function() {
    // Hide When focus lost on BlackJack
    $('.tab [tab]').on('click', function() {
        var tabBl = $(this).attr('tab');
        if (tabBl != 'bl') {
            $('#info_blackjack').hide();
        } else if (tabBl == 'all') {
            $('.tab-body .card').showAll();
        } else {
            $('#info_blackjack').show();
        }
    });
    // Info about Games end

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
            var item = $('.filter-body .tab-texts [tab]:nth-child(' + i + ')').attr('tab')
            console.log(item.includes(tabName))
            if (item.includes(tabName)) {
                $('.filter-body .tab-texts [tab]:nth-child(' + i + ')').addClass('active');
            }
        }

    });
});
//games

//Read more
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

function myFunction1() {
    var dots = document.getElementById("dots1");
    var moreText = document.getElementById("more1");
    var btnText = document.getElementById("myBtn1");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

function myFunction2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("myBtn2");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

function myFunction3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("myBtn3");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}


function myFunction4() {
    var dots = document.getElementById("dots4");
    var moreText = document.getElementById("more4");
    var btnText = document.getElementById("myBtn4");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

function myFunction_re1() {
    var dots = document.getElementById("dots-re1");
    var moreText = document.getElementById("more-re1");
    var btnText = document.getElementById("myBtn-re1");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

function myFunction_re2() {
    var dots = document.getElementById("dots-re2");
    var moreText = document.getElementById("more-re2");
    var btnText = document.getElementById("myBtn-re2");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

function myFunction_re3() {
    var dots = document.getElementById("dots-re3");
    var moreText = document.getElementById("more-re3");
    var btnText = document.getElementById("myBtn-re3");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

function myFunction_re4() {
    var dots = document.getElementById("dots-re4");
    var moreText = document.getElementById("more-re4");
    var btnText = document.getElementById("myBtn-re4");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
//Read more ends

//How we score
$(document).ready(function () {  
    $(".how-we-score-sc--s-- .list--s-- .col-25--s--").click(function () {
        $(this).find(".info--s--").fadeToggle();
        $(".how-we-score-sc--s-- .list--s-- .col-25--s--").not($(this)).find('.info--s--').fadeOut();
    });

    $(".how-we-score-sc--s-- .close--s-- i").click(function () {
        $(this)
            .closest(".info--s--")
            .fadeOut();
    });
});