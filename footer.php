</div><!-- /content -->
<footer class="container-fluid" id="kapcsolat">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h2 class="section-title"><?= __( 'Kapcsolat', 'getsmart' ); ?></h2>
                <?php // do_shortcode(get_post_field('post_content', 8)); ?>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>@ <a href="mailto:info@getsmart.hu">info@getsmart.hu</a></h4>
                        <h4><i class="fa fa-tty" aria-hidden="true"></i> +36701997445</h4>
                        <h4><i class="fa fa-facebook-square" aria-hidden="true"></i> <a href="https://www.facebook.com/GetSmart-Europe-1857101347866000/?fref=ts">GetSmart Europe</a></h4>
                    </div>
                    <div class="col-sm-6"><h4><?= __('6722, Szeged, Tisza Lajos krt. 63, 1. em.', 'getsmart'); ?></h4></div>
                    <div class="col-xs-12"><?= do_shortcode('[mappress mapid="1"]') ?></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 kotelezo-elemek">
                <a href="<?= ICL_LANGUAGE_CODE == 'hu' ? '' : '/en' ?>/viselheto-bioszenzortechnologia-alkalmazasa-a-gyogyszerkutatasban-valamint-a-kozossegi-stresszmeresben" class="szechenyi">
                    <img src="<?php bloginfo('template_url') ?>/images/infoblokk_NKFIA.jpg" alt="Széchenyi terv logó nagyobb" style="width:100%;height:auto;" />
                </a>
                <!-- <div class="icon-credit">Icons made by <a href="http://www.flaticon.com/authors/gregor-cresnar" title="Gregor Cresnar">Gregor Cresnar</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
