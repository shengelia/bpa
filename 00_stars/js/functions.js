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
        let ds = 0;
        check_filter_list_i.find("div[data-filter]").each(function () {
            var filter_check = $(this).attr("data-filter");
            var filter_data = [];
            if (filter_check.includes(",")) {
                filter_data = filter_check.split(",")
            } else {
                filter_data.push(filter_check)
            }
            if (list_array.diff(filter_data).length >= list_array.length) {
                ds++;
                $(this).show();
            }
        });
        if(ds === 0) {
            $(".not-found-any-data").show();
        } else {
            $(".not-found-any-data").hide();
        }
        if (m === 0) {
            check_filter_list_i.find("div[data-filter]").show();
            filter_list.find("li.all").addClass("active");
        }
    }
}