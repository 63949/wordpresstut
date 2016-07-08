<html <?php language_attributes( ); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta charset="<?php bloginfo('charset' ); ?>"></meta>
<meta name="viewport" content='width=device-width'>
	<title><?php bloginfo('name' ); ?></title>
	<?php wp_head(); ?>  
	<!-- 头部的css等，添加头部网页管理条等的CSS控制 -->
</head>
<body <?php body_class( ); ?>>
<!-- site-header -->
<header class="site-header">
	<h1><?php bloginfo('name' ); ?></h1>
	<h5><?php bloginfo('description' ); ?></h5>
</header><!-- site-header -->
