jQuery(
  (function () {
    "use strict";

    new Glider(document.querySelector(".glider"), {
      // Mobile-first defaults
      slidesToShow: 1,
      slidesToScroll: 1,
      scrollLock: true,
      rewind: true,
      draggable: true,
      dots: "#resp-dots",
      arrows: {
        prev: ".glider-prev",
        next: ".glider-next"
      },
      responsive: [
        {
          // screens greater than >= 775px
          breakpoint: 775,
          settings: {
            // Set to `auto` and provide item width to adjust to viewport
            slidesToShow: "auto",
            slidesToScroll: "auto",
            rewind: true,
            draggable: true,
            itemWidth: 150,
            duration: 0.25
          }
        },
        {
          // screens greater than >= 1024px
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            rewind: true,
            draggable: true,
            itemWidth: 150,
            duration: 0.25
          }
        }
      ]
    });

    $(".popup-gallery").magnificPopup({
      delegate: "a",
      type: "image",
      mainClass: "mfp-img-mobile",
      gallery: {
        enabled: true,
        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
      }
    });
  })()
);
