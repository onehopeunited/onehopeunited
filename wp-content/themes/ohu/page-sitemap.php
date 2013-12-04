<?php
/*
Template Name: Sitemap
*/
?>

<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">


				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content" style="width:820px;float:left;margin-right:-70px;margin-top:-80px;">

<span class="redtext" style="text-transform:uppercase;"><?php the_title(); ?></span>
<br /><br />
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>