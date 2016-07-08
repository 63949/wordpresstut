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

function v7v3_get_avatar($avatar) { 
    $avatar = str_replace(array("www.gravatar.com","0.gravatar.com","1.gravatar.com","2.gravatar.com"), 
"gravatar.duoshuo.com",$avatar); 
    return $avatar; 
} 
add_filter( 'get_avatar', 'v7v3_get_avatar', 10, 3 );
// 解决访问gravatar不了的问题

// 取得上层的页面id
function get_top_ancestor_id(){
	global $post;
	if ($post->post_parent) {
		$ancestors = get_post_ancestors( $post->ID );
		return $ancestors[0];
	}
	return $post->ID;
}
 ?>
