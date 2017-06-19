$(document).ready(function() {
    $("#login-form, #register-form, #upload-form").hide();
    $("#log-ind, #register").click(function() {
        $(this).next("form").slideToggle()
    });
    
    $("#basket > p").click(function() {
        $("#login-form").slideToggle()
    });
    
    $("#upload").find("h3").click(function() {
        $("#upload-form").slideToggle();
    });
});