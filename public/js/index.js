//トップスライド用
var nPhotos = 0;
var nNow = 1;

$(function () {
    //nPhotosの数を代入
    nPhotos = $("#content div.indexVisualWrap div.left ul li").length;
    $(".sld1").fadeIn(500);
    setInterval("changeImg()", 7000);
});

function changeImg() {
    var nPrev
    if (nNow != nPhotos) {
        nNow++;
        nPrev = ".sld" + (nNow - 1);
    } else {
        nNow = 1;
        nPrev = ".sld" + nPhotos;
    }
    var nNext = ".sld" + nNow;
    $(nNext).fadeIn(1500);
    $(nPrev).fadeOut(1500);
}