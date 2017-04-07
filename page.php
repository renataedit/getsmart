<?php get_header(); ?>
<div class="article container">
<?php while ( have_posts() ) : the_post(); ?>
	<div class="single_post">
		<h2 class="inner_title"><?php the_title(); ?></h2>
		<div><?php the_content(); ?></div>
	</div>
<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>
