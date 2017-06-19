$(document).ready(function() {
    $("#login-form, #register-form").hide();
    $("#log-ind, #register").click(function() {
        $(this).next("form").slideToggle()
    });
    
    $("#basket > p").click(function() {
        $("#login-form").slideToggle()
    });
});