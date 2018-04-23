<?php 



    $banners = new WP_Query( array( 'post_type' => 'banners', 'posts_per_page' =>  1, 'order' => 'ASC'));



    $objetivos = new WP_Query( array( 'post_type' => 'objetivos', 'posts_per_page' =>  4, 'order' => 'ASC'));



    $atividades = new WP_Query( array( 'post_type' => 'atividades', 'posts_per_page' => -1, 'order' => 'ASC'));



    $alunos = new WP_Query( array( 'post_type' => 'alunos', 'order' => 'ASC'));



    $blog = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' =>  -1, 'order' => 'ASC'));



    // 



    if($banners->have_posts()=="1"){



      while ( $banners->have_posts() ) : $banners->the_post();



        echo '



                <section id="WBDR" class="section text-center" style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID), full).')">



                    <div class="container-fluid">



                        <div>



                            <h1>'.get_the_title().'</h1>



                            <h2>'.get_the_excerpt().'</h2>';



                            if(get_post_meta($post->ID, 'opcao', true)!="0"||get_post_meta($post->ID, 'opcao', true)!="") :



                            echo '<a class="btn waves-effect waves-light btn__1" href="javascript:void(0)" data="scrolldown" title="'.get_post_meta($post->ID, 'botao-label', true).'">'.get_post_meta($post->ID, 'botao-label', true).' <i class="glyphicon glyphicon-menu-down"></i></a>'; 



                            endif;



        echo '                                 



                        </div>



                    </div>



                </section>



        ';



    endwhile; 



    } 



    if($objetivos->have_posts()=="1"){



        echo '



            <section id="escolha-o-seu-objetivo" class="section text-center">



                <div class="container">



                    <h2 class="section__title">Escolha o seu objetivo</h2>



                    <ul class="ESCOSB__grid">';



                        while ( $objetivos->have_posts() ) : $objetivos->the_post();



                        echo '



                        <li>



                            <div class="ESCOSB__grid--panel">



                                <div class="ESCOSB__grid--panel-content">



                                    <div>



                                        <h3>'.get_the_title().'</h3>



                                        <p>'.substr(get_the_content(), 0, 140).' (...)</p>';


                                        if(get_post_meta($post->ID, 'url_externa', true)) :
                                        echo '<a target="_blank" href="'.get_post_meta($post->ID, 'url_externa', true).'" class="btn btn__2">Saiba Mais <i class="glyphicon glyphicon-menu-right"></i></a>';  
                                        else:
                                        echo '<a href="'.get_the_permalink().'" class="btn btn__2">Saiba Mais <i class="glyphicon glyphicon-menu-right"></i></a>';
                                        endif; 


                                    echo '
                                    </div>



                                </div>



                                <div class="ESCOSB__grid--panel-thumbnail">



                                    <div style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID), full).')"></div>



                                </div>



                            </div>



                        </li>                        



                        ';



                        endwhile; 



            echo '



                    </ul>



                </div>



            </section>



        ';



    }



    if(get_theme_mod( 'about_section_title' )||get_theme_mod( 'about_text' )||get_theme_mod( 'about_videoUrl_webm' )||get_theme_mod( 'about_videoUrl_mp4' )): ?>



    <section id="sobre-nos" class="section" style="background-image:url(<?php echo get_theme_mod( 'about_section_bg' ); ?>)">



        <div class="container">



            <?php if(get_theme_mod( 'about_section_title' )): ?>



            <h2 class="section__title text-center"><?php echo get_theme_mod( 'about_section_title' ); ?></h2>



            <?php endif; ?>



            <?php if(get_theme_mod( 'about_section_text' )): ?>



            <p><?php echo get_theme_mod( 'about_section_text' ); ?></p>



            <?php endif; ?>



            <div class="row v-center">



                <?php if(get_theme_mod( 'about_videoUrl_webm' )&&get_theme_mod( 'about_videoUrl_mp4' )): ?>



                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



                        <div class="intrinsic-container">



                                <?php if(get_theme_mod( 'about_videoUrl_mp4' )&&get_theme_mod( 'about_videoUrl_mp4' )&&get_theme_mod( 'about_videoUrl_youtube' )==""): ?>



                                    <video controls>



                                        <source src="<?php echo get_theme_mod( 'about_videoUrl_mp4' ); ?>" type="video/mp4">



                                        <source src="<?php echo get_theme_mod( 'about_videoUrl_webm' ); ?>" type="video/webm">



                                    </video>



                                <?php else: ?>



                                    <iframe src="<?php echo get_theme_mod( 'about_videoUrl_youtube' ); ?>?controls=0"></iframe>



                                <?php endif; ?>



                        </div>



                    </div>



                <?php endif; ?>



            </div>



        </div>



    </section>



