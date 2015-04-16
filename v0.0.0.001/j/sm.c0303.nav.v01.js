// JavaScript Document
$(document).ready(function() {
    $(".cellRight").mouseenter(function() {
        $(this).css("background-image", "url(m/nv/menu-ver01.b.png)");
    });
    $(".cellRight").mouseleave(function() {
        $(this).css("background-image", "url(m/nv/menu-ver01.a.png)");
    });
});