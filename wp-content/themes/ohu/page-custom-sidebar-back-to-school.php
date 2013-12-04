<?php
/*
Template Name: Get Involved Page: Back to School
*/
?>

<?php get_header(); ?>

		<div id="primary1">
			<div id="content1" role="main">

<div class="ohu_sidebar1">
<span style="font-weight:bold;text-transform:uppercase;color:#e41c39;"><?php the_title(); ?></span>








<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">

<img src="http://onehopeunited.org/wp-content/themes/ohu/images/wish-list-button.gif" style="margin-top:-10px;margin-bottom:10px;">
<br />
Our needs range from Band-Aids to buildings! Please check our Back to School Wish List, below:
<br /><br />

<table style="width:225px;">
<t>
<td style="font-size:0.8em;color:#000;"><li>Backpacks</li>
<li>Spiral notebooks</li>
<li>Composition books</li>
<li>Calculators</li>
<li>Pens and pencils</li>
<li>Colored pencils</li>
<li>Colored markers</li>
<li>Highlighters</li>
<li>Pencil cases</li>
<li>Erasers</li>
<li>Rulers</li>
</td>

<td style="font-size:0.8em;color:#000;"><li>Blank journals</li>
<li>Construction paper</li>
<li>3-ring binders</li>
<li>Filler paper</li>
<li>Tab dividers</li>
<li>Crayons</li>
<li>Glue or glue sticks</li>
<li>Lunchboxes</li>
<li>Child scissors</li>
<li>Gift Cards</li>
<li>Pocket folders</li>
</td>
</tr>
</table>
<br />
<span class="redtext">To donate items in Chicago:</span><br />
     	Jenaeth Markaj<br />
     	312-949-4001<br />
     	<a href="mailto:jmarkaj@onehopeunited.org">jmarkaj@onehopeunited.org</a>
 <br /><br />
<span class="redtext">To donate items in the greater Chicago area:</span><br />
     	Marilee LaMattina<br />
     	847-245-6553<br />
     	<a href="mailto:mlamattina@onehopeunited.org">mlamattina@onehopeunited.org</a>
<br /><br />
<span class="redtext">To donate items in Southern Illinois and Missouri:</span><br />
     	Jayme Godoyo<br />
     	618-532-4311 ext 225<br />
     	<a href="mailto:jgodoyo@onehopeunited.org">jgodoyo@onehopeunited.org</a>
<br /><br />
<span class="redtext">To donate items in Florida:</span><br />
     	Maria Weber<br />
     	407-379-2900<br />
     	<a href="mailto:mweber@onehopeunited.org">mweber@onehopeunited.org</a>

</div>

</div>

				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content1" style="">


		<?php the_content(); ?>
<br /><br />
		
		
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>