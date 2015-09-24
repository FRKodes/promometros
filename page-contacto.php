<?php
/**
 * Page Contacto
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
				
				<div class="row banner-top contact"></div>

				<?php while ( have_posts() ) : the_post();?>
					
					<h1><?php the_title() ?></h1>
					
					<div class="container">
						<div class="map">
							<img class="hidden-sm hidden-md hidden-lg hidden-xl" src="<?php echo img_path($_SERVER['HTTP_HOST']) ?>mapa.jpg" alt="">
							<img class="hidden-xs" src="<?php echo img_path($_SERVER['HTTP_HOST']) ?>mapa-md.jpg" alt="">
						</div>
						
						<div class="contact-info">
							<p>Av. Pablo Neruda 3463 col. Colinas de San Javier <br> Guadalajara, Jal. México. C.P. 45110</p>
							<ul>
								<li><span class="icon-a-1"></span>(33) 3640 2674</li>
								<li><span class="icon-b-1"></span>(33) 1410 2845</li>
								<li><span class="icon-c-1"></span><a href="mailto:contacto@promometros.com">contacto@promometros.com</a></li>
							</ul>
						</div>
						
						<div class="contactForm">
							<form action="" id="contactForm" method="post">
								<div class="form-group"><input type="text" data-validate="required" name="name" class="form-control" placeholder="*Nombre"></div>
								<div class="form-group"><input type="text" name="phone" class="form-control" placeholder="Teléfono"></div>
								<div class="form-group"><input type="text" data-validate="required|email" name="email" class="form-control" placeholder="*Correo Electrónico"></div>
								<div class="form-group"><textarea name="message" data-validate="required" id="message" cols="30" rows="10" placeholder="*Mensaje" class="form-control"></textarea></div>
								<div class="submit-line"><input type="submit" class="btn btn-primary"></div>
								<div class="sent_mail_alert">Gracias! <br>tu comentario se envió con éxito.</div>
							</form>
						</div>
					</div>



				<?php endwhile; ?>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
