<?php

function softland_style_frontend() {
  
wp_enqueue_style('fonts', '  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">');
wp_enqueue_style('stylesheet', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
wp_enqueue_style('icofont', get_stylesheet_directory_uri() . '/assets/vendor/icofont/icofont.min.css');
wp_enqueue_style('aos', get_stylesheet_directory_uri() . '/assets/vendor/aos/aos.css');
wp_enqueue_style('line-awesome', get_stylesheet_directory_uri() . '/assets/vendor/line-awesome/css/line-awesome.min.css');
wp_enqueue_style('owl', get_stylesheet_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css');
wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'softland_style_frontend');

function softland_include_myscript(){
wp_enqueue_script('jquery');
wp_enqueue_script('bundle', get_template_directory_uri() .'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
wp_enqueue_script('easing', get_template_directory_uri() .'/assets/vendor/jquery.easing/jquery.easing.min.js');
wp_enqueue_script('form-validate', get_template_directory_uri() .'/assets/vendor/php-email-form/validate.js');
wp_enqueue_script('aos', get_template_directory_uri() .'/assets/vendor/aos/aos.js');
wp_enqueue_script('carousel', get_template_directory_uri() .'/assets/vendor/owl.carousel/owl.carousel.min.js');
wp_enqueue_script('sticky', get_template_directory_uri() .'/assets/vendor/jquery-sticky/jquery.sticky.js');
wp_enqueue_script('main', get_template_directory_uri() .'/assets/js/main.js');
}
 
add_action('wp_enqueue_scripts', 'softland_include_myscript');


// WIDJET REGISTRATION

if (function_exists('register_sidebar'))
register_sidebar(array(
    'before_widget' => '<div class="card my-4 widget">',
    'after_widget'  => '</div></div>',
    'before_title'  => '<h5 class="card-header">',
    'after_title'   => '</h5><div class="card-body">',
));


add_filter( 'excerpt_length', function(){
	return 10;
} );

add_filter('excerpt_more', function($more) {
	return '...';
});

add_theme_support('post-thumbnails');


//menu
register_nav_menus(array(
  'top'  => 'top menu', 
));
