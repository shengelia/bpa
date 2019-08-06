$(document).ready(function () {
  //18+
  $('[data-toggle="tooltip"]').tooltip()
});

 function downloadApp(t) {
        var url = 'https://bizonspel.com/lm/user/signup';
        var form = $(t);
        clearFormError(form);
        var email = form.find("input[name='email']");
        var fullname = form.find("input[name='fullname']");
        var agree = form.find("input[name='agree']");
        if (!fullname.val() || !validateEmail(email.val()) || !agree.prop('checked')) {
            if (!fullname.val()) fullname.addClass("error-control");
            if (!validateEmail(email.val())) email.addClass("error-control");
            if (!agree.prop('checked')) agree.addClass("error-control");
        } else {
            $.ajax({
                type: "POST",
                url: url,
                contentType: "application/json",
                data: JSON.stringify(getFormData(form)),
                success: function (data) {
                    $("#play-button").get(0).click();
                },
                error: function (err) {
                    alert('This email already signed')
                }
            });
        }
    }

function clearFormError($form) {
        $form.find("input").removeClass("error-control")
    }
    function getFormData($form) {
        var un_array = $form.serializeArray();
        var new_array = {};
        $.map(un_array, function (n) {
            new_array[n['name']] = n['value'];
        });
        return new_array;
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}