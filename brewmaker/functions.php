<?php

$templatedir = get_template_directory();


/**
 * Load scripts from the parent template
 *
 */

function my_scripts_method()
{
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'global-brewmaker', get_bloginfo("template_url")."/_/js/global.js");
}


add_action('wp_enqueue_scripts', 'my_scripts_method');


/**
 * @TODO: APC-based caching later
 */
if( ! function_exists("bm_get_template_part") )
{
    function bm_get_template_part($part=null, $name=null)
    {
        $filename = ( ! $name ? $part : $part."-".$name );
        if(file_exists("cache/".$filename.".html"))
        {
            print file_get_contents(get_template_directory()."/cache/".$filename.".html");
        }
        else
        {
            $func = "get_".$part;
            ob_start();
            $func($name);
            $contents = ob_get_clean();
            file_put_contents(get_template_directory()."/cache/".$filename.".html", $contents);
            print $contents;
        }
    }
}

if( ! function_exists("bm_expire_cache") )
{
   function bm_expire_cache()
   {
       $dir = 'cache/';
       foreach(glob($dir.'*.*') as $v){
           unlink($v);
       }
   }
}

/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

if ( !function_exists( 'optionsframework_init' ) ) {
    define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/lib/options-framework/inc/' );
    require_once dirname( __FILE__ ) . '/lib/options-framework/inc/options-framework.php';
}

/**
 * Load the Post Meta Framework.
 */
require_once dirname( __FILE__ ) . '/lib/meta-box/meta-box.php';

/**
 * Load the Advanced Custom Post Type Framework.
 */
require_once dirname( __FILE__ ) . '/lib/advanced-custom-post-types/acpt.php';