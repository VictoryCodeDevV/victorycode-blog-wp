<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action( 'wp_footer', 'theme_scripts' );
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('after_setup_theme', 'custom_site');
add_action( 'widgets_init', 'register_my_widgets' );


// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_styles() {
	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/assets/css/style.css'  );
}

function theme_scripts() {
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}

function theme_register_nav_menu() {
	register_nav_menu( 'nav', 'Основное меню' );
	register_nav_menu( 'footerNav', 'Меню в подвале' );

	register_nav_menu( 'social', 'Соцсети' );
}

function custom_site() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails', array( 'post' ) );
}


add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){

	register_sidebar( array(
		'name'          => 'PageLeftSidebar',
		'id'            => "PageLeftSidebar",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	) );


	register_sidebar( array(
		'name'          => 'PageRightSidebar',
		'id'            => "PageRighttSidebar",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	));
}

// Breadcrumbs

function get_breadcrumbs() {
	if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( ' <p id="breadcrumbs" class="breadcrumbs"> ', '</p>');}
}


function custom_excerpt_length($excerpt){
	$characters = 160; // Количество символов
	if (strlen($excerpt) > $characters) {
		return substr($excerpt, 0, strpos($excerpt, ' ', $characters));
	}
	return $excerpt;
}

add_filter('the_excerpt', 'custom_excerpt_length');




// register_sidebar( array(
	// 	'name'          => 'LeftSidebar',
	// 	'id'            => "pageSidebarLeft",
	// 	'description'   => '',
	// 	'class'         => '',
	// 	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => "</li>\n",
	// 	'before_title'  => '<h2 class="widgettitle">',
	// 	'after_title'   => "</h2>\n",
	// 	'before_sidebar' => '', // WP 5.6
	// 	'after_sidebar'  => '', // WP 5.6
	// ));

	// register_sidebar( array(
	// 	'name'          => 'LeftSidebarss',
	// 	'id'            => "pageSidebarRight",
	// 	'description'   => '',
	// 	'class'         => '',
	// 	'before_widget' => '',
	// 	'after_widget'  => "",
	// 	'before_title'  => '',
	// 	'after_title'   => "",
	// 	'before_sidebar' => '', // WP 5.6
	// 	'after_sidebar'  => '', // WP 5.6
	// ) );


// Шорткоды

add_shortcode( 'contacts', 'contacts' );

function contacts() {
	
	$menu_name = 'social';
	$locations = get_nav_menu_locations();

	if( $locations && isset( $locations[ $menu_name ] ) ){

		// получаем элементы меню
		$menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );

		// создаем список
		$menu_list = '<ul id="menu-' . $menu_name . '">';

		foreach ( (array) $menu_items as $key => $menu_item ){
			$menu_list .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . ': <br> ' . $menu_item->url . '</a></li>';
		}

		$menu_list .= '</ul>';
	}
	else {
		$menu_list = '<ul><li>Меню "' . $menu_name . '" не определено.</li></ul>';
	}

	return $menu_list;
}

add_shortcode( 'contacts-popup', 'ContactsPopup' );

function ContactsPopup() {
	return '<a class="contacts-popup"> Связаться со мной </a>';
}

