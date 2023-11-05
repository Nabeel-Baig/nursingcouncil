$(window).on('load', function () {
    $('#status').fadeOut(3000);
    $('#preloader').delay(3000).fadeOut('slow');
});

const cursor = document.createElement('div')
const child = document.createElement('div')

const cursorDefaultStyle = `
    width: 28px;
    height: 28px;
    border-radius: 9999px;
    border: 2px solid #FF0080;
    position: fixed;
    transform: translate(-50%, -50%);
    top: 0; left: '0';
    transition: 300ms ease-out;
    pointer-events: none;
`

const childDefaultStyle = `
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #FF0080;
    position: fixed;
    top: 0; left: '0';
    transform: translate(-50%, -50%);
    pointer-events: none;
`

cursor.style.cssText = cursorDefaultStyle
child.style.cssText = childDefaultStyle

document.body.appendChild(cursor)
document.body.appendChild(child)

let isActived = false

window.addEventListener('mousemove', (event) => {
    if (isActived) return

    cursor.style.top = child.style.top = `${event.clientY}px`
    cursor.style.left = child.style.left = `${event.clientX}px`
});

$(window).on('load', function () {
    var mainBannerVideo = document.getElementById("mainBannerVideo");
    var change = document.getElementById("loader");
    localStorage.setItem('setMainBannerVideo', mainBannerVideo.currentSrc);
    localStorage.setItem('setLoader', change.currentSrc);
    localStorage.getItem('setMainBannerVideo');
    localStorage.getItem('setLoader');
})


$('.testimonial').slick({
    dots: false,
    infinite: true,
    speed: 1500,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 3,
    arrows: false,
    draggable: true,
    responsive: [
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
            }
        }
    ]
});