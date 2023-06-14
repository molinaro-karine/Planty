<?php
/**
** activation theme
**/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/theme.css');

}


// Remove auto p from Contact Form 7 shortcode output
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
} 

function my_wp_nav_menu_args( $args = '' ) {
	if( is_user_logged_in() ) {
	// Logged in menu to display
	$args['menu'] = 8;
	 
	} else {
	// Non-logged-in menu to display
	$args['menu'] = 11;
	}
	return $args;
	}
	add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

 /*if(is_user_logged_in()) : ?>
		<div class="user-logged">
			
				<a target="_blank" href="<?php echo admin_url(); ?>">Admin</a>
			
		</div>
		<?php endif; ?>*/
	
