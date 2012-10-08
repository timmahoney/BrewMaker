/**
 * Any other javascript you create must be wrapped in the document.ready tag below in order for you to be able
 * to use the $ thing for jQuery!!!
 */
jQuery(document).ready(function($){

    /**
     * Track all outbound links and downloads.
     * Source: http://www.prodevtips.com/2008/08/19/tracking-clicks-with-jquery-and-google-analytics/
     *
     * @type {String}
     */

    if(track_outbound_links == "1")
    {
        console.log("Tracking outbound links");
        $("a").not(".kLink").not("a[href^='"+localserver+"']").click(function(){
            $(this).attr("target", "blank");
            var url = $(this).attr("href").replace(/^http\:\/\/(www\.)*/i, "");
            pageTracker._trackPageview('/external/'+url);
        });
    }


});