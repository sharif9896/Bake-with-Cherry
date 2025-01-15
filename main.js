


let currentslide = 0;

function showSlide(index){
    const slider = document.getElementById("slider");
    const slides =document.getElementsByClassName("slide");
    const indicators =document.getElementById("indicators").children;
    if(index >= slides.length){
        currentslide = 0;
    }else if(index < 0){
        currentslide =slides.length-1;
    }else{
        currentslide = index;
    }
    slider.style.transform = `translateX(${-currentslide * 100}%)`;
    for(i = 0;i < indicators.length;i++){
        indicators[i].classList.remove('active');
    }
    indicators[currentslide].classList.add('active');
}
function currentSlide(event) {
    const dots = document.getElementsByClassName("dot");
    for (let i = 0; i < dots.length-1; i++) {
        if (event.target === dots[i]) {
            showSlide(slideIndex = i + 1);
            break;
        }
    }
}
function nextslide(){
    showSlide(currentslide + 1);
}
function prevslide(){
    showSlide(currentslide - 1);
}

function autoslide(){
    nextslide();
}

setInterval(autoslide, 5000);



// JavaScript for Back to Top Button
const backToTopButton = document.getElementById("back-to-top");

// Show or hide the button based on scroll position
window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
};

// Smooth scroll to top when button is clicked
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

let crrt=document.querySelector(".home120")
let cross=document.querySelector(".cros")
let pre=document.querySelector(".prev")
let nxt=document.querySelector(".next")
let baaar=document.querySelector(".baaar")
let baa=document.querySelector(".baar-overlay")
let dds=document.querySelector(".baar")
let cos=document.querySelector(".cross")



dds.addEventListener('click',showbar)
cos.addEventListener('click',hidecart2)

function showbar(){
    baa.classList.add('show')
    baaar.classList.add('show')
    pre.style.display="none";
    nxt.style.display="none";
}

function hidecart2(){
    baa.classList.remove('show')
    baaar.classList.remove('show')
    pre.style.display="block";
    nxt.style.display="block";
}

let lood=document.querySelector(".loader")

window.addEventListener('load',function(){
    lood.classList.add("loader-hidden")
    lood.document.body.addEventListener('transitionend',function(){
        document.removeChild("loader");
    })
})

$(document).ready(function(){

    $(window).scroll(function(){
        if($(this).scrollTop() > 40){
            $('#topbutton').fadeIn();
        }else{
            $('#topbutton').fadeOut();
        }
    });

    $("#topbutton").click(function(){
        $('html ,body').animate({scrollTop : 0},800);
    });
});





var button = document.getElementById('rightside');

    function Togglebar(){
        button.style.top ="80px";
    }
    function Hidemenu(){
        button.style.top = "-500px";

    }
// Animation on scroll
AOS.init({
  duration: 800,
  easing: "slide",
});

(function ($) {
  "use strict";
  $(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: "scroll",
  });

  //   full height
  var fullHeight = function () {
    $(".js-fullheight").css("height", $(window).height());
    $(window).resize(function () {
      $(".js-fullheight").css("height", $(window).height());
    });
  };
  fullHeight(); //call that function

  // navbar scroll
  var scrollWindow = function () {
    $(window).scroll(function () {
      var $w = $(this),
        st = $w.scrollTop(),
        navbar = $(".ftco_navbar"),
        sd = $(".js-scroll-wrap");
      if (st > 150) {
        if (!navbar.hasClass("scrolled")) {
          navbar.addClass("scrolled");
        }
      }
      if (st < 150) {
        if (navbar.hasClass("scrolled")) {
          navbar.removeClass("scrolled sleep");
        }
      }

      if (st > 350) {
        if (!navbar.hasClass("awake")) {
          navbar.addClass("awake");
        }
        if (sd.length > 0) {
          sd.addClass("sleep");
        }
      }

      if (st < 350) {
        if (navbar.hasClass("awake")) {
          navbar.removeClass("awake");
          navbar.addClass("sleep");
        }
        if (sd.length > 0) {
          sd.removeClass("sleep");
        }
      }
    });
  };
  scrollWindow();

  $.Scrollax();

  //   carousel
  var carousel = function () {
    $(".home-slider").owlCarousel({
      loop: true,
      autoplay: true,
      margin: 0,
      animateOut: "fadeOut",
      animateIn: "fadeIn",
      nav: true,
      dots: false,
      autoplayHoverPause: false,
      items: 1,
      navText: [
        "<span class = 'ion-ios-arrow-back'></span>",
        "<span class = 'ion-ios-arrow-forward'></span>",
      ],
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
        1000: {
          items: 1,
        },
      },
    });
    $(".carousel-testimony").owlCarousel({
      loop: true,
      autoplay: true,
      center: true,
      margin: 30,
      nav: false,
      stagePadding: 0,
      items: 1,
      navText: [
        "<span class = 'ion-ios-arrow-back'></span>",
        "<span class = 'ion-ios-arrow-forward'></span>",
      ],
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
        1000: {
          items: 3,
        },
      },
    });
  };
  carousel();

  var counter = function () {
    $("#section-counter").waypoint(
      function (direction) {
        if (
          direction === "down" &&
          !$(this.element).hasClass("ftco-animated")
        ) {
          var comma_seperator_number_step = $.animateNumber.numberStepFactories.separator(
            ","
          );
          $(".number").each(function () {
            var $this = $(this),
              num = $this.data("number");
            console.log(num);
            $this.animateNumber(
              {
                number: num,
                numberStep: comma_seperator_number_step,
              },
              7000
            );
          });
        }
      },
      { offset: "95%" }
    );
  };
  counter();

  var contentWayPoint = function () {
    var i = 0;
    $(".ftco-animate").waypoint(
      function (direction) {
        if (
          direction === "down" &&
          !$(this.element).hasClass("ftco-animated")
        ) {
          i++;
          $(this.element).addClass("item-animate");
          setTimeout(function () {
            $("body .ftco-animate.item-animate").each(function (k) {
              var el = $(this);
              setTimeout(
                function () {
                  var effect = el.data("animate-effect");
                  if (effect === "fadeIn") {
                    el.addClass("fadeIn ftco-animated");
                  } else if (effect === "fadeInLeft") {
                    el.addClass("fadeInLeft ftco-animated");
                  } else if (effect === "fadeInRight") {
                    el.addClass("fadeInRight ftco-animated");
                  } else {
                    el.addClass("fadeInUp ftco-animated");
                  }
                  el.removeClass("item-animate");
                },
                k * 50,
                "easeInOutExpo"
              );
            });
          }, 100);
        }
      },
      { offset: "95%" }
    );
  };
  contentWayPoint();

  $("#book_date").datepicker({
    format: "m/d/yyyy",
    autoclose: true,
  });
  $("#book_time").timepicker();
})(jQuery);
