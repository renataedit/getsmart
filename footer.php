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
                <div class="icon-credit">Icons made by <a href="http://www.flaticon.com/authors/gregor-cresnar" title="Gregor Cresnar">Gregor Cresnar</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
