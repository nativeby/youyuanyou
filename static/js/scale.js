//字体图片随窗体缩放
function door(){
    var sreen = $(window).width();
    $("html").css("fontSize",sreen/32);
}
$(document).ready(function(){
    window.onload=function(){
        door();
    }
    window.onresize=function(){
        door();
    }

})

//展开
$(".part_tit1").click(function(){
$(".foldcon1").toggle();							  
$(".arow_right1").toggleClass("arow_up1");							  
})
$(".part_tit2").click(function(){
$(".foldcon2").toggle();							  
$(".arow_right2").toggleClass("arow_up2");							  
})
$(".part_tit3").click(function(){
$(".foldcon3").toggle();							  
$(".arow_right3").toggleClass("arow_up3");							  
})