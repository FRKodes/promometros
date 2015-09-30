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

					<div class="dev-container"><?php
						
						$my_query = new WP_Query('post_type=desarrollo');
						while ($my_query->have_posts()) : $my_query->the_post();?>
							<div class="item">
								<figure><a href="<?php the_permalink() ?>" title="Ver el desarrollo <?php the_title() ?>"><?php the_post_thumbnail() ?></a></figure>
								<div class="info">
									<div class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
									<div class="location"><?php the_field('location') ?></div>
									<div class="mts"><?php the_field('area_rentable') ?></div>
								</div>
							</div><?php 
						endwhile;  wp_reset_query(); ?>

					</div>

				</div>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
