<?php

require_once('wp_bootstrap_navwalker.php');


function theme_styles() {



	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	
	wp_enqueue_style( 'fontawesome_css', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );


	

}

add_action( 'wp_enqueue_scripts', 'theme_styles' );



 



function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
	
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );

	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery','bootstrap_js'), '', true );



}


add_action( 'wp_enqueue_scripts', 'theme_js' );




add_theme_support('menus');

add_theme_support('secondary-menus');

add_theme_support('post-thumbnails');



function register_my_menus() {
  
  register_nav_menus(
    
    array(
      
      'primary' => __( 'Menu Primario' ),
      
      'secondary' => __( 'Menu Secundario' ),
 
    )
  );
}

add_action( 'init', 'register_my_menus' );


function longitud_excerpt($length) {
    
    return 20;

}


add_filter('excerpt_length', 'longitud_excerpt');

function crear_widget($name,$id,$description){
	
	register_sidebar(array('name' => __($name),
							'id' => $id,
							'description' => __($description),
							'before_widget' => '<div class = "widget">',
							'after_widget' => '</div>',
							'before_title' => '<h3>',
							'after_title' => '</h3>'	



	 ));
}

crear_widget('Front Page Left','front-left','Mostar en la parte izquierda de la pantalla');
crear_widget('Front Page Center','front-center','Mostar en la parte central de la pantalla');
crear_widget('Front Page Right','front-right','Mostar en la parte derecha de la pantalla');
crear_widget('Page Sidebar','page','Mostar en la parte derecha de la pagina');
?>