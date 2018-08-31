$(document).ready(function(){
    $('.sidenav').sidenav(); 
    $('.modal').modal();

    // Initialize WOW.js Scrolling Animations
    new WOW().init();

    // NAVBAR
    var nav = $('.nav');
    var hamburger = $('.hamburger .icon-bar');
    var brand = $('.brand');
    var plan = $('#plan');

    nav.css({'background-color':'transparent', 'box-shadow': '0 1px 5px rgba(0, 0, 0, 0.0)'});
    hamburger.css('background-color','rgba(255,255,255,1.00)');
    brand.css('color','rgba(255,255,255,1.00)');

    $(window).scroll(function() {
        var currentPos = $(this).scrollTop();
        if(currentPos >= plan.offset().top){
            nav.css({'background-color':'rgba(255,255,255,1.00)', 'box-shadow': '0 1px 5px rgba(0, 0, 0, 0.1)'});
            hamburger.css('background-color','rgba(0, 77, 64, 1.00)');
            brand.css('color','rgba(0, 77, 64, 1.00)');
        }else{
            nav.css({'background-color':'transparent', 'box-shadow': '0 1px 5px rgba(0, 0, 0, 0.0)'});
            hamburger.css('background-color','rgba(255,255,255,1.00)');
            brand.css('color','rgba(255,255,255,1.00)');
        }
    });
    

    // Owl Carousel
    var owl = $('.owl-carousel');
        owl.owlCarousel({
            stagePadding: 40,
            loop:false,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        });
});