<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package norm_foote_theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'nf_theme' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p class="page-not-found">Unfornuately this page cannot be found! Please find the page you're looking for in the menu either located at the top or bottom of your screen.</p>
				

					

					

					

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
