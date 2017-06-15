$(document).ready(function() {
    $("#log-ind, #register").click(function() {
        console.log("something");
        $(this).next("form").slideToggle();
        return false;
    })
})