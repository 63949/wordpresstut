<?php 
get_header( );
if (have_posts()):
	while (have_posts()) :
		the_post();
?>
		<h2><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>
		<h2><?php the_content( )?></h2>
		
<?php		
	endwhile;
else:
	echo "<p>没有文章</p>";
endif;

get_footer();
?>