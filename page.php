<?php get_header(); ?>
<div id="content">
	<div class="article">
	<?php while ( have_posts() ) : the_post(); ?>
		<h2 class="inner_title"><?php the_title(); ?></h2>
		<div><?php the_content(); ?></div>
	<?php endwhile; // end of the loop. ?>
	</div>
</div>
<?php get_footer(); ?>
