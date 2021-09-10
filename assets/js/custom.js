;(function ($) {
    $('#commentform').submit(function () {
        if ($.trim($("#email").val()) === "" || $.trim($("#author").val()) === "") {
            $(".error-message").fadeIn();
            return false;
        }else {
            $(".success-message").fadeIn();
        }
    });
})(jQuery)