<?php
/**
 * The Template for displaying Single calendar postings
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
	

				<?php while ( have_posts() ) : the_post(); ?>
<div style="margin-top:-20px;">
				<?php the_content(); ?>	
			</div>
				<?php endwhile; // end of the loop. ?>

		
		</div><!-- #primary -->

<?php get_footer(); ?>