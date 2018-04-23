<!DOCTYPE html>



<html lang="en">







<head>



  <title><?php if (is_front_page()) { echo get_bloginfo('title'); } else { echo get_bloginfo('title')." - ".get_the_title(); } ?></title>







  <meta charset="<?php bloginfo('charset'); ?>">



  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">



  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />



  <meta http-equiv="cache-Control" content="no-cache, no-store, must-revalidate" />



  <meta http-equiv="expires" content="0" />



  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />



  <meta http-equiv="pragma" content="no-cache" />



  <meta name="viewport" content="width=device-width" />



  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />







  <link rel="canonical" href="<?php echo site_url(); ?>" />







  <meta name="apple-mobile-web-app-capable" content="yes" />



  <meta name="HandheldFriendly" content="true" />







  <!-- SEO -->







  <meta name="audience" content="all" />







  <meta name="author" content="Wesley Andrade" />



  <meta name="copyright" content="Arena - Personal Fitness" />



  <meta name="resource-type" content="Document" />



  <meta name="distribution" content="Global" />



  <meta name="robots" content="index, follow, ALL" />



  <meta name="GOOGLEBOT" content="index, follow" />



  <meta name="rating" content="General" />



  <meta name="revisit-after" content="2 Days" />



  <meta name="language" content="pt-br" />


    <meta name="description" content="Travessa Miracema 16 - Meier, (21) 2596-9026 - RJ. Academia Arena Personal Fitness, A Sua Academia No Meier">

  	<meta name="keywords" content="academia meier, academia no meier, academia meier rj, academia meier rio de janeiro, spinning, spinning meier, zumba, zumba meier, pilates, pilates meier, muay thai, muay thai meier, jiu-jitsu meier, funcional, funcional meier, musculacao, musculação meier, aero boxe thai, aero boxe thai meier,dança mix, dança mix meier, ginástica, ginástica meier, jump, jump meier, gap, gap meier, alongamento, alongamento meier, step, step meier, academia dias da cruz, smartfit meier, academia proquality méier, champs fitness meier, academia meier fitness, academia meier castro alves, limits academia, academia engenho de dentro, academia xtreme meier, academia champs meier, academia meier top 3, benefícios">



  <?php wp_meta(); ?>



  <?php wp_head(); ?>



</head>



<body 



<?php



global $post;



if (is_front_page()) {



  echo 'class="pg-home"';



} else if(is_archive()){



  echo 'class="pg-archive pg-blog pg-interna"';



} else if(is_category()){



  echo 'class="pg-category pg-blog pg-interna"';



} else if(is_search()){



  echo 'class="pg-search pg-blog pg-interna"';



} else if(is_single()){



  echo 'class="pg-single pg-interna"';



} else if($post->post_name=="blog") {



  echo 'class="pg-interna pg-blog page_id_'.$post->ID.'"';



} else {



  echo 'class="pg-interna page_id_'.$post->ID.'"';



}



?>>

<div id="texto-gg" style="display:none"><p>A <strong>Arena Personal Fitness</strong> localizada na <strong>Travessa Miracema nº16 no Meier</strong> em frente a rua <strong>Dias da Cruz</strong> oferece aos seus clientes diversas atividades físicas como <strong>musculação, zumba, pilates, muay thai, jiu-jitsu, treinamento funcional, musculação, aero boxe thai, arena total, dança mix, ginástica, jump, gap, alongamento e step</strong></p>

      <p>A Arena também é conhecida por ser a melhor academia do meier, mais barata e cheio de benefícios como os ótimos professores, ótimo atendimento e um excelente espaço. Suas aulas são cheio de benefícios como emagrecer rápido, perder peso, ganhar massa muscular, ter mais qulidade de vida. </p>

      <p>Em comparação as outras academia como Smartfit, Academia Top 3 Gym, Academia Xtreme, Academa Proqualit, Academia Champs, Academia Limits, com certeza a Academia Arena é a melhor academia do Meier e toda região Norte do Rio de Janeiro.</p>
   
        
      </div>


  <div id="wrap">



    <nav class="mobile--navigation">



        <ul>



            <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'items_wrap' => '%3$s' ) ); ?>



        </ul>



    </nav>



    <header>



        <div class="container clearfix">



            <a class="pull-left logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>



                <?php 



                if ( get_theme_mod( 'logo' ) ) :



                  echo "<img src='".esc_url( get_theme_mod( 'logo' ) )."' alt='".esc_attr( get_bloginfo( 'name', 'display' ) )."'>";



                else :



                  echo esc_attr( get_bloginfo( 'name', 'display' ) );



                endif;



                ?>



            </a> 



            <nav class="pull-right">



                <ul class="text-right">



                    <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'items_wrap' => '%3$s' ) ); ?>



                    <li class="visible-xs">



                        <a href="javascript:void(0)">



                            <i class="glyphicon glyphicon-menu-hamburger"></i>



                        </a>



                    </li>



                </ul>



            </nav>



        </div>



    </header>