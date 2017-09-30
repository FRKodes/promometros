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
				
				<div class="row banner-top development-detail"></div>

				<div class="container">
					<?php while ( have_posts() ) : the_post();?>
						
						<h1 class="detail"><?php the_title() ?></h1>

						<div class="carousel-info-container">
							<div class="detail-carousel">
								<?php if (get_field('imagen_1')) { ?><div class="item"><img src="<?php the_field('imagen_1') ?>" alt="imagen 1 desarrollo <?php the_title() ?> <?php the_field('imagen_1') ?>"></div> <?php } ?>
								<?php if (get_field('imagen_2')) { ?><div class="item"><img src="<?php the_field('imagen_2') ?>" alt="imagen 2 desarrollo <?php the_title() ?> <?php the_field('imagen_2') ?>"></div> <?php } ?>
								<?php if (get_field('imagen_3')) { ?><div class="item"><img src="<?php the_field('imagen_3') ?>" alt="imagen 3 desarrollo <?php the_title() ?> <?php the_field('imagen_3') ?>"></div> <?php } ?>
								<?php if (get_field('imagen_4')) { ?><div class="item"><img src="<?php the_field('imagen_4') ?>" alt="imagen 4 desarrollo <?php the_title() ?> <?php the_field('imagen_4') ?>"></div> <?php } ?>
								<?php if (get_field('imagen_5')) { ?><div class="item"><img src="<?php the_field('imagen_5') ?>" alt="imagen 5 desarrollo <?php the_title() ?> <?php the_field('imagen_5') ?>"></div> <?php } ?>
							</div>

							<div class="detail_info">
								<?php if (get_field('direccion')) { ?><div class="mts"><b>Dirección:</b> <br><?php the_field('direccion') ?></div><?php } ?>
								<?php if (get_field('area_rentable')) { ?><div class="mts"><b>Área rentable:</b> <br><?php the_field('area_rentable') ?></div><?php } ?>
								<?php if (get_field('actividades')) { ?><div class="activities"><b>Actividades desarrolladas:</b> <br><?php the_field('actividades') ?> </div><?php } ?>
								<?php if (get_field('inversionista')) { ?><div class="ivestor"><b>Inversionista:</b> <br><?php the_field('inversionista') ?> </div><?php } ?>
								<?php if (get_field('anclas')) { ?><div class="anchor"><b>Anclas:</b> <br><?php the_field('anclas') ?> </div><?php } ?>
							</div>
						</div>

						<div class="pre-next-dev">
							<div class="prev">
								<?php previous_post_link('%link'); ?>
								<span class="icon-g"></span>
							</div> 
							<div class="next">
								<span class="icon-g"></span>
								<?php next_post_link('%link'); ?>
							</div> 
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_footer(); ?>