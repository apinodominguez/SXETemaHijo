<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title" style="color : darkblue,font-size:50px"><?php _e( 'Estaras contento?, ya te has cargado el servidor', 'twentyfifteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Prueba a introducir bien la url, si no te esperas a que resolvamos tu estropicio', 'twentyfifteen' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer(404);