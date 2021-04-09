$(document).ready(function(){

    //banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1,
        loop: true,
        auto: true,
        autoplay:true,
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

    //isotope filter
    var $grid= $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    //filter items on button click
    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({filter: filterValue});
    })

    //testimonial area 
    $("#testimonials .owl-carousel").owlCarousel({
        dots: false,
        items: 1,
        loop: true,
        auto: true,
        autoplay:true,
        autoplayTimeout:7000,
        autoplayHoverPause:false
    });

    //product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $input = $(".qty .qty_input");

    //click event on qty up button
    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() >= 1 && $input.val() <= 4){
            $input.val(function(i, oldval){
                return ++oldval;
            });
        }
    });

    //click event on qty down button
    $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() > 1 && $input.val() <= 5){
            $input.val(function(i, oldval){
                return --oldval;
            });
        }
    });

});
