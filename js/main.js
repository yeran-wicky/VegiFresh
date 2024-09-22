(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);


    // Fixed Navbar
    $(window).scroll(function () {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 55) {
                $('.fixed-top').addClass('shadow');
            } else {
                $('.fixed-top').removeClass('shadow');
            }
        } else {
            if ($(this).scrollTop() > 55) {
                $('.fixed-top').addClass('shadow').css('top', -55);
            } else {
                $('.fixed-top').removeClass('shadow').css('top', 0);
            }
        } 
    });
    
    
   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 2000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:1
            },
            992:{
                items:2
            },
            1200:{
                items:2
            }
        }
    });


    // vegetable carousel
    $(".vegetable-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 2000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:4
            }
        }
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });



    // Product Quantity
    $('.quantity button').on('click', function () {
        var button = $(this);
        var oldValue = button.parent().parent().find('input').val();
        if (button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        button.parent().parent().find('input').val(newVal);
    });

})(jQuery);


////////// My own made part //////////

function goback(){
    window.history.back();
}

function gotologin(){
    window.location.href = "http://localhost/VegiFresh/login.php";
}

function gotologinpop(){
    $(document).click(function(){
        $('#exampleModal').modal('show');
    
        setTimeout(function(){
            window.location.href = 'http://localhost/VegiFresh/login.php';
        }, 2000);
    });
}

function login(){
    window.location.href = "http://localhost/VegiFresh/adminhome.php";
}

function gotoindex(){
    window.location.href = "http://localhost/VegiFresh/index.php";
}

$(document).ready(function(){
    $('#confirmAction').click(function(){
        window.location.href = "http://localhost/VegiFresh/index.php";
        console.log('Action confirmed!');
        $('#confirmationModal').modal('hide');
    });
});

function gotoshop(){
    window.location.href = "http://localhost/VegiFresh/shop.php";
}

function gotoshopdetail(){
    window.location.href = "http://localhost/VegiFresh/shop-detail.html";
}

function gotocontact(){
    window.location.href = "http://localhost/VegiFresh/contact.php";
}

function gotoadminhome(){
    window.location.href = "http://localhost/VegiFresh/adminhome.php";
}

function gotoitem(){
    window.location.href = "http://localhost/VegiFresh/item.php";
}

function gotocustomer(){
    window.location.href = "http://localhost/VegiFresh/customer.php";
}

function gotoweighting(){
    window.location.href = "http://localhost/VegiFresh/weighting.php";
}

function gotoreport(){
    window.location.href = "http://localhost/VegiFresh/report.php";
}

function gotoprivacypolicy(){
    window.location.href = "http://localhost/VegiFresh/privacypolicy.php";
}

function gototermsofuse(){
    window.location.href = "http://localhost/VegiFresh/termsofuse.php";
}

function gotoaboutus(){
    window.location.href = "http://localhost/VegiFresh/aboutus.php";
}

function gotoshoppingcart(){
    window.location.href = "http://localhost/VegiFresh/cart.html";
}

function gotoprofile(){
    window.location.href = "http://localhost/VegiFresh/profile.php";
}

function gotocart(){
    $(document).ready(function() {
        $('#nocartModal').modal('show');
      
        setTimeout(function() {
          $('#nocartModal').modal('hide');
        }, 2000);
    });
}

function addtocart(){
    $(document).ready(function() {
        $('#notsupportModal').modal('show');
      
        setTimeout(function() {
          $('#notsupportModal').modal('hide');
        }, 2000);
    });
}