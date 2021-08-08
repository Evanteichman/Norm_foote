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
		<h2>Get in Touch!</h2>
		<section class="footer-contact-links">
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
					
					<?php
						while ( $query -> have_posts() ) :
							$query -> the_post();

							if( function_exists('get_field')):?>
								<div>
									<?php if ( get_field( 'name' ) ) : ?>
										<h3><?php the_field('name');?></h3>
									<?php endif; ?> 

									<?php if ( get_field( 'email' ) ) : ?>
										<p><?php the_field('email');?></p>
									<?php endif; ?> 

									<?php if ( get_field( 'phone_number' ) ) : ?>
										<p><?php the_field('phone_number');?></p>
									<?php endif; ?> 

								</div>	
							<?php endif;
		
						endwhile;
					wp_reset_postdata(); // Reset the post data to avoid database conflicts
			endif; ?>
			</section>

			<section class="footer-social-links">
				<a class="instagram" href="https://www.instagram.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 7.082c1.602 0 1.792.006 2.425.035 1.627.074 2.385.845 2.46 2.459.028.633.034.822.034 2.424s-.006 1.792-.034 2.424c-.075 1.613-.832 2.386-2.46 2.46-.633.028-.822.035-2.425.035-1.602 0-1.792-.006-2.424-.035-1.63-.075-2.385-.849-2.46-2.46-.028-.632-.035-.822-.035-2.424s.007-1.792.035-2.424c.074-1.615.832-2.386 2.46-2.46.632-.029.822-.034 2.424-.034zm0-1.082c-1.63 0-1.833.007-2.474.037-2.18.1-3.39 1.309-3.49 3.489-.029.641-.036.845-.036 2.474 0 1.63.007 1.834.036 2.474.1 2.179 1.31 3.39 3.49 3.49.641.029.844.036 2.474.036 1.63 0 1.834-.007 2.475-.036 2.176-.1 3.391-1.309 3.489-3.49.029-.64.036-.844.036-2.474 0-1.629-.007-1.833-.036-2.474-.098-2.177-1.309-3.39-3.489-3.489-.641-.03-.845-.037-2.475-.037zm0 2.919c-1.701 0-3.081 1.379-3.081 3.081s1.38 3.081 3.081 3.081 3.081-1.379 3.081-3.081c0-1.701-1.38-3.081-3.081-3.081zm0 5.081c-1.105 0-2-.895-2-2 0-1.104.895-2 2-2 1.104 0 2.001.895 2.001 2s-.897 2-2.001 2zm3.202-5.922c-.397 0-.72.322-.72.72 0 .397.322.72.72.72.398 0 .721-.322.721-.72 0-.398-.322-.72-.721-.72z"/></svg></a>
				<a class="facebook" href="https://www.facebook.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 10h-2v2h2v6h3v-6h1.82l.18-2h-2v-.833c0-.478.096-.667.558-.667h1.442v-2.5h-2.404c-1.798 0-2.596.792-2.596 2.308v1.692z"/></svg></a>
				<a class="apple-music" href="https://music.apple.com/us/browse" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5 13.804c-.393 1.14-1.569 3.159-2.782 3.18-.804.016-1.062-.476-1.98-.476s-1.207.461-1.967.492c-1.286.048-3.271-2.915-3.271-5.498 0-2.374 1.654-3.55 3.099-3.572.774-.014 1.507.522 1.98.522.475 0 1.364-.645 2.298-.55.391.016 1.488.158 2.195 1.189-1.873 1.221-1.581 3.774.428 4.713zm-2.611-8.804c-1.413.058-2.566 1.54-2.404 2.765 1.304.102 2.558-1.362 2.404-2.765z"/></svg></a>
				<a class="youtube" href="https://www.youtube.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M16.23 7.102c-2.002-.136-6.462-.135-8.461 0-2.165.148-2.419 1.456-2.436 4.898.017 3.436.27 4.75 2.437 4.898 1.999.135 6.459.136 8.461 0 2.165-.148 2.42-1.457 2.437-4.898-.018-3.436-.271-4.75-2.438-4.898zm-6.23 7.12v-4.444l4.778 2.218-4.778 2.226zm2-12.222c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12z"/></svg></a>
				<a class="spotify" href="https://www.spotify.com/us/" target="_blank"><svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0 3c-3.866 0-7 3.134-7 7s3.134 7 7 7 7-3.134 7-7-3.134-7-7-7zm3.21 10.096c-.125.207-.394.271-.6.146-1.643-1.005-3.712-1.232-6.149-.675-.235.053-.469-.094-.522-.328-.054-.235.092-.469.328-.523 2.666-.609 4.954-.347 6.799.78.205.126.27.395.144.6zm.857-1.906c-.158.257-.494.338-.751.18-1.881-1.156-4.75-1.491-6.975-.816-.289.088-.594-.075-.681-.363-.087-.289.076-.593.364-.681 2.542-.771 5.703-.398 7.863.93.257.158.338.494.18.75zm.074-1.984c-2.257-1.34-5.979-1.464-8.133-.81-.345.105-.711-.09-.816-.436-.105-.346.09-.712.436-.817 2.473-.75 6.583-.605 9.181.937.311.184.413.586.229.897-.185.311-.587.413-.897.229z"/></svg></a>
			</section>

			<section class="developer-credits">
				<p>Designed and Developed by:</p>
				<a href="https://www.evanteichman.com/" target="_blank">Evan Teichman</a>
				<span>&</span>
				<a href="https://www.hunterpaulson.com/" target="_blank">Hunter Paulson</a>
			</section>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
