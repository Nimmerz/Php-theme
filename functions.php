<?php 
		
	add_theme_support("post-thumbnails");	

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

	add_filter('excerpt_more', function($more) {
		return '...';
	});
	function new_excerpt_length($length) {
		return 50;
	}
	add_filter('excerpt_length', 'new_excerpt_length');

    register_nav_menus ([
    	"header_menu" => "header",
    	"footer_menu" => "footer"
    	]);

	register_sidebar(array(
		'id' => 'right_sidebar', 
		'name' => 'right_columns', 
		'description' => 'right_panelblocks',
		'before_title' => '<h6>',
		'after_title' => "</h6>\n",
	));
		register_sidebar(array(
		'id' => 'right_sidebar1', 
		'name' => 'right_columns1', 
		'description' => 'right_panelblocks',
		'before_title' => '<h6>',
		'after_title' => "</h6>\n",
	));
		$args = array(
		'prev_text'          => __( '<i class="fa fa-long-arrow-left"></i>previous' ),
		'next_text'          => __( 'next<i class="fa fa-long-arrow-right"></i>' ),
		'screen_reader_text' => __( '' ),
	);
	register_sidebar(array(
		'id' => 'footer_sidebar', 
		'name' => 'footer_column', 
		'description' => 'footer_panel',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	));
 ?>