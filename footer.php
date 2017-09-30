<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Promometros
 * @since Promometros 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="container-fluid first-block">
				<div class="container">
					<div class="logo">
						<img class="back-image" src="<?php echo img_path($_SERVER['HTTP_HOST']) ?>promometros-logotipo-d.png" alt="promometros logotipo">
					</div>
					<hr>
					<p>Av. Pablo Neruda 3463 col. Colinas de San Javier <br> Guadalajara, Jal. México. C.P. 45110</p>
					<ul>
						<li><span class="icon-a-1"></span>(33) 3640 2674</li>
						<li><span class="icon-b-1"></span>(33) 1410 2845</li>
						<li><span class="icon-c-1"></span><a href="mailto:contacto@promometros.com">contacto@promometros.com</a></li>
					</ul>
				</div>
			</div>
				<div class="container-fluid second-block">
					<div class="container">
						<img src="<?php echo img_path($_SERVER['HTTP_HOST']) ?>promometros-logo-completo.png" alt="Logo promometros footer" class="logo-footer">
						<ul>
							<li class="fb"><a href="#" class="icon-d-1"></a></li>
							<li class="tw"><a href="#" class="icon-e-1"></a></li>
							<li class="ig"><a href="#" class="icon-f-1"></a></li>
						</ul>
					</div>
				</div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
