$(function() {
    /*page loader*/
    $('#pgLoader').fadeOut("slow");

    /*eye icon, toggle password*/
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        }
        else {
            input.attr("type", "password");
        }
    });

    /*spinner added on click submit buttons*/
    $(document).on('click', 'button[type=submit]', function() {
        $(this).append('<span class="ml-2 fa fa-spinner fa-spin"></span>');
    });
});
