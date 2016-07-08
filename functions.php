<?php 
function tour_res(){
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts','tour_res' );

// 添加自定义导航菜单
register_nav_menus(array(
	// primary 是菜单要显示的位置，对应后台的外观-->菜单中的Primary Menu
	// 从后台选择哪些页面(pages)需要加入该菜单
	'primary' => __( 'Primary Menu' ), 
	'footer' => __( 'Footer Menu' ),
	) 
);

 ?>