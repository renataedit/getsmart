<?php get_header(); ?>
<div id="content">
	<div class="article">
		<?php if (have_posts()) { ?>
			<?php while (have_posts()) {
				the_post();
				setup_postdata($post);
			?>
				<!-- Post Starts -->
				<div class="single_post">
					<h2 class="post_title inner_title module come-in-right"><?php echo the_title(); ?></h2>
					<div class="module come-in-left"><?php the_content(); ?></div>
					 <div class="fix"></div>
					 <?php
					 the_tags('<p class="tags">Tags: ', ', ', '</p>');
					 ?>
				</div>
				<!-- Post Ends -->
			<?php } ?>
		<?php } else { ?>
				<p>Sorry, no posts matched your criteria.</p>
		<?php } ?>
	</div>
</div>
<?php get_footer(); ?>
