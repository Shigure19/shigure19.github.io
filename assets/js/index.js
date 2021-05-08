$(document).ready(function () {
    //获取我的年龄
    $("#age").text(Math.round((new Date() / 1000 - 984454200) / 86400 / 365));
    $(".saoui-window").mouseenter(function () {
        $(this).animate({}, function () {
            $(this).css({
                'transform': 'scale(1.25,1.25)'
            })
        });
    })
    $(".saoui-window").mouseleave(function () {
        $(this).animate({}, function () {
            $(this).css({
                'transform': 'scale(1,1)'
            })
        });
    })
});
