// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// nice select
$(document).ready(function () {
    $('select').niceSelect();
});


//css riki


$(document).ready(function() {
    var $navbar = $('.navbar');
    var $navbarToggler = $('.navbar-toggler');

    $navbarToggler.on('click', function() {
      $navbar.toggleClass('navbar-mobile-scroll');
    });

    $(window).scroll(function() {
      var scrollPosition = $(this).scrollTop();
      var isMobile = $navbarToggler.is(':visible'); // Memeriksa apakah tombol toggler terlihat (mode mobile)
      var isNavbarMobileScroll = $navbar.hasClass('navbar-mobile-scroll');

      if (isMobile && isNavbarMobileScroll) {
        if (scrollPosition > 80) {
          $navbar.addClass('navbar-scroll');
        } else {
          $navbar.removeClass('navbar-scroll');
        }
      } else {
        if (scrollPosition > 80) {
          $navbar.addClass('navbar-scroll');
        } else {
          $navbar.removeClass('navbar-scroll');
        }
      }
    });
  });





  $(document).ready(function(){
    var owl = $("#owl-clients").owlCarousel({
      items: 4,
      margin: 10,
      loop: true,
      nav: true,
      navText: ['<span class="custom-owl-prev">Previous</span>', '<span class="custom-owl-next">Next</span>'],
      dots: true,
      dotsClass: 'custom-owl-dots',
      responsiveClass: true,
      rewind: true,
      responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
      }
    });

    owl.on('changed.owl.carousel', function(event) {
      if (!owl.find(".owl-item.active").last().next().length) {
        owl.trigger('to.owl.carousel', [0, 300]); // Kembali ke item pertama
      }
    });
  });


