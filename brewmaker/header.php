<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<html>
    <head>

        <meta charset="<?php bloginfo('charset'); ?>">

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <?php if (is_search()) { ?>
        <meta name="robots" content="noindex, nofollow" />
        <?php } ?>

        <title>
            <?php
            if (function_exists('is_tag') && is_tag()) {
                single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
            elseif (is_archive()) {
                wp_title(''); echo ' Archive - '; }
            elseif (is_search()) {
                echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
            elseif (!(is_404()) && (is_single()) || (is_page())) {
                wp_title(''); echo ' - '; }
            elseif (is_404()) {
                echo 'Not Found - '; }
            if (is_home()) {
                bloginfo('name'); echo ' - '; bloginfo('description'); }
            else {
                bloginfo('name'); }
            if ($paged>1) {
                echo ' - page '. $paged; }
            ?>
        </title>

        <meta name="title" content="<?php
        if (function_exists('is_tag') && is_tag()) {
            single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
        elseif (is_archive()) {
            wp_title(''); echo ' Archive - '; }
        elseif (is_search()) {
            echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
        elseif (!(is_404()) && (is_single()) || (is_page())) {
            wp_title(''); echo ' - '; }
        elseif (is_404()) {
            echo 'Not Found - '; }
        if (is_home()) {
            bloginfo('name'); echo ' - '; bloginfo('description'); }
        else {
            bloginfo('name'); }
        if ($paged>1) {
            echo ' - page '. $paged; }
        ?>">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <meta name="google-site-verification" content="">
        <!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->

        <meta name="author" content="JiveBrew">
        <meta name="Copyright" content="Copyright JiveBrew 2012. All Rights Reserved.">

        <!--  Mobile Viewport meta tag
        j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
        device-width : Occupy full width of the screen in its current orientation
        initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
        maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
        -->

        <!-- Uncomment to use; use thoughtfully!
          <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        -->

        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/favicon.ico">
        <!-- This is the traditional favicon.
           - size: 16x16 or 32x32
           - transparency is OK
           - see wikipedia for info on browser support: http://mky.be/favicon/ -->

        <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/apple-touch-icon.png">
        <!-- The is the icon for iOS's Web Clip.
           - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
           - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
           - Transparency is not recommended (iOS will put a black BG behind the icon) -->

        <!-- CSS: screen, mobile & print are all in the same file -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!-- all our JS is at the bottom of the page, except for Modernizr. -->

        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/_/js/modernizr-2.6.min.js"></script>

        <script type="text/javascript">
            var localserver = "<?php bloginfo('url'); ?>";
            var track_outbound_links = "<?php echo of_get_option("track_outbound_links"); ?>";
        </script>

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>