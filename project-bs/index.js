$(document).ready(function(){

    //banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1,
        loop: true,
        auto: true,
        autoplay:false,
        autoplayTimeout:5000,
        autoplayHoverPause:false
    });

    //Category Owl Carousel
    $("#category .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

});
