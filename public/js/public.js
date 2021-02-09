$(function () {
    //ロールオーバーalpha
    $(".btn").hover(function () {
        $(this).fadeTo(100, 0.6);
    }, function () {
        $(this).fadeTo(100, 1);
    });
    //トップへ戻る
    $("a[href^=#]").click(function () {
        var Hash = $(this.hash);
        var HashOffset = $(Hash).offset().top;
        var nAdjuster = $(".menuWrap").height();
        if (HashOffset == 0) {
            nAdjuster = 0;
        }
        $("html,body").animate({
            scrollTop: HashOffset - nAdjuster
        }, 800, "easeInOutQuart");
        return false;
    });
    //FONT SIZE
	if($.cookie("wiseCityFontSize") == "large"){
		changeSize("large");
	}
	$("ul.sizeList li.btn").click(function(){
		if($(this).hasClass("small")){
			changeSize("small");
		}else{
			changeSize("large");
		}
	});
});

//FONT SIZE
function changeSize(nN){
	$("ul.sizeList li.btn").removeClass("active");
	if(nN == "small"){
		$("ul.sizeList li.small").addClass("active");
		$("html").removeClass("active");
		$.cookie( "wiseCityFontSize" , "small" , { expires : 1, path : "/"});
	}else{
		$("ul.sizeList li.large").addClass("active");
		$("html").addClass("active");
		$.cookie( "wiseCityFontSize" , "large" , { expires : 1, path : "/"});
	}
}