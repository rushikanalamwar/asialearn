var $ = jQuery.noConflict();
$(document).ready(function (){
$('.testimonials-slider').slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 1000,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
             
              slidesToShow: 1
            }
          },
        ]
    })
});


    