<?php



    endif;



    if($atividades->have_posts()=="1"){



        $counter = 0;



        echo '



            <section id="conheca-nossas-atividades" class="section">



                <div class="container">



                    <h2 class="section__title text-center">Conheça nossas atividades</h2>



                    <div id="CNNAT__slide">



                        <div class="owl-carousel owl--cnnat owl-theme">';



                            while ($atividades->have_posts()) : $atividades->the_post();



                                $categories = get_the_terms( $post->ID, 'atividades_categories' );



                                if ($counter % 2 == 0) :



                                echo $counter > 0 ? "</article>" : ""; 



                                echo "<article>";



                                endif;



                                    echo '<div id="CNNAT--post_'.$post->ID.'" class="CNNAT__slide--content" onclick="document.location='."'".get_the_permalink()."';return false;".'">';



                                    echo '



                                        <div>



                                            <div class="clearfix">



                                                <p class="pull-left"><span>'.get_the_title().'</span></p>';



                                                foreach( $categories as $category ) {



                                                    echo '<p class="pull-right">'.$category->name.'</p>';



                                                }



                                    echo '



                                            </div>



                                        </div>



                                        <div class="CNNAT__slide--content-thumbnail" style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID), full).');"></div>



                                    </div>';



                                $counter++;



                                



                            endwhile;



        echo '



                        </div>



                    </div>



                </div>



            </section>



        ';



    }



    if($alunos->have_posts()=="1"){



        echo '



            <section id="sucesso" class="section text-center" style="background-image:url('.get_theme_mod( 'alunos_section_bg' ).')"> 



                <div class="container">';



                if(get_theme_mod( 'about_section_title' )){



                    echo '<h2 class="section__title">'.get_theme_mod( 'alunos_section_title' ).'</h2>';



                }



        echo '



                    <div id="MALN__slide">



                        <div class="owl-carousel owl--maln owl-theme">';



                            while ( $alunos->have_posts() ) : $alunos->the_post();



                            ?>



                            <div class="v-center text-left">



                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">



                                    <div class="intrinsic-container">



                                            <?php if(get_post_meta($post->ID, 'videoUrl_mp4', true)&&get_post_meta($post->ID, 'videoUrl_webm', true)&&get_post_meta($post->ID, 'videoUrl_youtube', true)==""): ?>



                                                <video controls>



                                                    <source src="<?php echo get_post_meta($post->ID, 'videoUrl_mp4', true); ?>" type="video/mp4">



                                                    <source src="<?php echo get_post_meta($post->ID, 'videoUrl_webm', true); ?>" type="video/webm">



                                                </video>



                                            <?php else: ?>



                                                <iframe src="<?php echo get_post_meta($post->ID, 'videoUrl_youtube', true); ?>?controls=0"></iframe>



                                            <?php endif; ?>



                                    </div>



                                </div>



                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">



                                    <h3 class="section__title--CTA"><?php echo get_the_title(); ?></h3>



                                    <?php echo the_content(); ?>



                                </div>   



                            </div>







                            <?php



                        



                            endwhile;



            echo '



                        </div>



                    </div>



                </div>



            </section>        



        ';



    }



    if($blog->have_posts()=="1"){



        echo '



            <section id="blog" class="section">



                <div class="container">



                    <h2 class="section__title text-center">Nossas dicas</h2>



                    <div class="owl-carousel owl--blog owl-theme">';



                    while ( $blog->have_posts() ) : $blog->the_post(); ?>



                    <div>



                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                            <div class="owl--blog__thumbnail" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), full); ?>)"><!----></div>

                        </div>



                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">



                            <?php echo '<h3>'.get_the_title().'<small>'.get_the_date().'</small></h3>'; ?>



                            <?php substr(the_content(), 0, 60); ?>



                            <?php echo '<a href="'.get_the_permalink().'" class="btn waves-effect waves-light btn__1">Leia Mais</a>'; ?>



                        </div>



                    </div>



    <?php



                    endwhile;



        echo '



                    </div>



                </div>



            </section



        ';



    }



    wp_reset_query();   



    wp_reset_postdata();  



?>