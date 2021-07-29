<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package norm_foote_theme
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="page-header">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</section>

	<?php

	$args = array(
		'post_type' 		=> 'nf-foote-note',
		'posts_per_page' 	=> -1,
		'order_by'			=> 'title',
		'order'				=> 'ASC'
	);

	$query = new WP_Query( $args );

	if( $query -> have_posts() ) : ?>

		<?php while ( $query -> have_posts() ) :
			$query -> the_post(); ?>

			<article>
				<?php if ( function_exists ( 'get_field' ) ) : ?>

					<h2><?php the_title(); ?></h2> 
							
					<?php if ( has_post_thumbnail() ) :
						the_post_thumbnail();	
					endif; ?>
							
					<?php if ( get_field( 'text' ) ) : ?>
						<p><?php the_field('text'); ?></p>	
					<?php endif; ?>
							
				<?php endif; ?>
								
			</article>

		<?php endwhile; ?>
		<?php wp_reset_postdata();

	endif; ?>

</main>

<?php
get_footer();