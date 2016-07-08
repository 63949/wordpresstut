<?php 
get_header( );
if (have_posts()):
	while (have_posts()) :
		the_post();
?>
		<article class="page">
			<!-- <h2><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2> -->
			<!-- column-container -->
			<div class="column-container clearfix">
				<div class="title-column">
					<h2><?php the_title( ); ?></h2>
				</div>
				<div class="text-column">
					<h2><?php the_content( )?></h2>
				</div>
			</div>
			<!-- column-container -->
			
		</article>
<?php		
	endwhile;
else:
	echo "<p>没有文章</p>";
endif;

get_footer();
?>