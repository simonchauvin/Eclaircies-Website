
function resizeTitle()
{
    var docHeight = $(window).height();
    var imgHeight = $("#title-img").height();
    var padding = (docHeight * 0.5) - (imgHeight * 0.5);
    $("#title-img-container").css({"padding-top":padding, "padding-bottom":padding});  
}
$(window).ready(function(){
    resizeTitle();
    $("#container").css({"visibility":"visible"});   
});
$( window ).resize(resizeTitle);

