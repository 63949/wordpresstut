<footer class="site-footer">
	<nav class="site-nav">
		<?php 
		$args = array('theme_location' => 'footer' ); ?>
		<?php wp_nav_menu($args); ?> <!-- 这里生成的自定义列表菜单 -->
	</nav>
	<p><a href="<?php home_url(); ?>"><?php bloginfo('name' ); ?></a> - &copy; <?php echo date("Y"); ?></p>

</footer>
<?php wp_footer(); ?>
</div> <!-- end container -->
</body>
</html>