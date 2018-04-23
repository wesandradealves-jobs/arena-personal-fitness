<?php get_header(); ?>



<main>



<?php if(get_post_type()=="page"&&get_the_title()=="Blog"): ?>

  <section class="banner text-center" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), full); ?>)">

    <div class="container-fluid">

      <div>

        <h1><?php echo get_the_title(); ?></h1>

      </div>

    </div>

  </section>

<?php endif; ?>



<?php 



  if ( is_front_page()||is_home() ){



?>



    <?php if ( have_posts () ) : while (have_posts()):the_post();?>



      <?php 



        include(get_template_directory()."/".get_post( $post )->post_name.".php");



      ?>



    <?php endwhile; ?>



  <?php endif; ?>



</main>



<?php } else { ?>



      <?php include(get_template_directory()."/".get_post( $post )->post_name.".php"); ?>



<?php } ?>



</main>



<?php get_footer(); ?>







