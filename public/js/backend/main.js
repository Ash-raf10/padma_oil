$(window).on('load', function() {
    $(".preloader").fadeOut("slow");
});

// $(window).scroll(function(){
//     var sticky = $('header'),
//         scroll = $(window).scrollTop();

//     if (scroll >= 0) sticky.css('position', 'fixed');
//     else sticky.css('position', 'relative');
// });

$(document).ready(function() { 

    $('.multiple-select').select2();

    $('.selectpicker').selectpicker();

    $('.datepicker').datepicker({ format: 'dd-mm-yyyy', autoclose: true });

    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();

    //home slider
    $('.home-slider').owlCarousel({
        autoplay:true,
        autoplayTimeout:5000,
        nav:true,
        dots: false,
        center:true,
        margin: 0,
        navText: ["<i class='dripicons-chevron-left'></i>", "<i class='dripicons-chevron-right'></i>"],
        responsive:{
            300:{
                items:1
            }
        }
    })

    //home slider
    $('.blog-slider').owlCarousel({
        autoplay:true,
        autoplayTimeout:5000,
        nav:true,
        dots: false,
        center:true,
        margin: 0,
        navText: ["<i class='dripicons-chevron-left'></i>", "<i class='dripicons-chevron-right'></i>"],
        responsive:{
            300:{
                items:1
            }
        }
    })

    //doctor profile - schedule slider
    $('.doctor-profile').owlCarousel({
        nav:true,
        dots: false,
        margin: 0,
        center: false,
        navText: ["<i class='dripicons-chevron-left'></i>", "<i class='dripicons-chevron-right'></i>"],
        responsive:{
            1000:{
                items:7
            }
        }
    })
    
    $('.vaccination-carousel').owlCarousel({
        nav:true,
        dots: false,
        margin: 0,
        center: false,
        navText: ["<i class='dripicons-chevron-left'></i>", "<i class='dripicons-chevron-right'></i>"],
        responsive:{
            300:{
                items:4
            }
        }
    })

    var li =  $(".owl-item li a");
    $(".owl-item").on('click', function(){
        $(this).siblings('.owl-item').children().children().children().removeClass('active');
    });

    $('.growth-slider').owlCarousel({
        nav: true,
        dots: false,
        margin: 0,
        autoHeight:true,
        navText: ["<i class='dripicons-chevron-left'></i> Back", "Next <i class='dripicons-chevron-right'></i>"],
        responsive:{
            300:{
                items:1
            }
        }
    })

    $('.go_back').on('click', function(e){
        e.preventDefault();
        window.history.back();
    });
    
    $("input[type=submit], a[href*='https://']").on('click', function(){
        $('.preloader').css('display', 'block');
    })

    $("button.btn[type=submit]").on('click', function(){
        $(this).html('...submitting');
    })
});