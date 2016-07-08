<?php 

if (have_posts()) {
	while (have_posts()) {
		the_post();
		echo "<h2>".the_title()."</h2>";
		echo "<h2>".the_content( )."</h2>";
		
	}
}else{
	echo "<p>没有文章</p>";
}

?>