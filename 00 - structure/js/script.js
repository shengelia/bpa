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