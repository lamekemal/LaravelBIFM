//MARIOXN
/* Counter - CountTo */
"use strict";

var a = 0;
$('*').on('appear', function () {
    var anim = $(this).attr("data-panim");
    $(this).removeClass(anim);
    $(this).addClass(anim);

    $(this).one(
        "webkitAnimationEnd oanimationend MSAnimationEnd animationend",
        function (e) {
            // code to execute after transition ends
            $(this).removeClass(anim);
        }
    );
});

$(window).on('scroll', function () {
    var anim = $(this).attr("data-xanim");
    $(this).removeClass(anim);
    $(this).addClass(anim);

    $(this).one(
        "webkitAnimationEnd oanimationend MSAnimationEnd animationend",
        function (e) {
            // code to execute after transition ends
            $(this).removeClass(anim);
        }
    );

    /*$('.counter-value').each(function () {
        var $this = $(this),countTo = $this.attr('data-count');
        $(this).prop('Counter',0).animate({
                Counter: $(this).text()
        }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                        $(this).text(Math.ceil(now));
                },
                complete: function() {
                    $(this).text($(this).attr('data-count'));
                    //alert('finished');
                }
        });
    });*/

    if ($('.counter').length) { // checking if CountTo section exists in the page, if not it will not run the script and avoid errors
        var oTop = $('.counter').offset().top - window.innerHeight;
        if ($(window).scrollTop() > oTop) {
            $('.counter-value').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                },
                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                            //alert('finished');
                        }
                    });
            });
        }
    }
});

$("*").on("mouseover", function () {
    var anim = $(this).attr("data-anim");
    $(this).removeClass(anim);
    $(this).addClass(anim);

    $(this).one(
        "webkitAnimationEnd oanimationend MSAnimationEnd animationend",
        function (e) {
            // code to execute after transition ends
            $(this).removeClass(anim);
        }
    );
});

function doAnimations(elems) {
    //Cache the animationend event in a variable
    var animEndEv = "webkitAnimationEnd animationend";

    elems.each(function () {
        var $this = $(this),
            $animationType = $this.data("animation");
        $this.addClass($animationType).one(animEndEv, function () {
            $this.removeClass($animationType);
        });
    });
}

//Variables on page load
var $myCarousel = $("#myCarousel"),
    $firstAnimatingElems = $myCarousel
        .find(".carousel-item:first")
        .find("[data-animation ^= 'animated']");

//Initialize carousel
$myCarousel.carousel();

//Animate captions in first slide on page load
doAnimations($firstAnimatingElems);

//Other slides to be animated on carousel slide event
$myCarousel.on("slide.bs.carousel", function (e) {
    var $animatingElems = $(e.relatedTarget).find(
        "[data-animation ^= 'animated']"
    );
    doAnimations($animatingElems);
});


$(window).on('scroll', function (event) {
    var scroll = $(window).scrollTop();
    if (scroll < 20) {
        $(".navbar-area").removeClass("sticky");
        $(".navbar-area img").attr("src", "../images/logo.png");
    } else {
        $(".navbar-area").addClass("sticky");
        $(".navbar-area img").attr("src", "../images/logo.png");
    }
});


//===== Section Menu Active

// var scrollLink = $('.page-scroll');
// Active link switching
/* $(window).scroll(function () {
     var scrollbarLocation = $(this).scrollTop();

     scrollLink.each(function () {

         var sectionOffset = $(this.hash).offset.top - 73;

         if (sectionOffset <= scrollbarLocation) {
             $(this).parent().addClass('active');
             $(this).parent().siblings().removeClass('active');
         }
     });
 });*/


//===== close navbar-collapse when a  clicked

$(".navbar-nav a").on('click', function () {
    $(".navbar-collapse").removeClass("show");
});

$(".navbar-toggler").on('click', function () {
    $(this).toggleClass("active");
});

$(".navbar-nav a").on('click', function () {
    $(".navbar-toggler").removeClass('active');
});


//===== Sidebar

$('[href="#side-menu-left"], .overlay-left').on('click', function (event) {
    $('.sidebar-left, .overlay-left').addClass('open');
});

$('[href="#close"], .overlay-left').on('click', function (event) {
    $('.sidebar-left, .overlay-left').removeClass('open');
});


//===== Slick

$('.slider-items-active').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 800,
    arrows: true,
    prevArrow: '<span class="prev"><i class="lni lni-arrow-left"></i></span>',
    nextArrow: '<span class="next"><i class="lni lni-arrow-right"></i></span>',
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                arrows: false,
            }
        }
    ]
});


//===== Isotope Project 4

$('.container').imagesLoaded(function () {
    var $grid = $('.grid').isotope({
        // options
        transitionDuration: '1s'
    });

    // filter items on button click
    $('.portfolio-menu ul').on('click', 'li', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });

    //for menu active class
    $('.portfolio-menu ul li').on('click', function (event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
    });
});


//===== slick Testimonial Four

$('.testimonial-active').slick({
    dots: false,
    arrows: true,
    prevArrow: '<span class="prev"><i class="lni lni-arrow-left"></i></span>',
    nextArrow: '<span class="next"><i class="lni lni-arrow-right"></i></span>',
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 800,
    slidesToShow: 1,
});


//====== Magnific Popup

$('.video-popup').magnificPopup({
    type: 'iframe'
    // other options
});


//===== Magnific Popup

$('.image-popup').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});


//===== Back to top

// Show or hide the sticky footer button
$(window).on('scroll', function (event) {
    if ($(this).scrollTop() > 600) {
        $('.back-to-top').fadeIn(200)
    } else {
        $('.back-to-top').fadeOut(200)
    }
});


//Animate the scroll to yop
$('.back-to-top').on('click', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: 0,
    }, 1500);
});

$('#myUrl').keyup(function(e) {
    if (this.value.length < 4) {
      this.value = 'TEL: ';
    } else if (this.value.indexOf('TEL:') !== 0) {
      this.value = 'TEL: ' + String.fromCharCode(e.which);
    }
  });
