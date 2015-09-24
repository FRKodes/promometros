<?php
/**
 * Page Actividades de desarrollo
 *
 *
 * @package WordPress
 * @subpackage Promometros
 * @since Promometros 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container-fluid main-content">
				
				<div class="row banner-top activities"></div>

				<div class="container">
					
					<?php while ( have_posts() ) : the_post();?>
						
						<h1><?php the_title() ?></h1>
						
						<?php the_content(); ?>

						<div id="accordion" class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<span class="icon-g active"></span><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Desarrollo</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<p>
											· Ut custodiant te sermonem dicens <br>
											· Non ego illud numquam <br>
											· Dixi sunt implicatae <br>
											· Elatus deinde manubrio!  <br>
											· Gus sit amet suum motum <br>
											· Nescio quando, aut quomodo, nescio quo <br>
											· Illud scio, amet tortor <br>
											· Suarum impotens prohibere eum <br>
											· Sum expectantes <br>
											· Ego hodie expectantes <br>
											· Expectantes, et misit unum de pueris Gus interficere <br>
											· Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? <br>
										</p>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<span class="icon-g"></span><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">comecialización ancla</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<p>
											· Ut custodiant te sermonem dicens <br>
											· Non ego illud numquam <br>
											· Dixi sunt implicatae <br>
											· Elatus deinde manubrio!  <br>
											· Gus sit amet suum motum <br>
											· Nescio quando, aut quomodo, nescio quo <br>
											· Illud scio, amet tortor <br>
											· Suarum impotens prohibere eum <br>
											· Sum expectantes <br>
											· Ego hodie expectantes <br>
											· Expectantes, et misit unum de pueris Gus interficere <br>
											· Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? <br>
										</p>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<span class="icon-g"></span><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">comecialización subancla</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										<p>
											· Ut custodiant te sermonem dicens <br>
											· Non ego illud numquam <br>
											· Dixi sunt implicatae <br>
											· Elatus deinde manubrio!  <br>
											· Gus sit amet suum motum <br>
											· Nescio quando, aut quomodo, nescio quo <br>
											· Illud scio, amet tortor <br>
											· Suarum impotens prohibere eum <br>
											· Sum expectantes <br>
											· Ego hodie expectantes <br>
											· Expectantes, et misit unum de pueris Gus interficere <br>
											· Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? <br>
										</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<span class="icon-g"></span><a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Crédito bancario</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse">
									<div class="panel-body">
										<p>
											· Ut custodiant te sermonem dicens <br>
											· Non ego illud numquam <br>
											· Dixi sunt implicatae <br>
											· Elatus deinde manubrio!  <br>
											· Gus sit amet suum motum <br>
											· Nescio quando, aut quomodo, nescio quo <br>
											· Illud scio, amet tortor <br>
											· Suarum impotens prohibere eum <br>
											· Sum expectantes <br>
											· Ego hodie expectantes <br>
											· Expectantes, et misit unum de pueris Gus interficere <br>
											· Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? <br>
										</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<span class="icon-g"></span><a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Administración del activo</a>
									</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse">
									<div class="panel-body">
										<p>
											· Ut custodiant te sermonem dicens <br>
											· Non ego illud numquam <br>
											· Dixi sunt implicatae <br>
											· Elatus deinde manubrio!  <br>
											· Gus sit amet suum motum <br>
											· Nescio quando, aut quomodo, nescio quo <br>
											· Illud scio, amet tortor <br>
											· Suarum impotens prohibere eum <br>
											· Sum expectantes <br>
											· Ego hodie expectantes <br>
											· Expectantes, et misit unum de pueris Gus interficere <br>
											· Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? <br>
										</p>
									</div>
								</div>
							</div>

						</div>

					<?php endwhile; ?>
				</div>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
