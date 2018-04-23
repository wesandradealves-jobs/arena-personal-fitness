<?php  $blog = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' =>  -1, 'order' => 'ASC')); ?>

<div class="container clearfix">

    <section id="blog" class="col-lg-9 col-md-9 col-sm-9 col-xs-12 section">

        <?php  if($blog->have_posts()=="1"): ?>

        <?php while ( $blog->have_posts() ) : $blog->the_post(); ?>

        <article id="post_<?php echo get_the_id(); ?>" class="clearfix">

            <h3><?php echo get_the_title(); ?><small>por <b><?php echo get_the_author(); ?></b> em <?php echo get_the_date(); ?></small></h3>

            <div class="post__banner" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), full); ?>)" ><!-- --></div>

            <?php echo '<p>'.substr(get_the_content(), 0, 400).' (...)</p>'; ?>

            <?php echo '<a href="'.get_the_permalink().'" class="btn pull-right waves-effect waves-light btn__1">Leia Mais</a>'; ?>

        </article>

        <?php endwhile; ?>

        <?php else : ?>

        <p class="text-center">Não encontramos nenhuma postagem ainda.</p>

        <?php endif; ?>

    </section>

    <?php get_sidebar( 'blog' ); ?>

</div>