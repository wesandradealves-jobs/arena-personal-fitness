<aside class="col-lg-3 col-md-3 col-sm-3 aside hidden-xs">

    <?php if ( is_active_sidebar( 'blog' ) ) : ?>

        <div id="widget-area" class="widget-area" role="complementary">

            <?php dynamic_sidebar( 'blog' ); ?>

        </div><!-- .widget-area -->

    <?php endif; ?>

</aside>