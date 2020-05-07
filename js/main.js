$(document).ready(function () {
    if(window.location.href.indexOf("signup") > -1) {
       $('#signupbtn').hide();
       $('.navbar-nav .active').removeClass('active');
    }
    if(window.location.href.indexOf("blood-donor") > -1) {      
       $('#mainNav .active').removeClass('active');
       $('#blooddonor').addClass('active');
    }
     if(window.location.href.indexOf("service") > -1) {      
       $('#mainNav .active').removeClass('active');
       $('#bloodbank').addClass('active');
    }
    
});