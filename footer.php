<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package norm_foote_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
			

		// output the contact info
			$args = array(
				'post_type' 		=> 'nf-contact',
				'posts_per_page' 	=> -1,
				'order_by'			=> 'title',
				'order'				=> 'ASC'
			);
			 
			$query = new WP_Query( $args );
			 
			if ( $query -> have_posts() ):
				?>

					<h1>Output footer stuff</h1>
					
					<?php
				while ( $query -> have_posts() ) :
					$query -> the_post();

					if( function_exists('get_field')):?>
					
						<?php if ( get_field( 'name' ) ) : ?>
							<?php the_field('name');?>
						<?php endif; ?> 

						<?php if ( get_field( 'email' ) ) : ?>
							<?php the_field('email');?>
						<?php endif; ?> 

						<?php if ( get_field( 'phone_number' ) ) : ?>
							<?php the_field('phone_number');?>
						<?php endif; ?> 
						
					<?php
					endif;
		
				endwhile;
					wp_reset_postdata(); // Reset the post data to avoid database conflicts
			endif;

?>


			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nf_theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'nf_theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'nf_theme' ), 'nf_theme', '<a href="https://www.evanteichman.com/">Evan Teichman / Hunter Paulson</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
