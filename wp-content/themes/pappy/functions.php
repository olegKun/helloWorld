<?php add_theme_support('post-thumbnails');  

$args = array(
	'name' => 'Виджет sidebar',
	'id' => 'sidebar',
	'description' => 'Здесь добавляем виджеты сайтебара',
	'before_widget' => '<div class="widget">', 
	'after_widget' => '</div>',
	'before_title' => '<h1>',
	'after_title' => '</h1>',
	);

register_sidebar( $args );

wp_enqueue_style('style', get_stylesheet_uri());

// wp_enqueue_script( 'script', get_template_directory_uri(), array ( 'jquery' ), 1.1, null);

// wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);

// function js_to_wp_head() {
//  	wp_enqueue_script( 'wp_head_js', get_stylesheet_directory_uri() . '/js/script.js', array(), true );
// }
 
// add_action( 'wp_enqueue_scripts', 'js_to_wp_head' );



if( !is_admin()){
   wp_deregister_script('jquery');
   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"), false, '1.2.6');
   wp_enqueue_script('jquery');
   }

?>