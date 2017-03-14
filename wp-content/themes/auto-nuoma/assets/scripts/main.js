/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Sage = {
        // All pages
        'common': {
            init: function() {
                // JavaScript to be fired on all pages
            },
            finalize: function() {
                // JavaScript to be fired on all pages, after page specific JS is fired
            }
        },
        // Home page
        'home': {
            init: function() {
                // JavaScript to be fired on the home page
            },
            finalize: function() {
                // JavaScript to be fired on the home page, after the init JS
            }
        },
        // About us page, note the change from about-us to about_us.
        'about_us': {
            init: function() {
                // JavaScript to be fired on the about us page
            }
        }
    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function(func, funcname, args) {
            var fire;
            var namespace = Sage;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function() {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
                UTIL.fire(classnm);
                UTIL.fire(classnm, 'finalize');
            });

            // Fire common finalize JS
            UTIL.fire('common', 'finalize');
        }
    };

    // Load Events
    $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

//pirkti-auto animation caption, show car information

/*jQuery('.pirkti-auto-tmumbnail').each(function(){
  jQuery(this).hover(function(){        
    
    jQuery(".pirkti-auto-permalink a").animate({ bottom: "40px"}, "slow");
}, function(){
    
    jQuery(".pirkti-auto-permalink a").animate({ bottom: "10px", }, "slow");
});

});*/

/*jQuery('.pirkti-auto-tmumbnail').on('mouseover', function() {
    jQuery('.wrapper div').addClass('hover');
    jQuery(".pirkti-auto-permalink a").animate({ bottom: "40px"}, "slow");
  }).on('mouseleave', function() {
    jQuery('.wrapper div').removeClass('hover');
    jQuery(".pirkti-auto-permalink a").animate({ bottom: "10px", }, "slow");
  });
*/

jQuery('.pirkti-auto-tmumbnail').mouseover(function() {
    //show the box
    jQuery(this).children('.pirkti-auto-permalink a').stop().animate({ bottom: '30px' }, 300);
});

jQuery('a').mouseleave(function() {
    //hide the box
    jQuery(this).children('.pirkti-auto-permalink a').stop().animate({ bottom: '10px' }, 500);
});

/*jQuery(document).ready(function(){
 
        jQuery.ajaxSetup({cache:false});
        jQuery(".post-link").click(function(){
            var post_link = $(this).attr("href");
 
            jQuery("#single-post-container").html("content loading");
            jQuery("#single-post-container").load(post_link);
        return false;
        });
 
    });*/

//menu slider
/*jQuery(".menuSlider li").click(function(){
  jQuery(this).addClass('sliderActive');
  jQuery(this).removeClass('sliderActive');
  if (true) {

  } else{
    
  };
});*/

//menu slider animation: section by section
jQuery('.navbar-nav li a').on('click',function(event){
   var anchor = jQuery(this);
   jQuery('html, body').animate({
     scrollTop: jQuery(anchor.attr('href')).offset().top - 65
   }, 600);
    event.preventDefault();
});

// google maps disable scrolling 
jQuery('.footer-maps').click(function () {
    jQuery('.footer-maps iframe').css("pointer-events", "auto");
});

jQuery( ".footer-maps" ).mouseleave(function() {
  jQuery('.footer-maps iframe').css("pointer-events", "none"); 
});