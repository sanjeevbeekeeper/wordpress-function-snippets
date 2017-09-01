<?php
/*
 * hide_version.php
 * Beekeeper Design Studio
 * Created on 1st Sep 2017
 * This will hide the default wordpress version from the DOM.
*/

// remove the default wordpress versions from the front-end
function temple_remove_wpversion_strings($src){
    // calling the global variable
    global $wp_version;
    // check the src PHP_URL_QUERY and replace with $query
    // PHP_URL_QUERY is : &ver=
    parse_str(parse_url($src, PHP_URL_QUERY), $query);
    // if the $query is identitical to the $wp_version
    if( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
        // remove it
        $src = remove_query_arg( 'ver', $src );
        }
    return $src;
    }
add_filter('script_loader_src', 'temple_remove_wpversion_strings');
add_filter('style_loader_src', 'temple_remove_wpversion_strings');

 ?>
