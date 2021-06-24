jQuery(document).ready(function() {


 
    
 



    // This is the code to change the header menu color
    jQuery(window).scroll(function () {
        var aTop = jQuery(".top-header").height();

        if (jQuery(this).scrollTop() >= aTop) {
            jQuery(".top-header").addClass("top-header-solid");
        } else {
            jQuery(".top-header").removeClass("top-header-solid");
        }
    });

    // Owl Carousel for testimonials
    jQuery(".owl-testimonials-1").owlCarousel({
        items: 3,
        dotsEach: true,
        margin: 15,
        mouseDrag: false,
        responsiveClass: true,
        //autoplayTimeout: 3000,
        //autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            992: {
                items: 3,
                nav: false
            }
        }
    });

    // Owl Carousel for testimonials mobile
    jQuery(".owl-testimonials-2").owlCarousel({
        items: 1,
        dotsEach: true,
        margin: 15,
        mouseDrag: false,
        responsiveClass: true,
        startPosition: 1,
        responsive: {
            0: {
                items: 1,
                nav: false
            }
        }
    });

    // Owl Carousel for explore mobile
    jQuery(".owl-explore").owlCarousel({
        items: 1,
        dotsEach: true,
        margin: 15,
        mouseDrag: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            }
        }
    });

    // Owl Carousel for get to know us mobile
    jQuery(".owl-know-us").owlCarousel({
        items: 1,
        dotsEach: true,
        margin: 15,
        mouseDrag: false,
        animateOut: 'fadeOut',
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            }
        }
    });

    // Owl Carousel for get to know us mobile
    jQuery(".owl-services").owlCarousel({
        items: 1,
        dotsEach: true,
        margin: 15,
        mouseDrag: false,
        animateOut: 'fadeOut',
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            }
        }
    });

    // Navigation buttons
    var owlTestimonials = jQuery(".owl-testimonials-1");
    var owlTestimonialsMobile = jQuery(".owl-testimonials-2");
    var owlExplore = jQuery(".owl-explore");
    var owlKnowUs = jQuery(".owl-know-us");
    var owlServices = jQuery('.owl-services');
    owlTestimonials.owlCarousel();
    owlTestimonialsMobile.owlCarousel();
    owlExplore.owlCarousel();
    owlKnowUs.owlCarousel();
    owlServices.owlCarousel();

    // Start at item 2
    owlTestimonials.trigger("to.owl.carousel", 1);

    // Go to the previous item
    jQuery(".owl-prev-btn").click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owlTestimonials.trigger("prev.owl.carousel", [300]);
    });

    // Go to the next item
    jQuery(".owl-next-btn").click(function() {
        owlTestimonials.trigger("next.owl.carousel");
    });

    // Go to the previous item
    jQuery(".owl-prev-btn-mobile").click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owlTestimonialsMobile.trigger("prev.owl.carousel", [300]);
    });

    // Go to the next item
    jQuery(".owl-next-btn-mobile").click(function() {
        owlTestimonialsMobile.trigger("next.owl.carousel");
    });

    // Go to the previous item
    jQuery(".owl-prev-explore").click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owlExplore.trigger("prev.owl.carousel", [300]);
    });

    // Go to the next item
    jQuery(".owl-next-explore").click(function() {
        owlExplore.trigger("next.owl.carousel");
    });

    // Go to the previous item
    jQuery(".owl-prev-know-us").click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owlKnowUs.trigger("prev.owl.carousel", [300]);
    });

    // Go to the next item
    jQuery(".owl-next-know-us").click(function() {
        owlKnowUs.trigger("next.owl.carousel");
    });

    // Go to the previous item
    jQuery(".owl-prev-services").click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owlServices.trigger("prev.owl.carousel", [300]);
    });

    // Go to the next item
    jQuery(".owl-next-services").click(function() {
        owlServices.trigger("next.owl.carousel");
    });

    owlTestimonials.on("translated.owl.carousel", function(event) {
        jQuery(".testimonials .owl-carousel.owl-testimonials-1 .owl-item").css("opacity", "0.5");
        jQuery(".testimonials .owl-carousel.owl-testimonials-1 .owl-item.active + .owl-item.active").css("opacity", "1");
        jQuery(".testimonials .owl-carousel.owl-testimonials-1 .owl-item.active + .owl-item.active + .owl-item.active").css("opacity", "0.5");
    });

    // Go to the next item
    jQuery(".card-item-title").click(function() {
        var id = jQuery(this).attr("id");
        var idNum = id.split("-").pop();
        var idNumItem = idNum - 1;
        var imgUrl = jQuery("#background-img-" + idNum).attr("src");
        jQuery("#card-item-display > div").replaceWith(jQuery("#" + id).clone());
        jQuery(".get-to-know-us .list-wrapper .item-content img:nth-child(1)").css("opacity", "0");
        jQuery(".get-to-know-us .list-wrapper .item:nth-child(" + idNumItem + ") img:nth-child(1)").css("opacity", "1");
        jQuery(".get-to-know-us").css("background-image", "url(" + imgUrl + ")");
    });

    // Revolution slider button
    jQuery(".rev-btn").hover(function() {
        jQuery("#rev-btn-text").addClass("zoom-text");

    }, function() {
        jQuery("#rev-btn-text").removeClass("zoom-text");
    });

    // Search form
    jQuery(".search-button").click(function() {
        jQuery("#mega-menu-wrap-HeaderMenuRight #mega-menu-HeaderMenuRight").css("visibility", "hidden");
        jQuery(".search-button").css("visibility", "hidden");
        jQuery(".top-header .input-search-top").show();
        jQuery(".close-btn").show();
    });

    // Close search button
    jQuery(".close-btn").click(function() {
        jQuery(".top-header .input-search-top").hide();
        jQuery(".close-btn").hide();
        jQuery("#mega-menu-wrap-HeaderMenuRight #mega-menu-HeaderMenuRight").css("visibility", "visible");
        jQuery(".search-button").css("visibility", "visible");
    });

    // Search on enter
    jQuery(".top-header .input-search-top").keypress(function(e) {
        if (e.which == 13 && !e.shiftKey) {
            e.preventDefault();
            jQuery("#search-form").submit();
            return false;
        }
    });

    jQuery(".mobile-menu-overlay-wrapper #search-form").attr("id", "search-form-mobile");
    jQuery(".mobile-menu-overlay-wrapper .input-search-top").attr("placeholder", "");

    jQuery(".mobile-menu-overlay-wrapper .input-search-top").keypress(function(e) {
        if (e.which == 13 && !e.shiftKey) {
            e.preventDefault();
            jQuery("#search-form-mobile").submit();
            return false;
        }
    });

    // Gallery overlays
    jQuery(".gallery-item-open").click(function() {
        var id = jQuery(this).attr("id");
        var idNum = id.split("-").pop();

        jQuery(".overlay").removeClass("overlay-from-bottom");
        jQuery(".overlay").addClass("overlay-from-top");
        jQuery("#gallery-overlay-" + idNum).css("height", "100%");
        jQuery("body").addClass("body-no-scroll");
    });

    jQuery(".gallery-icon-open").click(function() {
        var id = jQuery(this).attr("id");
        var idNum = id.split("-").pop();

        jQuery(".overlay").css("height", "0%");
        jQuery(".overlay").removeClass("overlay-from-top");
        jQuery(".overlay").addClass("overlay-from-bottom");
        jQuery("#gallery-overlay-" + idNum).css("height", "100%");
        jQuery("body").addClass("body-no-scroll");
    });

    jQuery(".gallery-icon-open").hover(function() {
        var alt = jQuery(this).attr("alt");

        jQuery(".text-on-hover").text(alt);
        jQuery(".text-on-hover").css("visibility", "visible");
    },
    function() {
        jQuery(".text-on-hover").css("visibility", "hidden");
    });

    jQuery(".closebtn").click(function() {
        jQuery(".overlay").css("height", "0%");
        jQuery("body").removeClass("body-no-scroll");
    });

    // Mobile menu overlay
    jQuery("#menuToggle").click(function() {
        jQuery("#mobile-menu-overlay").css("left", "0%");
        jQuery("body").addClass("body-no-scroll");
    });

    jQuery(".close-menu-btn").click(function() {
        jQuery("#mobile-menu-overlay").css("left", "100%");
        jQuery("body").removeClass("body-no-scroll");
    });
})