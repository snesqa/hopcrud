<?php

/*
Source https://www.youtube.com/watch?v=nvsK0cTH0So&t=640s
@package wordpress
Final Exam project by Snezana Ilic Multimedia design Copenhagen Business Academy 2019 
	
	========================
		ADMIN PAGE
	========================
*/
// custom function to create custom admin page
function hopsne_add_admin_page() {
	
	//**Generate HOP Admin Page**
	
	//add_menu_page=hook from wp-  page title , menu title, capabilty/user level , menu slug (?page=slug) unique slug can have custom js or css attached and important for creating subpages on the admin page
	
	add_menu_page( 'HOP Theme Options', 'Hop settings', 'manage_options', 'hopsne_menu', 'hopsne_theme_create_page' , 'dashicons-welcome-learn-more', 110 ); //dashicons are fonticons
				  
	//get_template_directory_uri() . '/img/name-icon.png', 110 );
	
	
	//Generate HOP Admin Sub Pages
	//add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '' )
	add_submenu_page( 'hopsne_menu', 'HOP Theme Options', 'Read', 'manage_options', 'hopsne_menu', 'hopsne_theme_create_page');
	
	add_submenu_page( 'hopsne_menu', 'SQL create', 'Create', 'manage_options', 'hopsne_createsql', 'hopsne_create_page' );
	
	add_submenu_page( 'hopsne_menu', 'SQL update', 'Update', 'manage_options', 'hopsne_updatesql', 'hopsne_update_page' );
	
	add_submenu_page( 'hopsne_menu', 'SQL delete', 'Delete', 'manage_options', 'hopsne_deletesql', 'hopsne_delete_page' );
	
}
//          trigger function , hook , name of the function we want to trigger
	add_action( 'admin_menu', 'hopsne_add_admin_page' );

function hopsne_theme_create_page() {
	//generation of our admin page
	require_once(get_template_directory() . '/inc/templates/hop-admin.php');
}

function hopsne_create_page() {
	//generation of our admin page
	require_once(get_template_directory() . '/inc/templates/hop-admin-create.php');	
}

function hopsne_update_page() {
	//generation of our admin page
	require_once(get_template_directory() . '/inc/templates/hop-admin-update.php');	
}
function hopsne_delete_page() {
	//generation of our admin page
	require_once(get_template_directory() . '/inc/templates/hop-admin-delete.php');	
}































