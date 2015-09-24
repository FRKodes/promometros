<?php
/**
 * Page Nuestros desarrollos
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
				
				<div class="row banner-top developments"></div>

				<div class="container">
					<?php while ( have_posts() ) : the_post();?>
						
						<h1><?php the_title() ?></h1>

					<?php endwhile; ?>

					<div class="dev-container">
						
						<div class="item">
							<figure><img src="<?php echo img_path($_SERVER['HTTP_HOST']) ?>black.jpg" alt=""></figure>
							<div class="info">
								<div class="title">Nombre Desarrollo</div>
								<div class="location">Guadalajara, Jalisco.</div>
								<div class="mts">Área rentable 36,000 mts2.</div>
							</div>
						</div>

						<div class="item">
							<figure><img src="<?php echo img_path($_SERVER['HTTP_HOST']) ?>black.jpg" alt=""></figure>
							<div class="info">
								<div class="title">Nombre Desarrollo</div>
								<div class="location">Guadalajara, Jalisco.</div>
								<div class="mts">Área rentable 36,000 mts2.</div>
							</div>
						</div>

						<div class="item">
							<figure><img src="<?php echo img_path($_SERVER['HTTP_HOST']) ?>black.jpg" alt=""></figure>
							<div class="info">
								<div class="title">Nombre Desarrollo</div>
								<div class="location">Guadalajara, Jalisco.</div>
								<div class="mts">Área rentable 36,000 mts2.</div>
							</div>
						</div>

						<div class="item">
							<figure><img src="<?php echo img_path($_SERVER['HTTP_HOST']) ?>black.jpg" alt=""></figure>
							<div class="info">
								<div class="title">Nombre Desarrollo</div>
								<div class="location">Guadalajara, Jalisco.</div>
								<div class="mts">Área rentable 36,000 mts2.</div>
							</div>
						</div>
				</div>

					
				</div>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
