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

			<section class="intro">
                <?php if ( function_exists ( 'get_field' ) ) : ?>
 
					<?php if ( get_field( 'outreach_intro_message' ) ) : ?>
						<p class="intro-message"> <?php the_field( 'outreach_intro_message' ); ?> </p>
					<?php endif; ?>
			
				<?php endif; ?>
            </section> 

			<section class="section section-1">
                <?php if ( function_exists ( 'get_field' ) ) : ?>

					<?php if ( get_field( 'outreach_section_1_photo' ) ) :
						$image = get_field('outreach_section_1_photo');

						// Image code snippet from https://www.advancedcustomfields.com/resources/image/
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					<?php endif; ?>
 
					<div class="written-content">
						<?php if ( get_field( 'outreach_section_1_title' ) ) : ?>
							<h2> <?php the_field( 'outreach_section_1_title' ); ?> </h2>
						<?php endif; ?>
				
						<?php if ( get_field( 'outreach_section_1_information' ) ) : ?>
							<p> <?php the_field( 'outreach_section_1_information' ); ?> </p>
						<?php endif; ?>
					</div> 
						
				<?php endif; ?>
            </section> 

			<section class="section section-2">
                <?php if ( function_exists ( 'get_field' ) ) : ?>

					<?php if ( get_field( 'outreach_section_2_photo' ) ) :
						$image = get_field('outreach_section_2_photo');
						
						// Image code snippet from https://www.advancedcustomfields.com/resources/image/
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					<?php endif; ?>
 
					<div class="written-content">
						<?php if ( get_field( 'outreach_section_2_title' ) ) : ?>
							<h2> <?php the_field( 'outreach_section_2_title' ); ?> </h2>
						<?php endif; ?>
				
						<?php if ( get_field( 'outreach_section_2_information' ) ) : ?>
							<p> <?php the_field( 'outreach_section_2_information' ); ?> </p>
						<?php endif; ?> 
					</div>		
					
				<?php endif; ?>
            </section>

			<section class="section section-3">
                <?php if ( function_exists ( 'get_field' ) ) : ?>

					<?php if ( get_field( 'outreach_section_3_photo' ) ) :
						$image = get_field('outreach_section_3_photo');
						
						// Image code snippet from https://www.advancedcustomfields.com/resources/image/
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					<?php endif; ?>
 
					<div class="written-content">
						<?php if ( get_field( 'outreach_section_3_title' ) ) : ?>
							<h2> <?php the_field( 'outreach_section_3_title' ); ?> </h2>
						<?php endif; ?>
				
						<?php if ( get_field( 'outreach_section_3_information' ) ) : ?>
							<p> <?php the_field( 'outreach_section_3_information' ); ?> </p>
						<?php endif; ?> 
					</div>
						
				<?php endif; ?>
            </section>

			<section class="section section-4">
                <?php if ( function_exists ( 'get_field' ) ) : ?>

					<?php if ( get_field( 'outreach_section_4_photo' ) ) :
						$image = get_field('outreach_section_4_photo');
						
						// Image code snippet from https://www.advancedcustomfields.com/resources/image/
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					<?php endif; ?>
 
					<div class="written-content">
						<?php if ( get_field( 'outreach_section_4_title' ) ) : ?>
							<h2> <?php the_field( 'outreach_section_4_title' ); ?> </h2>
						<?php endif; ?>
				
						<?php if ( get_field( 'outreach_section_4_information' ) ) : ?>
							<p> <?php the_field( 'outreach_section_4_information' ); ?> </p>
						<?php endif; ?> 
					</div>
						
				<?php endif; ?>
            </section>

			<?php endwhile; ?>

	</main>

<?php
get_footer();
