<?php get_header(); ?>
	<div class="article container">
		<h2 class="inner_title"><?php echo single_cat_title("", false); ?></h2>
		<?php while (have_posts()) : the_post();
			setup_postdata($post);
		?>
			<div class="grid col-xs-12 col-md-6">
				<figure class="effect-bubba">
					<?php $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>
					<?php if($img!=""){ ?>
						<img src="<?php echo $img; ?>">
					<?php } ?>
					<figcaption>
						<h3><?php the_title(); ?></h3>
						<div><?= my_ultimate_excerpt(10, $post); ?></div>
						<a href="<?php the_permalink(); ?>" class="read-more">Tovább ></a>
					</figcaption>
				</figure>
			</div>
		<?php endwhile; ?>
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
