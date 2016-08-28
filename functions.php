<?php
function startwordpress_scripts() {
	wp_enqueue_style ( 'bootstrap', get_template_directory_uri () . '/data/css/bootstrap.min.css', array (), '3.3.6' );
	wp_enqueue_style ( 'normalize', get_template_directory_uri () . '/data/css/normalize.css' );
	wp_enqueue_style ( 'luxvacuos', get_template_directory_uri () . '/data/css/luxvacuos.css' );
	wp_enqueue_script ( 'bootstrap', get_template_directory_uri () . '/data/js/bootstrap.min.js', array (
			'jquery' 
	), '3.3.6', true );
}

add_action ( 'wp_enqueue_scripts', 'startwordpress_scripts' );
function startwordpress_google_fonts() {
	wp_register_style ( 'Muli', 'https://fonts.googleapis.com/css?family=Muli' );
	wp_enqueue_style ( 'Muli' );
	wp_register_style ( 'Muli', 'https://fonts.googleapis.com/css?family=Poppins' );
	wp_enqueue_style ( 'Poppins' );
}

add_action ( 'wp_print_styles', 'startwordpress_google_fonts' );

add_theme_support ( 'title-tag' );
function custom_settings_add_menu() {
	add_menu_page ( 'Lux Vacuos Settings', 'Lux Vacuos Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}

add_action ( 'admin_menu', 'custom_settings_add_menu' );
function custom_settings_page() {
	?>
<div class="wrap">
	<h1>Lux Vacuos Settings</h1>
	<form method="post" action="options.php">
       <?php
	settings_fields ( 'section' );
	do_settings_sections ( 'theme-options' );
	submit_button ();
	?>          
    </form>
</div>
<?php
}
function setting_youtube() {
	?>
<input type="text" name="youtube" id="youtube"
	value="<?php echo get_option('youtube'); ?>" />
<?php
}
function setting_twitter() {
	?>
<input type="text" name="twitter" id="twitter"
	value="<?php echo get_option('twitter'); ?>" />
<?php
}
function custom_settings_page_setup() {
	add_settings_section ( 'section', 'All Settings', null, 'theme-options' );
	add_settings_field ( 'youtube', 'Youtube URL', 'setting_youtube', 'theme-options', 'section' );
	add_settings_field ( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
	
	register_setting ( 'section', 'youtube' );
	register_setting ( 'section', 'twitter' );
}
add_action ( 'admin_init', 'custom_settings_page_setup' );

add_image_size( 'thumb-post', 820 );

add_theme_support( 'post-thumbnails' );

function new_excerpt_length($length) {
	return 200;
}
add_filter('excerpt_length', 'new_excerpt_length');