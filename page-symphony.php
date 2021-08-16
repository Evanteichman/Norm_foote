<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package norm_foote_theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
		?>

			<h1> <?php the_title();	?> </h1>	

			<section class="symphony-content">
			<?php if ( function_exists ( 'get_field' ) ) : ?>

				<?php if ( get_field( 'symphony_banner_image' ) ) :
					$image = get_field('symphony_banner_image');

					// Image code snippet from https://www.advancedcustomfields.com/resources/image/
					if( !empty( $image ) ): ?>
						<img class="hero-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				<?php endif; ?>

				<div class="the-symphony-content">
			
				<?php if ( get_field( 'symphony_page_information' ) ) : ?>
					<p> <?php the_field( 'symphony_page_information' ); ?> </p>
				<?php endif; ?> 
					
				<!-- Gallery code snippet from https://www.advancedcustomfields.com/resources/gallery/ -->
				<?php if ( get_field( 'symphony_photo_gallery' ) ) :
					$images = get_field('symphony_photo_gallery');
					if( $images ): ?>
					<div class="photo-gallery">
						<?php foreach( $images as $image ): ?>
							<img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				<?php endif; ?>
				</div>

			<?php endif; ?>
		</section> 

		<?php endwhile; ?>

	</main>

<?php
get_footer();
