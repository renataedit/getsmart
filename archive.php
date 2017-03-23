<?php get_header(); ?>
	<div class="article">
		<h2 class="inner_title"><?php echo single_cat_title("", false); ?></h2>
		<?php if (have_posts()) : the_post();
			setup_postdata($post);
		?>
			<div class="archive_post">
				<?php $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>

				<?php if($img!=""){ ?>
				<img class="archive_img col-3-img" src="<?php echo $img; ?>">
				<?php } ?>
				<h3 class="archive_title inner_title col-3-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>
				<div class="archive_content col-3-content"><?php wpe_excerpt('wpe_excerptlength_blog', 'wpe_excerptmore'); ?></div>
				<a href="<?php the_permalink(); ?>" class="read-more">Tovább ></a>
			</div>
		<?php else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
		<!-- Pagination -->
	<div class="pagination">
		<?php
		global $wp_query;
		$big = 99999999;

		$args = array(
			'base'         => str_replace($big, '%#%', get_pagenum_link($big)),
			'format'       => '?paged=%#%',
			'total'        => $wp_query->max_num_pages,
			'current'      => max(1, get_query_var('paged')),
			'show_all'     => false,
			'end_size'     => 2,
			'mid_size'     => 3,
			'prev_next'    => True,
			'prev_text'    => '« Previous Page',
			'next_text'    => 'Next Page »',
			'type'         => 'plain',
			'add_args'     => False,
			'add_fragment' => ''
		);
		?><div class="pagination-in"><?php
	   echo paginate_links( $args );
	  ?></div>
	</div>
</div>
<?php get_footer(); ?>
