const slider = $(".myslider");
var width = $(document).width();
slider
    .slick({
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        vertical: true,
        verticalSwiping: true,
        draggable: false,
        infinite: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }

        }, {
            breakpoint: 800,
            settings: {
                dots: false,
                vertical: true,
                verticalSwiping: false,
            }
        }, {
            breakpoint: 480,
            settings: {
                dots: false,
                vertical: true,
                verticalSwiping: false,
            }
        }]
    });

slider.on('wheel', (function (e) {
    e.preventDefault();

    if (e.originalEvent.deltaY > 0) {
        $('body').delay(4000).css({ 'overflow': 'hidden' });
        $(this).slick('slickNext');
    } else {
        $(this).slick('slickPrev');
    }
}));

if (width < 992) {
    $('.myslider').slick('unslick');
}

$(".hambergur").on("click", () => {
    $(".fullscreen").toggleClass("active").removeClass("reverse_anim");
});

$(".hambergurBlurImg").on("click", () => {
    $(".fullscreen").toggleClass("reverse_anim");
});
$(".close").on("click", () => {
    $(".fullscreen").toggleClass("reverse_anim");
});

$(document.body).on('click', '#goDown' ,function(){
    $(".myslider").slick('slickNext');
});

