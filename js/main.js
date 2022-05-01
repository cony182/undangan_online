(function($){
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function(){
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#sideNav'
    });

    // Show Modal on click
    $("#popMaster").on("click", function() {
        $('#modalMaster').modal('show');
    });
    $("#popUnmappd").on("click", function() {
        $('#modalUnmappd').modal('show');
    });
    $("#popTastyFreedom").on("click", function() {
        $('#modalTastyFreedom').modal('show');
    });
    $("#popStrawberryMuffin").on("click", function() {
        $('#modalStrawberryMuffin').modal('show');
    });
    $("#popEmvoi").on("click", function() {
        $('#modalEmvoi').modal('show');
    });
    $(".videobutton").on("click", function() {
        $('.video').close();
    });
    $("#popFishbook").on("click", function() {
        $('#modalFishbook').modal('show');
    });

    // Stop video when closing modal
   $('body').on('hidden.bs.modal', '.modal', function () {
       $('video').trigger('pause');
   });
    
    // Tooltips
    $('.list-inline-item').tooltip({
        boundary: 'window'
    })

})(jQuery); // End of use strict