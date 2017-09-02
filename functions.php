<?php
/*
 * functions.php
 * Beekeeper Design Studio
 * Created on 1st Sep 2017
 * Main functions.php file
*/

// for Optimization
require get_template_directory() . '/inc/remove_emoji.php';
require get_template_directory() . '/inc/image_compression.php';
require get_template_directory() . '/inc/hide_version.php';
require get_template_directory() . '/inc/remove_meta_generator.php';

// Optional
require get_template_directory() . '/inc/disable_visual_editor.php';
require get_template_directory() . '/inc/remove_dashboard_menus.php';
require get_template_directory() . '/inc/show_user_id.php';
// Custom Editing
require get_template_directory() . '/inc/login_page.php'; // require CSS
