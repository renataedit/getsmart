<?php get_header(); ?>
<div class="article container">
	<?php if (have_posts()) { ?>
		<?php while (have_posts()) {
			the_post();
			setup_postdata($post);
		?>
			<!-- Post Starts -->
			<div class="single_post">
				<?php
					if(has_post_thumbnail( $post->ID )){
						echo get_the_post_thumbnail( $post->ID, 'medium' );
					}
				?>
				<h2 class="post_title inner_title"><?php echo the_title(); ?></h2>
				<div><?php the_content(); ?></div>
				 <div class="fix"></div>
				 <?php
				 the_tags('<p class="tags">Tags: ', ', ', '</p>');
				 ?>
			</div>
			<!-- Post Ends -->
		<?php } ?>
	<?php } else { ?>
		<?= __('Nincs a keresésnek megfelelő elem.', 'getsmart')?>
	<?php } ?>
</div>
<?php get_footer(); ?>
