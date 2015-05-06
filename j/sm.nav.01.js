$(document).ready(function() {
    //     NAVIGATION
    $("#producersContext").hide();
    $("#videosContext").hide();
    $(".producers").click(function(){
        $("#producersContext").slideToggle(400,"swing");
    });
    $(".producers").mouseenter(function(){
        $(".producers").css("background-position","0px -50px");
    });
    $(".producers").mouseleave(function(){
        $(".producers").css("background-position","0px 0px");
        if(!$("#producersContext").is(':hover')) {
            $("#producersContext").slideUp(400,"swing");
        }
    });
    $("#producersContext").mouseover(function(){
        $(".producers").css("background-position","0px -50px");
    });
    $("#producersContext").mouseleave(function(){
        $(".producers").css("background-position","0px 0px");
        $("#producersContext").slideToggle(400,"swing");
    });
    $(".videos").click(function(){
        $("#videosContext").slideToggle(400,"swing");
    });
    $(".videos").mouseenter(function(){
        $(".videos").css("background-position","0px -50px");
    });
    $(".videos").mouseleave(function(){
        $(".videos").css("background-position","0px 0px");
        if(!$("#videosContext").is(':hover')) {
            $("#videosContext").slideUp(400,"swing");
        }
    });
    $("#videosContext").mouseover(function(){
        $(".videos").css("background-position","0px -50px");
    });
    $("#videosContext").mouseleave(function(){
        $(".videos").css("background-position","0px 0px");
        $("#videosContext").slideToggle(400,"swing");
    });
    $(".videos").mouseleave(function(){
        $(".videos").css("background-position","0px 0px");
    });
    $(".live").mouseenter(function(){
        $(".live").css("background-position","0px -50px");
    });
    $(".live").mouseleave(function(){
        $(".live").css("background-position","0px 0px");
    });
    $(".twitter").mouseenter(function(){
        $(".twitter").css("background-position","0px -50px");
    });
    $(".twitter").mouseleave(function(){
        $(".twitter").css("background-position","0px 0px");
    });
    $(".forum").mouseenter(function(){
        $(".forum").css("background-position","0px -50px");
    });
    $(".forum").mouseleave(function(){
        $(".forum").css("background-position","0px 0px");
    });
});