<?php 
get_header( );
if (have_posts()):
	?>
<h2><?php 
if (is_category( )) {
	single_cat_title( );	
}elseif (is_tag( )) {
	single_tag_title( );
}elseif (is_author( )) {
	the_post();// 取一个文章
	echo "作者专辑：".get_the_author(  );
	rewind_posts();//重置循环
}elseif (is_day()) {
	echo "这是按天分的专辑";
	echo get_the_date( );
}elseif (is_month()) {
	echo "这是按月分的专辑";
	echo get_the_date('F Y');
}elseif (is_year()) {
	echo "这是按年分的专辑";
	echo get_the_date('Y' );
}else{
	echo "专辑";
}
 ?></h2>
<?php
	while (have_posts()) :
		the_post();
?>
		<article class="yyy">
			<h2><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>
			<p class="post-info"><?php the_time('F j, Y g:i a' ); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID' ) ); ?>"><?php the_author(); ?></a> | Post in 
				<?php 
				$categories = get_the_category( );
				$separator = ", ";
				$output = '';
				if ($categories) {
					foreach ($categories as $category) {
						$output .= '<a href="'. get_category_link( $category->term_id ).'">' . $category->cat_name . '</a>' . $separator;
					}
				}
				echo trim($output,$separator);
				 ?>

			</p>
			<!-- <h2><?php the_content( )?></h2> -->
			<h2><?php the_excerpt()?></h2>
		</article>
<?php		
	endwhile;
else:
	echo "<p>没有文章</p>";
endif;

get_footer();
?>