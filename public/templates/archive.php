<?php
/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.digitalriver.com
 * @since      1.0.0
 *
 * @package    DR_Express
 * @subpackage DR_Express/public/templates
 */
?>

<?php get_header(); ?>

<div class="main-content" id="main">

	<div class="container">

		<div class="row">

			<div class="col">
				<div class=float-right>
					<?php dr_express_currency_toggler(); ?>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-md-12">

				<?php if ( have_posts() ) : ?>
					<section class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="page-description">', '</div>' );
						?>
					</section>
				<?php endif; ?>

			</div><!-- .col -->

		</div><!-- .row -->

		<div class="row">

			<?php if ( have_posts() ): ?>
				<?php while ( have_posts() ): ?>
					<div class="col-md-4">
						<?php the_post(); ?>
						<?php dr_express_get_template_part( 'content', 'archive' );  ?>
					</div>
				<?php endwhile; ?>
				<div class="col-md-12">
					<?php dr_express_the_posts_pagination( $wp_query ); ?>
				</div>
			<?php else: ?>
				<?php dr_express_get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>

		</div><!-- .row -->

	</div><!-- .container -->

</div>

<?php get_footer(); ?>
