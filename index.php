<?php 
get_header( );
if (have_posts()):
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
			<!-- 视频有个错 -->
			<?php if (get_the_excerpt( )) {
				?>
				<p>
				<?php echo get_the_excerpt( ); ?>
				</p>
				<p>
				<a href="<?php the_permalink(); ?>">继续阅读&raquo;</a>
			</p>
			<?php
			}else {
				echo get_the_content( );
			} ?>
				<h2>
				<?php echo get_the_excerpt( ); ?>
				</h2>
				<p>
				<a href="<?php the_permalink(); ?>">继续阅读&raquo;</a>
			<!-- 要显示“更多”标记需要在后台文章编辑中插入 more标签 -->
		</article>
<?php		
	endwhile;
else:
	echo "<p>没有文章</p>";
endif;

get_footer();
?>