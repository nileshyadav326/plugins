<?php
/**
 * Plugin Name: Remove Default Howdy Text 
 * Plugin URI: http://speedospeed.allalla.com/plugins/removehowdy.zip
 * Description: This plugin is vary essancial for removing the default wordpress Howdy text put                there own name
 * Version: 1.0
 * Author: Nilesh Yadav
 * Author URI: http://speedospeed.allalla.com
 * License: GPL2
 */
 
 
 
 
function remove_default( $wp_admin_bar ) {
	
global $current_user;
get_currentuserinfo();	

$name =  $current_user->user_lastname ;
	
$my_account = $wp_admin_bar->get_node('my-account');
$newtitle = str_replace( 'Howdy,', $name , $my_account->title );
$wp_admin_bar->add_node( array(
'id' => 'my-account',
'title' => $newtitle,
) );
}
add_filter( 'admin_bar_menu', 'remove_default',25 );
 
?>
 
