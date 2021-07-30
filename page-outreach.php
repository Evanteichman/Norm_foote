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

			// get_template_part( 'template-parts/content', 'page' ); 
			
			?>

			<section class="intro">
                <?php if ( function_exists ( 'get_field' ) ) : ?>
 
					<?php if ( get_field( 'outreach_intro_message' ) ) : ?>
						<p> <?php the_field( 'outreach_intro_message' ); ?> </p>
					<?php endif; ?>
			
				<?php endif; ?>
            </section> 

			<section class="section-1">
                <?php if ( function_exists ( 'get_field' ) ) : ?>
 
					<?php if ( get_field( 'outreach_section_1_title' ) ) : ?>
						<h2> <?php the_field( 'outreach_section_1_title' ); ?> </h2>
					<?php endif; ?>
			 
					<?php if ( get_field( 'outreach_section_1_information' ) ) : ?>
						<p> <?php the_field( 'outreach_section_1_information' ); ?> </p>
					<?php endif; ?> 
						
					<?php if ( get_field( 'outreach_section_1_photo' ) ) :
						$image = get_field('outreach_section_1_photo');

						// Image code snippet from https://www.advancedcustomfields.com/resources/image/
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
            </section> 

			<section class="section-2">
                <?php if ( function_exists ( 'get_field' ) ) : ?>
 
					<?php if ( get_field( 'outreach_section_2_title' ) ) : ?>
						<h2> <?php the_field( 'outreach_section_2_title' ); ?> </h2>
					<?php endif; ?>
			 
					<?php if ( get_field( 'outreach_section_2_information' ) ) : ?>
						<p> <?php the_field( 'outreach_section_2_information' ); ?> </p>
					<?php endif; ?> 
						
					<?php if ( get_field( 'outreach_section_2_photo' ) ) :
						$image = get_field('outreach_section_2_photo');
						
						// Image code snippet from https://www.advancedcustomfields.com/resources/image/
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
            </section>

			<section class="section-3">
                <?php if ( function_exists ( 'get_field' ) ) : ?>
 
					<?php if ( get_field( 'outreach_section_3_title' ) ) : ?>
						<h2> <?php the_field( 'outreach_section_3_title' ); ?> </h2>
					<?php endif; ?>
			 
					<?php if ( get_field( 'outreach_section_3_information' ) ) : ?>
						<p> <?php the_field( 'outreach_section_2_information' ); ?> </p>
					<?php endif; ?> 
						
					<?php if ( get_field( 'outreach_section_3_photo' ) ) :
						$image = get_field('outreach_section_3_photo');
						
						// Image code snippet from https://www.advancedcustomfields.com/resources/image/
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
            </section>

			<?php endwhile; ?>

	</main>

<?php
get_footer();
