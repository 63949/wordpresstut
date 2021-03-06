<html <?php language_attributes( ); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta charset="<?php bloginfo('charset' ); ?>"></meta>
<meta name="viewport" content='width=device-width'>
	<title><?php bloginfo('name' ); ?></title>
	<!-- 头部的css等，添加头部网页管理条等的CSS控制 -->
	<?php wp_head(); ?>  
	<!-- 头部的css等，添加头部网页管理条等的CSS控制 -->
</head>
<body <?php body_class( ); ?>>
	<div class="container">
<!-- site-header -->
<header class="site-header">
	<h1><?php bloginfo('name' ); ?></h1>
	<h5><?php bloginfo('description' ); ?></h5>
	<?php if (is_page(9 )) {
		echo "- 欢迎来搞。";
	} ?>
	<nav class="site-nav">
		<?php 
		$args = array('theme_location' => 'primary' ); ?>
		<?php wp_nav_menu($args); ?> <!-- 这里生成的自定义列表菜单 -->
	</nav>
</header><!-- site-header -->
