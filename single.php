<?php get_header(); ?>
<div class="article container">
	<?php if (have_posts()) { ?>
		<?php while (have_posts()) {
			the_post();
			setup_postdata($post);
            $banner_id = get_post_meta( $post->ID, '_banner_image', true );
		?>
			<!-- Post Starts -->
            <?php if( $banner_id ){
                echo wp_get_attachment_image($banner_id, 'banners');
            } ?>
			<div class="single_post">
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
