<?php
/**
 * Page Quienes somos
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
				
				<div class="row banner-top quienes"></div>

				<div class="container">
					<?php while ( have_posts() ) : the_post();?>
						
						<h1><?php the_title() ?></h1>
						
						<?php the_content(); ?>

					<?php endwhile; ?>
				</div>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
