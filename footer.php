    <footer id="contato" class="section fp-auto-height" style="background-image:url(<?php echo get_theme_mod( 'footer_section_bg' ); ?>)">



        <div class="container">



            <h2 class="section__title text-center">Venha nos visitar</h2>



            <div>



                <?php if(get_theme_mod( 'endereco' )||get_theme_mod( 'telefone' )||get_theme_mod( 'chat' )||get_theme_mod( 'email' )) : ?>



                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">



                    <h3 class="hidden-xs">Venha nos visitar</h3>



                    <p>



                        <i class="iconicfill-map-pin-fill"></i> <?php echo get_theme_mod( 'endereco' ); ?><br/><br/>



                        <i class="zocial-call"></i> <?php echo get_theme_mod( 'telefone' ); ?><br/><br/>



                        <i class="iconicfill-comment-alt2-fill"></i> <?php echo get_theme_mod( 'chat' ); ?><br/><br/>



                        <i class="iconicfill-mail"></i><a href="mailto:<?php echo get_theme_mod( 'email' ); ?>"><?php echo get_theme_mod( 'email' ); ?></a><br/><br/>



                    </p>



                    <?php if(get_theme_mod( 'facebook' )||get_theme_mod( 'instagram' )) : ?>



                    <ul>



                        <?php if(get_theme_mod( 'facebook' )): ?><li><a target="_blank" href="<?php echo get_theme_mod( 'facebook' ); ?>"><i class="brandico-facebook"></i></a></li><?php endif; ?>



                        <?php if(get_theme_mod( 'instagram' )): ?><li><a target="_blank" href="<?php echo get_theme_mod( 'instagram' ); ?>"><i class="brandico-instagram"></i></a></li><?php endif; ?>



                    </ul>



                    <?php endif; ?>



                </div>



                <?php endif; if(get_theme_mod( 'funcionamento' )): ?>



                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">



                    <h3 class="text-center-xs">Funcionamento</h3>



                    <p>



                        <?php echo get_theme_mod( 'funcionamento' ); ?>



                    </p>



                </div>



                <?php endif; ?>



                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">



                    <h3 class="text-center-xs">Podemos te ligar</h3>



                    <?php echo do_shortcode('[contact-form-7 id="74" title="Contato"]'); ?>



                </div>



            </div>



        </div>



    </footer>



    <!---->



    <?php  



        echo '

            <script type="text/javascript">

                jQuery(document).ready(function () {

                    $( "header nav a" ).each(function() {

                        var hash = $(this).attr("href");

                        if($(this).text()!="Blog"&&$(this).text()!="Home"&&$("body").is(".pg-home")){

                            $(this).attr("data-url",hash);

                            $(this).attr("href","javascript:void(0)");

                            $(this).click(function() {

                                var route = $(this).attr("data-url");

                                $("html, body").animate({scrollTop: $(route).offset().top - 80}, 500); 

                            });

                        } else if($(this).text()!="Blog"&&$(this).text()!="Home"&&!$(this).parent().is(".visible-xs")){

                            $(this).attr("data-url",hash);

                            $(this).attr("href","'.site_url().'/"+hash);

                        }

                    }); 

                });

            </script>

        ';



        if(get_theme_mod( 'sidebar_control' )!='0'){



            get_sidebar( 'bottom' );



        } else {



            echo '



                <style>



                    #contato{margin-bottom:0;}



                </style>



            ';



        }



    ?>


    <?php wp_footer(); ?> 



</body>







</html>