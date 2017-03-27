</div><!-- /content -->
<footer class="container-fluid" id="kapcsolat">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h2 class="section-title"><?= __( 'Kapcsolat', 'getsmart' ); ?></h2>
                <?php //$contact = get_post( 8 ); ?>
                <?= do_shortcode(get_post_field('post_content', 8)); ?>
            </div>
            <div class="col-xs-12 col-md-6 kotelezo-elemek">
                <a href="http://getsmart.dev/viselheto-bioszenzortechnologia-alkalmazasa-a-gyogyszerkutatasban-valamint-a-kozossegi-stresszmeresben/" class="szechenyi">
                    <img src="<?php bloginfo('template_url') ?>/images/infoblokk_NKFIA.jpg" alt="Széchenyi terv logó nagyobb" style="width:300px;height:auto;" />
                </a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
