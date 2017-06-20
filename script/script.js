$(document).ready(function() {
    /*Function for sliding the aside bar in and out during responsive mode*/
    function asideSlide() {
        if ($("aside").css("left") == "-150px") {
            $("#aside-bar").find(".fa").removeClass("fa-angle-right").addClass("fa-angle-left");
            $("aside").css("left", "30px");
        } else if ($("aside").css("left") == "30px") {
            $("#aside-bar").find(".fa").removeClass("fa-angle-left").addClass("fa-angle-right");
            $("aside").css("left", "-150px");
        }
    }
    
    /*Hide forms*/
    $("#login-form, #register-form, #upload-form").hide();
    
    /*On relevant nav item click, show forms*/
    $("#log-ind, #register").click(function() {
        $(this).next("form").slideToggle()
    });
    
    /*On basket click while logged out, show form*/
    $("#basket > p").click(function() {
        asideSlide();
        $("#login-form").slideToggle();
    });
    
    /*Show form for uploads*/
    $("#upload").find("h3").click(function() {
        $("#upload-form").slideToggle();
    });
    
    /*Show aside on aside-bar click*/
    $("#aside-bar").click(function() {
        asideSlide();
    });
});