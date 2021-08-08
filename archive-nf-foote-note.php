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
							
					<?php if ( has_post_thumbnail() ) :
						the_post_thumbnail('foote-note-image');	
					endif; ?>

					<div class="article-info">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
								
						<?php if ( get_field( 'text' ) ) : ?>
							<p><?php the_excerpt();?></p>	
							<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
						<?php endif; ?>
					<div>
							
				<?php endif; ?>
								
			</article>

		<?php endwhile; ?>
		<?php wp_reset_postdata();

	endif; ?>

</main>

<?php
get_footer();