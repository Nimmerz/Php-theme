<?php 
	if (!is_admin()) {
		function blog_styles() {
			wp_enqueue_style('normalize', get_template_directory_uri().'/stylesheets/normalize.css');		
			wp_enqueue_style('bootstrap', get_template_directory_uri().'/bower_components/bootstrap/dist/css/bootstrap.min.css');
			wp_enqueue_style('font-awesome', get_template_directory_uri().'/bower_components/font-awesome/css/font-awesome.min.css');
			wp_enqueue_style('flexboxgrid', get_template_directory_uri().'/bower_components/flexboxgrid/css/flexboxgrid.min.css');
			wp_enqueue_style('main', get_template_directory_uri().'/stylesheets/screen.min.css');
		}
		add_action('wp_enqueue_scripts', 'blog_styles');
	}
	add_theme_support( 'menus' );
 ?>