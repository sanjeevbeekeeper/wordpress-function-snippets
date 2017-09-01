<?php
/*
 * remove_meta_generator.php
 * Beekeeper Design Studio
 * Created on 1st Sep 2017
 * This will remove the meta generator from the DOM.
*/

// Remove metatag 'generator' from the header
function temple_remove_metaversion(){
    return '';
    }
add_filter('the_generator', 'temple_remove_metaversion');

 ?>
