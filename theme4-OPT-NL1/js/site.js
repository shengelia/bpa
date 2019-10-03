$(document).ready(function () {
    $(window).on("resize", function (e) {
        checkScreenSize();
    });

    checkScreenSize();

    function checkScreenSize(){
        var newWindowWidth = $(window).width();
        if (newWindowWidth < 767) {
            $('.filter .txt').click(function(){
				if($(this).hasClass("show")){
					$(".filter .list").stop(true, true).slideUp();
					$(this).stop(true, true).removeClass("show");
				} else {
					$(".filter .list").stop(true, true).slideDown("normal");
					$(this).stop(true, true).addClass("show");
				}
			});
        }
    }


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
    ];

    today = dd + ' ' + months[parseInt(mm) - 1] + ' ' + yyyy;
    var todayElem = document.getElementById('current_date');
    todayElem.innerHTML = today;
    // current day (today) ends
	
});


$(function(){
	
	$(".btn_menu").click(function(){
		if($(this).hasClass("show")){
            $(".menu").stop(true, true).slideUp();
            $(this).stop(true, true).removeClass("show");
        }
        else {
            $(".menu").stop(true, true).slideDown("normal");
            $(this).stop(true, true).addClass("show");
        }
	});

	$(".menu a.open").click(function(){
		$("body").stop(true, true).addClass("noscroll");
		$(".rankings_work").stop(true, true).addClass("show");
		$(".rankings_work_inner").stop(true, true).addClass("show");
		return false;
	});
	
	$(document).keyup(function(e) {
		if (e.keyCode === 27) {
			$("body").stop(true, true).removeClass("noscroll");
			$(".rankings_work").stop(true, true).removeClass("show");
			$(".rankings_work_inner").stop(true, true).removeClass("show");
		}
	});
	
	$(document).click(function(e){
		if (!$(e.target).is(".rankings_work_inner, .rankings_work_inner *")) {
			$("body").stop(true, true).removeClass("noscroll");
			$(".rankings_work").stop(true, true).removeClass("show");
			$(".rankings_work_inner").stop(true, true).removeClass("show");
		}
	});
	
	$(".filter label").click(function() {
		var type = $(this).attr("data-type");
		if (type != "all") {
			$(".filter input#all").prop('checked', false);
		} else {
			$(".filter input").prop('checked', false);
		}
	});
	
});