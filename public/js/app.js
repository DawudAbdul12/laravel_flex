$(document).ready(function () {
  $(".owl-gallery").owlCarousel({
    center: true,
    loop: true,
    autoplay: false,
    items: 1,
    lazyLoad: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    nav: true,
    navText: [
      "<i class='fa fa-angle-left fa-2x'></i>",
      "<i class='fa fa-angle-right fa-2x'></i>",
    ],
    dots: false,
    pagination: false,
    animateOut: "fadeOut",
    animateIn: "fadeIn",

    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 1,
      },
      992: {
        items: 1,
      },

      1200: {
        items: 1,
      },
    },
  });

  /*how it works*/
  $(".owl-hit").owlCarousel({
    center: true,
    loop: true,
    autoplay: true,
    items: 1,
    lazyLoad: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    nav: false,
    navText: [
      "<i class='fa fa-angle-left fa-2x'></i>",
      "<i class='fa fa-angle-right fa-2x'></i>",
    ],
    dots: false,
    pagination: false,
    animateOut: "fadeOut",
    animateIn: "fadeInRight",

    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 1,
      },
      992: {
        items: 1,
      },

      1200: {
        items: 1,
      },
    },
  });

  $(".owl-testimo").owlCarousel({
    center: true,
    margin: 20,
    loop: true,
    autoplay: true,
    items: 1,
    lazyLoad: true,
    autoplayTimeout: 7000,
    autoplayHoverPause: false,
    nav: true,
    navText: [
      "<i class='fa fa-angle-left fa-2x'></i>",
      "<i class='fa fa-angle-right fa-2x'></i>",
    ],
    dots: false,
    pagination: false,
    // animateOut: "fadeOutRight",
    // animateIn: "fadeInUpLeft",

    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 1,
      },
      992: {
        items: 1,
      },

      1200: {
        items: 1,
      },
    },
  });
});
