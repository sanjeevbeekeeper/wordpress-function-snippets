<?php
/*
 * show_user_id.php
 * Beekeeper Design Studio
 * Created on 2nd Sep 2017
 * This will show the user id in the All user table in the Dashboard.
*/

// Adding the column
function rd_user_id_column( $columns ) {
    $columns['user_id'] = 'ID';
    return $columns;
    }
add_filter('manage_users_columns', 'rd_user_id_column');

// Column content
function rd_user_id_column_content($value, $column_name, $user_id) {
	if ( 'user_id' == $column_name )
	return $user_id;
	return $value;
    }
add_action('manage_users_custom_column',  'rd_user_id_column_content', 10, 3);

// Column width
function rd_user_id_column_style(){
	echo '<style>.column-user_id{width: 5%}</style>';
    }
add_action('admin_head-users.php',  'rd_user_id_column_style');
