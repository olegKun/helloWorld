<?php 
	add_theme_support('post-thumbnails');


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







?>