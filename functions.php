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

// 定义摘要内容字数 ,只对 more标签生效对 自定义摘要不生效
function custom_excerpt_length()
{
	return 5;
}
add_filter('excerpt_length','custom_excerpt_length' );

// 网上找的没有验证
// function new_excerpt_more($more) {
// return '';
// }
// add_filter('excerpt_more', 'new_excerpt_more');
// function excerpt_read_more_link($output) {

// global $post;

// //$output = strip_tags($output);
// $output = mb_substr($output,0, 200); //此处的200大于75是没有用的 最多75 具体机制俺没细看

// return $output;
// }
// add_filter('the_excerpt', 'excerpt_read_more_link');

// 网上找的没有验证

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
// 判断当前页面是否有子页面
function has_children(){
	global $post;
	$pages = get_pages('child_of='.$post->ID );
	return count($pages);
}





 ?>


