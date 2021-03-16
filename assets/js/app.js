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
    $('.home-slider').slick({
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
const elementDrop = document.querySelector(".dropdown-trigger");
const instancesDropdown = M.Dropdown.init(elementDrop)
const elementDrop2 = document.querySelector(".dropdown-trigger2");
const instancesDropdown2 = M.Dropdown.init(elementDrop2)


    