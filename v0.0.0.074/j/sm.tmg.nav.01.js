$(document).ready(function() {
    var status01 = 02; // Status 01 is CLOSED.
    var status02 = 01; // Status 02 is OPENED.
    $(".navOptions01").css({height: "400px"});
    $(".navMenu").click(function() {
        //$(".navOptions02").fadeOut(200);
        //if (status02 === 02) {
        //    $(".navSocial").css("background", "linear-gradient(to right, #264f05, #232323, #232323)");
        //    status02 = 01;
        //}
        if (status01 === 01) {
            if (status02 === 02) {
                $(".navOptions02").animate({height: "0px"}, 500);
                $(".navSocial").css("background", "linear-gradient(to right, #264f05, #232323, #232323)");
                status02 = 01;
                $(".navOptions01").delay(500);
            }
            $(".navOptions01").animate({height: "400px"}, 500);
            $(".navMenu").css("background", "linear-gradient(to left, #000000, #232323, #232323)");
            status01 = 02;
        } else if (status01 === 02) {
            $(".navOptions01").fadeToggle().animate({height: "0px"}, 500);
            $(".navMenu").css("background", "linear-gradient(to left, #264f05, #232323, #232323)");
            status01 = 01;
        }
        //if (status01 === 01) {
        //    $(".navMenu").css("background", "linear-gradient(to left, #000000, #232323, #232323)");
        //    $(".navMenu").fade
        //   status01 = 02;
        //} else if (status01 === 02) {
        //    $(".navMenu").css("background", "linear-gradient(to left, #264f05, #232323, #232323)");
        //    status01 = 01;
        //};
    });
    $(".navSocial").click(function() {
        //$(".navOptions01").fadeOut(200);
        //if (status01 === 02) {
        //    $(".navMenu").css("background", "linear-gradient(to left, #264f05, #232323, #232323)");
        //    status01 = 01;
        //}
        if (status02 === 01) {
            if (status01 === 02) {
                $(".navOptions01").animate({height: "0px"}, 500);
                $(".navMenu").css("background", "linear-gradient(to left, #264f05, #232323, #232323)");
                status01 = 01;
                $(".navOptions02").delay(500);
            }
            $(".navOptions02").animate({height: "300px"}, 500);
            $(".navSocial").css("background", "linear-gradient(to right, #000000, #232323, #232323)");
            status02 = 02;
        } else if (status02 === 02) {
            $(".navOptions02").animate({height: "0px"}, 500);
            $(".navSocial").css("background", "linear-gradient(to right, #264f05, #232323, #232323)");
            status02 = 01;
        }
        //$(".navOptions02").delay(200).fadeToggle();
        //if (status02 === 01) {
        //    $(".navSocial").css("transition", "background 0.2s ease");
        //    $(".navSocial").css("background", "linear-gradient(to right, #000000, #232323, #232323)");
        //   status02 = 02;
        //} else if (status02 === 02) {
        //    $(".navSocial").css("background", "linear-gradient(to right, #264f05, #232323, #232323)");
        //    status02 = 01;
        //};
    });
});