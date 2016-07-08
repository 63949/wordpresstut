<?php
/*
Template Name: 特别布局
*/ 
get_header( );
if (have_posts()):
	while (have_posts()) :
		the_post();
?>
		<article class="page">
			<h2><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>
			<!-- 信息窗口 -->
			<div class="info-box">
				<h4>标题</h4>
				<p>内容是东风风神</p>
			</div>
			<!-- 信息窗口 -->
			<h2><?php the_content( )?></h2>
		</article>
<?php		
	endwhile;
else:
	echo "<p>没有文章</p>";
endif;

get_footer();
?>