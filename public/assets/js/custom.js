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

