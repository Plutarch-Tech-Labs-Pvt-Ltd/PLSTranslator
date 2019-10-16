$(document).ready(function () {
    $("#technologies").owlCarousel({
        nav: true, // Show next and prev buttons
        slideSpeed: 300,
        margin: 18,
        loop: true,
        autoplay: true,
        autoplaySpeed:1200,
        paginationSpeed: 10,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
            0: {
                items: 2,
                dots:false,
            },
            600: {
                items: 4,
                dots:false,
            },
            1000: {
                items: 6,
                nav: false,
                dots: false,
            }
        }
    });
});
$(document).ready(function () {
    $("#portfolio_item").owlCarousel({
        nav: true, // Show next and prev buttons
        slideSpeed: 200,
        margin: 0,
        loop: true,
        autoplay: true,
        autoplaySpeed:1000,
        paginationSpeed: 10,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
            0: {
                items: 2,
                dots:false,
            },
            600: {
                items: 4
            },
            1000: {
                items: 5,
                nav: false,
                dots: true,

            }
        }
    });
});
$(document).ready(function () {
    $("#testimonials").owlCarousel({
        nav: true, // Show next and prev buttons
         dots: true,
        slideSpeed: 200,
        margin: 18,
        loop: true,
        autoplay: true,
        autoplaySpeed:1000,
        paginationSpeed: 10,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
            0: {
                items: 1,
                nav:false,
            },
            600: {
                items: 2,
                nav:false,
            },
            1000: {
                items: 3,
                nav: true,
                dots: true,

            }
        }
    });
});
$(document).ready(function () {
    $("#clients").owlCarousel({
        nav: true, // Show next and prev buttons
        slideSpeed: 300,
        margin: 18,
        loop: true,
        autoplay: true,
        autoplaySpeed:1200,
        paginationSpeed: 10,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
             0: {
                items: 2,
                dots:false,
            },
            600: {
                items: 4,
                dots:false,
            },
            1000: {
                items: 6,
                nav: false,
                dots: false,

            }
        }
    });
});
// contact form
/* easing functions from: https://github.com/gdsmith/jquery.easing/blob/master/jquery.easing.js
*/

var easeOutBounce = function (x, t, b, c, d) {
        if ((t/=d) < (1/2.75)) {
            return c*(7.5625*t*t) + b;
        } else if (t < (2/2.75)) {
            return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
        } else if (t < (2.5/2.75)) {
            return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
        } else {
            return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
        }
}

function Animate(elem, propName, duration, start, end)  {
    var start_time = new Date().getTime();
    var interval = setInterval(function() {
      var current_time = new Date().getTime(),
        remaining = Math.max(0, start_time + duration - current_time),
        temp = remaining / duration || 0,
        percent = 1 - temp;

      if (start_time + duration < current_time) clearInterval(interval);

      var pos = easeOutBounce(null, duration * percent, 0, 1, duration),
        current = (end - start) * pos + start;

      elem.style[propName] = current + 'px';
    }, 1);
  }

var elem = document.getElementById('contactform');
var opened = false; 

document.getElementById('contact-button').onclick = function() {
  if (opened) {
    Animate(elem, 'right', 800, 0, -405);    
    opened = false;
  } else {
    Animate(elem, 'right', 800, -405, 0);
    opened = true;  
  }  
}