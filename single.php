<?php 

	get_header(); 

	wpb_set_post_views(get_the_ID());

	$atividades = new WP_Query( array( 'post_type' => 'atividades', 'post__not_in' => array($post->ID), 'posts_per_page' =>  -1, 'order' => 'ASC'));
?>



<main id="post_<?php echo $post->ID; ?>">



	<?php if ( have_posts () ) : while (have_posts()):the_post(); ?>


	<?php if(get_post_type()!="atividades") : ?>
	<section class="banner text-center" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(138), full); ?>)">
	<?php else : ?>
	<section class="banner text-center" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), full); ?>)">
	<?php endif; ?>
		<div class="container-fluid">

			<div>
				<?php if(get_post_type()!="atividades") : ?>
				<h1><?php echo get_the_title(138); ?></h1>
				<?php else : ?>
				<h1><?php echo get_the_title(); ?></h1>
				<?php endif; ?>
			</div>

		</div>

	</section>



		<?php 

				if(get_post_type()=="atividades") :

				$categories = get_the_terms( $post->ID, 'atividades_categories' );

				$segunda = get_post_meta( $post->ID, 'segunda', false);

				$terca = get_post_meta( $post->ID, 'terca', false);

				$quarta = get_post_meta( $post->ID, 'quarta', false);

				$quinta = get_post_meta( $post->ID, 'quinta', false);

				$sexta = get_post_meta( $post->ID, 'sexta', false);

				$sabado = get_post_meta( $post->ID, 'sabado', false);

				$domingo = get_post_meta( $post->ID, 'domingo', false);

		        echo '

					<section class="post post_atividades">

						<div class="container clearfix">

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

								<img width="100%" src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID), full).'" alt="'.get_the_title().'"/><br/><br/>

							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

								<h3>'.get_the_title().'</h3>';

								the_content();

								if(get_post_meta( $post->ID, 'pid', true)):

								echo '

								<form action="https://leadlovers.com/Pages/Index/84370" method="post" class="clearfix">  

									<h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">Faça uma aula grátis</h4>

									<input id="id" name="id" type="hidden" value="84370" />  

									<input id="pid" name="pid" type="hidden" value="'.get_post_meta( $post->ID, 'pid', true).'" />  

									<input id="list_id" name="list_id" type="hidden" value="84370" />  

									<input id="provider" name="provider" type="hidden" value="leadlovers" />   

									<p class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><input required id="name" name="name" placeholder="Informe o seu nome" type="text" /></p>   

									<p class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><input required class="telefone" id="phone" name="phone" placeholder="Informe o telefone" type="text" /></p>  

									<div class="clearfix"></div>

									<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><input required id="email" name="email" placeholder="Informe o seu email" type="text" /></p> 

									<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><button class="btn btn__1" type="submit">Quero fazer uma aula grátis</button></p>

									<input type="hidden" id="source" name="source" value="" />  

									<img src="https://click.leadlovers.com/redirect/redirect.aspx?A=V&p='.get_post_meta( $post->ID, 'pid', true).'&m=84370" style="display: none;" />

								</form>';

								endif;

								echo '

							</div>

							<div class="clearfix"></div>

							<h5>Horários desta atividade</h5>';

							if($segunda||$terca||$quarta||$quinta||$sexta||$sabado||$domingo) :

							echo '

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

								<ul class="schedule text-center">

									<li>Seg</li>

									<li>Ter</li>

									<li>Qua</li>

									<li>Qui</li>

									<li>Sex</li>

									<li>Sab</li>

									<li>Dom</li>

								</ul>

								<ul class="schedule text-center">

									<li>

										<ul>';

										foreach($segunda as $dia):

										echo "<li>".$dia."</li>";

										endforeach;

										echo '

										</ul>

									</li>

									<li>

										<ul>';

										foreach($terca as $dia):

										echo "<li>".$dia."</li>";

										endforeach;

										echo '

										</ul>

									</li>

									<li>

										<ul>';

										foreach($quarta as $dia):

										echo "<li>".$dia."</li>";

										endforeach;

										echo '

										</ul>

									</li>

									<li>

										<ul>';

										foreach($quinta as $dia):

										echo "<li>".$dia."</li>";

										endforeach;

										echo '

										</ul>

									</li>

									<li>

										<ul>';

										foreach($sexta as $dia):

										echo "<li>".$dia."</li>";

										endforeach;

										echo '

										</ul>

									</li>

									<li>

										<ul>';

										foreach($sabado as $dia):

										echo "<li>".$dia."</li>";

										endforeach;

										echo '

										</ul>

									</li>

									<li>

										<ul>';

										foreach($domingo as $dia):

										echo "<li>".$dia."</li>";

										endforeach;

										echo '

										</ul>

									</li>

								</ul>

							</div>';

							else:

							echo "<p class='text-center search__result'>Ainda não temos horários definidos para esta modalidade</p>";

							endif;

							echo '

						</div>

					</section>';

						if($atividades->have_posts()=="1") :

						echo '

						<section id="conheca-nossas-atividades" class="section">

							<div class="container">

								<h2 class="section__title text-center">Atividades Relacionadas</h2>

								<div id="CNNAT__slide">

								<div class="owl-carousel owl--cnnat owl-theme">';

								while ($atividades->have_posts()) : $atividades->the_post();



									$categories = get_the_terms( $post->ID, 'atividades_categories' );



										echo '

											<article>

											<div id="CNNAT--post_'.$post->ID.'" class="CNNAT__slide--content" onclick="document.location='."'".get_the_permalink()."';return false;".'">

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



										</div>

										</article>';



								endwhile;

						echo '

								</div>

								</div>

								</div>

						</section>	

					';

					endif;

				else:

				$categories = get_the_terms( $post->ID, 'category' );

				foreach( $categories as $category ) {
					$id = $category->term_id;
				}	

				echo '<div class="container clearfix">

						<section class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

							<h3 class="post__title">'.get_the_title().'</h3>

							<p>por <strong>'.get_the_author().'</strong> - ';

							the_date();

							echo '</p>

							<div class="post__banner" style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID), full).')" ><!-- --></div>

							';

					the_content();

				echo '

						<div class="post__author--box clearfix v-center">

							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">

								'.get_avatar( get_the_author_meta( 'ID' )).'

							</div>

							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">

								<p>por <strong>'.get_the_author().'</strong></p><br/>

								<p>'.get_the_author_meta('description').'</p>

							</div>

						</div>';

						comments_template(); 

				echo '</section>';

						get_sidebar('blog');

				echo '<section id="blog" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">

						<h2 class="section__title text-center">Posts Relacionados</h2>';

							$related = new WP_Query( array( 'post_type' => get_post_type(), 'cat' => $id, 'post__not_in' => array($post->ID), 'posts_per_page' =>  -1, 'order' => 'ASC'));

							if($related->have_posts()=="1") :

								echo '<div class="owl-carousel owl--blog owl-theme">';

								while ( $related->have_posts() ) : $related->the_post(); ?>

									<div>



										<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">


											<div class="owl--blog__thumbnail" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), full); ?>)"><!----></div>



										</div>



										<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">



											<?php echo '<h3>'.get_the_title().'<small>'.get_the_date().'</small></h3>'; ?>



											<?php echo '<p>'.substr(get_the_content(), 0, 140).' (...)</p>'; ?>



											<?php echo '<a href="'.get_the_permalink().'" class="btn waves-effect waves-light btn__1">Leia Mais</a>'; ?>



										</div>



									</div>

								<?php

								endwhile;

								echo '</div>';

							endif;

						echo '

						</section>

					</div>';

				endif;

		?>



	<?php endwhile; ?>



<?php endif; ?> 



</main>



<?php get_footer(); ?>