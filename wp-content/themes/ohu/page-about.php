<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

		<div id="primary1">
			<div id="content1" role="main">

<div class="ohu_sidebar1">
<span style="font-weight:bold;text-transform:uppercase;color:#e41c39;"><?php the_title(); ?></span>
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/about/contact-us/">Contact Us</a></li>
<li><a href="http://onehopeunited.org/about/federation-board-of-directors/">Board of Directors</a></li>
<li><a href="http://onehopeunited.org/about/executive-leadership-team/">Executive Leadership Team</a></li>
	<li><a href="http://onehopeunited.org/ab/">Auxiliary Board</A></li>
<li><a href="http://onehopeunited.org/about/one-hope-united-history/">History</a></li>
<li><a href="http://onehopeunited.org/about/agency-promises/">Agency Promises</a></li>
<li><a href="http://onehopeunited.org/results/agency-reports/">Agency Reports</a></li>
</ul>
<span class="redtext"><b>LOCATIONS</b></span>
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/about/northern-illinois-wisconsin/">Northern Illinois / Wisconsin</a></li>
<li><a href="http://onehopeunited.org/about/central-southern-illinois-missouri/">Central & Southern Illinois / Missouri</a></li>
<li><a href="http://onehopeunited.org/about/florida/">Florida Region</a></li>
</ul>

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">
<span class="redtext">ABOUT THE FEDERATION</span>
<br />
<b>One Hope United began more than 100 years ago with the same vision it has today: a safe home for every child.</b>
<br /><br />
We operate as a federation of partner agencies to streamline business functions and to innovate our practices with the nation's leading quality improvement program. We serve children and families through three regional organizations where staff are free to focus their energies on their clients. By safeguarding the welfare of vulnerable children through community-based and in-home programs we help assure the future prosperity of our communities.
</div>

</div>

				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content1" style="margin-top:0px;">


		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>