<?php
/*
 * disable_visual_editor.php
 * Beekeeper Design Studio
 * Created on 1st Sep 2017
 * This will disable the visual editor in the WordPress dashboard.
*/

add_filter('user_can_richedit' , create_function('' , 'return false;') , 50);

 ?>
