define(["jquery", "jquery.single-page", "bootstrap"], function() {
    //the jquery.nav.js and jquery.footer.js plugins have been loaded.
    jQuery(function() {
        jQuery(".navbar").singlePage();
        jQuery(".carousel").carousel();
    });
});
