<!-- Bootstrap CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-stepper@1.3.0/dist/js/bs-stepper.min.js"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- Bootstrap CDN -->

<!-- Main Js -->
<script src="js/main.js"></script>
<!-- Main Js -->

<!-- Main Js -->
<script src="js/scripts.js"></script>
<!-- Main Js -->

<!-- Slick Slider CDN -->
<script src="slick/slick.min.js"></script>
<!-- Slick Slider CDN -->

<!-- Wow Js CDN -->
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<!-- Wow Js CDN -->

<script>
// As a jQuery Plugin
// Vanilla JavaScript
// ------------step-wizard-------------
$(document).ready(function() {
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

        var target = $(e.target);

        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function(e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function(e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}

function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});
// testimonial Slider About Page
$('.testimonail_slider').slick({
    dots: true,
    arrows: true,
    infinite: false,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
// Brands Slider About Page

// Add active class to the current button (highlight it)
// var header = document.getElementById("current_nav");
// var btns = header.getElementsByClassName("menu-items");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//   var current = document.getElementsByClassName("active");
//   current[0].className = current[0].className.replace(" active", "");
//   this.className += " active";
//   });
// }
// Menu Active Js
const CurrentLocation = location.href;
const menuItem = document.querySelectorAll(".menus li a");
const menuLength = menuItem.length;
for (let i = 0; i < menuLength; i++) {
  if (menuItem[i].href === CurrentLocation) {
    menuItem[i].className = "active_tab";
  }
}
</script>