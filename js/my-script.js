$(document).ready(function () {
    $('.slider').slick({
        autoplay: true,

        prevArrow: '<a href"#" alt"#" class="slick-prev"><img src="https://png.icons8.com/ios/50/ffffff/circled-chevron-left.png"aria-hidden="true"></i></a>',

        nextArrow: '<a href"#" alt"#" class="slick-next"><img src="https://png.icons8.com/ios/50/ffffff/circled-chevron-right.png" aria-hidden="true"></i></a>',
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

var $slider = $('#home-slider');
$(document).ready(function(){
    $slider.slick({
        autoplay: true,
        autoplaySpeed: 30000,
        dots: false,
        infinite: true,
        fade: true,
        arrows: true,
             prevArrow: '<a href"#" alt"#" class="slick-prev"><img src="https://png.icons8.com/ios/50/ffffff/circled-chevron-left.png"aria-hidden="true"></i></a>',

        nextArrow: '<a href"#" alt"#" class="slick-next"><img src="https://png.icons8.com/ios/50/ffffff/circled-chevron-right.png" aria-hidden="true"></i></a>',
    });
    $("#home-slider-container .slider-controls .slider-prev").on("click",function(){
      $slider.slick('slickPrev');
    });
    $("#home-slider-container .slider-controls .slider-next").on("click",function(){
      $slider.slick('slickNext');
    });

    $slider.find(".slider-content").css({"height":$(window).height(),"eidth":$(window).width()});

});

$(window).resize(function(){
	    $slider.find(".slider-content").css({"height":$(window).height(),"eidth":$(window).width()});
})