<?php
/*
 * image_compression.php
 * Beekeeper Design Studio
 * Created on 1st Sep 2017
 * This is to compress the image quality.
*/

add_filter('jpeg_quality', function($arg){return 100;});
 ?>
