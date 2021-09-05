;(function ($) {
    $('#commentform').submit(function () {
        if ($.trim($("#email").val()) === "" || $.trim($("#author").val()) === "" || $.trim($("#comment").val()) === "") {
            $(".error-message").fadeIn();
            return false;
        }else {
            $(".success-message").fadeIn();
        }
    });
})(jQuery)