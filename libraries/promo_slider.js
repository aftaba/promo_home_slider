(function($) {

    $('.promo-slideshow-slides')
      .addClass('owl-carousel')
      .owlCarousel({
        navigation : true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        // animateOut: 'fadeOut',
        rewind: true,
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet: false,
        itemsMobile : false,

    });

})(jQuery);
