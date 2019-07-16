/**
 * Created by Eyvazoff on 13/2/2018.
 */
function detectmob() {
    return !!(navigator.userAgent.match(/Android/i)
        || navigator.userAgent.match(/webOS/i)
        || navigator.userAgent.match(/iPhone/i)
        || navigator.userAgent.match(/iPad/i)
        || navigator.userAgent.match(/iPod/i)
        || navigator.userAgent.match(/BlackBerry/i)
        || navigator.userAgent.match(/Windows Phone/i))
        && (window.innerWidth <= 768);
}

function disableScroll() {
    $("body,html").css("overflow", "hidden");
}

function enableScroll() {
    $("body,html").css("overflow", "auto");
}

Array.prototype.remove = function () {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};

Array.prototype.diff = function (arr2) {
    var ret = [];
    this.sort();
    arr2.sort();
    for (var i = 0; i < this.length; i += 1) {
        if (arr2.indexOf(this[i]) > -1) {
            ret.push(this[i]);
        }
    }
    return ret;
};

var list_array = [];

function filter(t, type) {
    var filter_list = $(".filter-list");
    var check_filter_list_i = $("[data-filter-list]");
    t = $(t);
    if (type === 'all') {
        filter_list.find("li").removeClass("active");
        filter_list.find("li:eq(0)").addClass("active");
        check_filter_list_i.find("div[data-filter]").show();
        list_array = [];
    } else {
        check_filter_list_i.find("div[data-filter]").hide();
        if (t.hasClass("active")) {
            t.removeClass("active");
            list_array.remove(type);
        } else {
            t.addClass("active");
            list_array.push(type);
        }
        var m = 0;
        filter_list.find("li.all").removeClass("active");
        filter_list.find("li").each(function () {
            if ($(this).hasClass("active")) m++;
        });
        check_filter_list_i.find("div[data-filter]").each(function () {
            var filter_check = $(this).attr("data-filter");
            var filter_data = [];
            if (filter_check.includes(",")) {
                filter_data = filter_check.split(",")
            } else {
                filter_data.push(filter_check)
            }
            if (list_array.diff(filter_data).length >= list_array.length) {
                $(this).show();
            }
        });
        if (m === 0) {
            check_filter_list_i.find("div[data-filter]").show();
            filter_list.find("li.all").addClass("active");
        }
    }
}

function showMore(t) {
    if ($(t).hasClass("active")) {
        $(t).removeClass("active")
        $(".more-text").slideUp();
    } else {
        $(t).addClass("active")
        $(".more-text").slideDown();
    }
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


function showMoreText(t) {
    t = $(t);
    var m = $(".more-game-inner-desc");
    if (t.hasClass("more-active")) {
        t.removeClass("more-active");
        t.text(t.attr("data-text").split(",")[0])
        m.slideUp();
    } else {
        t.addClass("more-active");
        t.text(t.attr("data-text").split(",")[1])
        m.slideDown();
    }
}


function showMenu(type) {
    var menu = $(".main-menu");
    var blanked = $(".blanked");
    var h = $(".hamburger")
    if (type === 'open') {
        menu.addClass("open");
        blanked.show();
        disableScroll()
        h.hide()
    } else if (type === 'close') {
        menu.removeClass("open");
        blanked.hide();
        h.show();
        enableScroll()
    }
}


function animateValue(id, start, end, duration) {
    var range = end - start;
    range = range.toFixed(0);
    var current = start.toFixed(1);
    var increment = end > start ? 0.1 : -1;
    var stepTime = duration / range;
    var timer = setInterval(function () {
        current += increment;
        id.text(current);
        if (current === end) {
            id.text(current.toFixed(1));
            clearInterval(timer);
        }
    }, stepTime);
}

function c_acc(t) {
    $(t).toggleClass("active");
}