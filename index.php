<?php get_header(); ?>
<div class="container-fluid banner-image">
    <div class="row"><img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="Banner image" style="width:100%;height:400px;" /></div>
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

                );
                $posts_array = get_posts( $args );
                foreach( $posts_array as $post ) : setup_postdata( $post ) ?>
                    <div class="col-xs-12 col-sm-4 textblock">
                        <?= get_the_post_thumbnail( $post->ID, 'icons' ); ?>
                        <h3><?= $post->post_title; ?></h3>
                        <div class="box-content"><?= $post->post_content; ?></div>
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

                );
                $posts_array = get_posts( $args );
                foreach( $posts_array as $post ) : setup_postdata( $post ) ?>
                    <div class="col-xs-12 col-sm-6 col-md-3 textblock">
                        <?= get_the_post_thumbnail( $post->ID, 'icons' ); ?>
                        <h3><?= $post->post_title; ?></h3>
                        <div class="box-content"><?= my_ultimate_excerpt(10, $post); ?></div>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="container-fluid" id="kapcsolat" style="height:400px;">
    <div class="container">
        <div class="row">
            <h2 class="section-title"><?= __( 'Kapcsolat', 'getsmart' ); ?></h2>
            <div class="col-xs-12 col-md-6"></div>
            <div class="col-xs-12 col-md-6"></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
