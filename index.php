<?php get_header(); ?>
<div style="height:500px;" class="container-fluid banner-image" data-parallax="scroll" data-image-src="<?php bloginfo('template_url') ?>/images/parallax4.jpg" data-position-y="top">
</div>
<div class="container-fluid" id="rolunk">
    <div class="container">
        <div class="row">
            <h2 class="section-title"><?= __( 'Rólunk', 'getsmart' ); ?></h2>
        </div>
        <div class="row">
            <?php
                $args = array(
                    'posts_per_page' => 3,
                    'category' => 4,
                    'orderby' => 'date',
                    'order' => 'ASC'
                );
                $posts_array = get_posts( $args );
                foreach( $posts_array as $post ) : setup_postdata( $post ) ?>
                    <div class="col-xs-12 col-sm-4 textblock">
                        <div class="inner-textblock">
                            <?= get_the_post_thumbnail( $post->ID, 'icons' ); ?>
                            <h3><?= $post->post_title; ?></h3>
                            <div class="box-content"><?= $post->post_content; ?></div>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="container-fluid" id="mivel-foglalkozunk" data-parallax="scroll" data-image-src="<?php bloginfo('template_url') ?>/images/parallax3.jpg" data-position-y="top">
    <div class="container parallax-inner">
        <div class="row">
            <h2 class="section-title"><?= __( 'Mivel foglalkozunk', 'getsmart' ); ?></h2>
        </div>
        <div class="row">
            <?php
                $args = array(
                    'posts_per_page' => 4,
                    'category' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC'

                );
                $posts_array = get_posts( $args );
                foreach( $posts_array as $post ) : setup_postdata( $post );
                    $button_title = get_post_meta($post->ID, 'gomb_felirat', true) ? get_post_meta($post->ID, 'gomb_felirat', true) : __('Bővebben', 'getsmart');
                    $button_link = get_post_meta($post->ID, 'gomb_link', true) ? get_post_meta($post->ID, 'gomb_link', true) : get_permalink($post->ID);
                    $button_target = get_post_meta($post->ID, 'gomb_link', true) ? 'target="_blank"' : '';
                ?>
                    <div class="col-xs-12 col-sm-6 col-md-3 textblock">
                        <div class="inner-textblock">
                            <?= get_the_post_thumbnail( $post->ID, 'medium' ); ?>
                            <div class="box-content"><?= $post->post_excerpt; ?></div>
                            <a class="homereadmore" <?= $button_target; ?> href="<?= $button_link ?>"><?= $button_title ?></a>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
