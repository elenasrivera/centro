window.addEventListener("load", carousel, false);

var slideIndex = 0;

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {
        slideIndex = 1
    }
    x[slideIndex - 1].style.display = "block";
    setTimeout(carousel, 2000);
}

$(function () {
    var otrosvideos = $(".videos-aside");
    for (var i = 0; i < otrosvideos.length; i++) {
        otrosvideos[i].addEventListener("click", cambiar, false);
    }


    function cambiar() {
        var nsrc = $(this).attr("src");
        var videoprincipal = $("#videoprincipal");
        $(this).attr("src", videoprincipal.attr("src"));
        videoprincipal.attr("src", nsrc);
        videoprincipal.attr("autoplay");
        var ntitle = $(this).attr("title");
        var videoprincipal = $("#videoprincipal");
        $(this).attr("title", videoprincipal.attr("title"));
        videoprincipal.attr("title", ntitle);

    }

});
