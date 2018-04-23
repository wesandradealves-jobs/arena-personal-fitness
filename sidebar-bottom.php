        <aside class="aside aside__fixed hidden-xs">
            <div class="container">
                <?php if(get_theme_mod( 'sidebar_tag_texto' )): ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tag">
                    <p class="tag text-center">FREEPASS<br/>+<br/>BRINDE</p>
                </div>
                <?php endif; ?>

                <?php if(get_theme_mod( 'sidebar_texto' )): ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <h3><?php echo get_theme_mod( 'sidebar_texto' ); ?></h3>
                </div>
                <?php endif; ?>

                <?php if(get_theme_mod( 'sidebar_botao_label' )): ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                    <a href="<?php echo get_theme_mod( 'sidebar_botao_url' ); ?>" class="btn waves-effect waves-light btn__2"><?php echo get_theme_mod( 'sidebar_botao_label' ); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </aside>