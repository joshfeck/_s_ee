<?php
/**
 * Template Name: Venue List
 *
 * This is template will display a list of your event venues 
 *
 * Event Registration and Management Plugin for WordPress
 *
 * @ package		Event Espresso
 * @ author		Seth Shoultes
 * @ copyright	(c) 2008-2014 Event Espresso  All Rights Reserved.
 * @ license		http://eventespresso.com/support/terms-conditions/   * see Plugin Licensing *
 * @ link			http://www.eventespresso.com
 * @ version		EE4+
 */
 get_header(); 
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php get_template_part( 'loop', 'espresso_venues' ); ?>			
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();