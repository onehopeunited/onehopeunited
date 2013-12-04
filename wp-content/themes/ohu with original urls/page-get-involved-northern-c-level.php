<?php
/*
Template Name: Get Involved Page: Northern Level C
*/
?>

<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

<div style="float:left;border:1px solid #757575;width:220px;margin-left:-70px;padding:20px;line-height:1.3em;color:#757575;font-size:0.9em;margin-bottom:20px;">
<span style="font-weight:bold;text-transform:uppercase;color:#e41c39;"><?php the_title(); ?></span>

<br /><br />
<b>LOCATIONS</b>
<ul>
<li><a href="http://new.onehopeunited.org/get-involved/get-involved-in-northern/">Northern Illinois / Wisconsin</a></li>
<li><a href="http://new.onehopeunited.org/get-involved/get-involved-in-hudelson/">Central & Southern Illinois / Missouri</a></li>
<li><a href="http://new.onehopeunited.org/get-involved/get-involved-in-florida/">Central Florida Region</a></li>
</ul>
<a href="http://new.onehopeunited.org/downloads/pdfs/OHU_2011_annual_report.pdf" target="blank" style="color:gray;font-weight:normal;">ANNUAL REPORT</a> <img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/pdf-icon.gif" align="absmiddle">
<br />
<a href="http://new.onehopeunited.org/downloads/pdfs/Donor_Bill_of_Rights.pdf" target="blank" style="color:gray;font-weight:normal;">DONORS BILL OF RIGHTS</a> <img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/pdf-icon.gif" align="absmiddle"><br /><br />
<b>GUIDESTAR</b>
<ul>
<li>Northern Illinois / Wisconsin</li>
</ul>

<B>CASE FOR SUPPORT</B>
<ul>
<li><a href="http://new.onehopeunited.org/downloads/pdfs/case_for_support_NR.pdf">Northern Illinois / Wisconsin</a></li>
</ul>
<br />
<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">

<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/donate-button.gif" style="margin-top:-10px;margin-bottom:10px;">
<br />
<span class="redtext">Monetary</span><br />
<a href="http://onehopeunited.org/donate/">Make a One-Time donation</a>
<br /><br />
<span class="graytext">Contact:</span> <br />
Joyce Heneberry<br />
847-245-6503<br />
jheneberry@onehopeunited.org
<br /><br />
<span class="redtext">Monthly Donation</span><br />
Make a difference in the life of a child with your monthly donation. Your support can provide crisis intervention for a runaway teen, play therapy supplies for a child in counseling, or support six months of services for an at-risk family. <a href="http://onehopeunited.org/donate/">Make a monthly donation</a>.<br />
<br /><br />

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">

<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/wish-list-button.gif" style="margin-top:-10px;margin-bottom:10px;">
<br />
Our needs range from Band-Aids to buildings! Please check our <a href="http://new.onehopeunited.org/get-involved/get-involved-in-northern/northern-region-wish-list/">Wish Lists</a>. For more information or to arrange delivery of your donations, please contact:
 <br /><br />
<span class="graytext">For Chicago and Cook County:</span><br />
     	Jenaeth Markaj<br />
     	312-949-4001<br />
     	jmarkaj@onehopeunited.org
 <br /><br />
<span class="graytext">For all other counties:</span><br />
     	Marilee LaMattina<br />
     	847-245-6553<br />
     	mlamattina@onehopeunited.org
</div>
</div>

</div>

				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content" style="width:620px;float:right;margin-right:-70px;margin-top:-100px;">


		<?php the_content(); ?>

		
		
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>