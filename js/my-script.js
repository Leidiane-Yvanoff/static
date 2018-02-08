$(document).ready(function () {
    $('.slider').slick({
        autoplay: false,

        prevArrow: '<a href"#" alt"#" class="slick-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>',

        nextArrow: '<a href"#" alt"#" class="slick-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>',
        dots: false,
    });

    $('.caroussel').slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: true,
        dots: false,

        prevArrow: '<a href"#" alt"#" class="slick-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>',

        nextArrow: '<a href"#" alt"#" class="slick-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>',

    });
});
