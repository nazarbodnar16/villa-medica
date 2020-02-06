<?php
//Hide admin bar
show_admin_bar( false );

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'menus' );
}
//register menus
register_nav_menus( array(
	'main_menu'  => 'Header menu',
	'footer_menu' => 'Footer menu',
) );

add_theme_support( 'post-formats', array(
	'aside',
	'image',
	'video',
	'audio',
	'quote',
	'link',
	'gallery',
) );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
) );

//Load assets
function my_assets() {

	// Add Google Fonts
	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap' );

	wp_enqueue_style( 'id-main', get_stylesheet_uri() );

	//	Vendor styles
	wp_enqueue_style( 'id-vendor-styles', get_template_directory_uri() . '/styles/vendor.min.css', '1.0' );
	//Custom styles
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/development/css/font-awesome-4.7.0/css/font-awesome.min.css', '1.0' );

/*	wp_enqueue_style( 'fbootstrap-grod', get_template_directory_uri() . '/development/css/css/bootstrap-grid.css', '1.0' );*/

	wp_enqueue_style( 'id-styles', get_template_directory_uri() . '/styles/main.min.css', '1.0' );

	//jQuery minified
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/scripts/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );

	//Vendor scripts
	wp_enqueue_script( 'id-vendor-script', get_template_directory_uri() . '/scripts/vendor.min.js', array(), '1.0.0', true );
/*	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/scripts/swiper.min.js', array(), '1.0.0', true );*/

	//Custom scripts
	wp_enqueue_script( 'id-custom-script', get_template_directory_uri() . '/scripts/index.min.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'my_assets' );

//Add taxonomy to custom post types
add_filter( 'pre_get_posts', 'query_post_type' );
function query_post_type( $query ) {
	if ( is_category() ) {
		$post_type = get_query_var( 'post_type' );
		if ( $post_type ) {
			$post_type = $post_type;
		} else {
			$post_type = array( 'nav_menu_item', 'post', 'portfolio-item' );
		}
		$query->set( 'post_type', $post_type );

		return $query;
	}
}

// Show posts of custom post types on home page
function search_filter( $query ) {
	if ( ! is_admin() && $query->is_main_query() ) {
		if ( $query->is_search ) {
			$query->set( 'post_type', array( 'post', 'page', 'portfolio-item' ) );
		}
	}
}

//Portfolio custom post type


/*//Disable Contact Form 7 wrapping inputs into span's
add_filter( 'wpcf7_form_elements', function ( $content ) {
	$content = preg_replace( '/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content );
	return $content;
} );

*/

//add SVG to allowed file uploads
// function add_file_types_to_uploads($file_types){
 
//     $new_filetypes = array();
//     $new_filetypes['svg'] = 'image/svg+xml';
//     $file_types = array_merge($file_types, $new_filetypes );
 
//     return $file_types;
// }
// add_action('upload_mimes', 'add_file_types_to_uploads');


//register acf_options
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => 'Global Settings',
		'menu_title' => 'Global Settings',
		'menu_slug'  => 'global-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false
	) );
}