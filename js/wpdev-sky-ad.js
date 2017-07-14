jQuery(document).ready(function() {
    // Change color of HTML - comment out if unneeded
    //jQuery('html').css('background-color', '#222222');
    // Check if ad exists, and run function
    function trackAd() {
        // Get sky box width
        var skyBox = jQuery('[data-tpd-id="dsk-sky-ad-a"]').width();
        if(skyBox > 0) {
            // On load, animate
            jQuery('body').animate({
                marginLeft: "+"+skyBox,
            }, 100, function() {
                // Animation complete. 
            });
        }
        // On ad close, animate
        jQuery('[data-tpd-id="dsk-sky-ad-a"] a.tpd-close-btn').on('click', function() {
           jQuery('body').animate({
              marginLeft: "-0",
           }, 1000, function() {
               // Animation complete.
           });
        });
    }
    var countAd = setInterval(trackAd,1000);
});