<?php
/*
Template Name: Get Involved Page: Florida Level C
*/
?>

<?php get_header(); ?>

		<div id="primary1">
			<div id="content1" role="main">

<div class="ohu_sidebar1">
<span style="font-weight:bold;text-transform:uppercase;color:#e41c39;"><?php the_title(); ?></span>

<br /><br />
<b>LOCATIONS</b>
<ul>
<li><a href="http://onehopeunited.org/get-involved/get-involved-in-northern/">Northern Illinois / Wisconsin</a></li>
<li><a href="http://onehopeunited.org/get-involved/get-involved-in-hudelson/">Central & Southern Illinois / Missouri</a></li>
<li><a href="http://onehopeunited.org/get-involved/get-involved-in-florida/">Florida Region</a></li>
</ul>
<a href="http://onehopeunited.org/volunteer-opportunities/" style="color:gray;font-weight:normal;font-size:13px;">VOLUNTEER OPPORTUNITIES</a> <img src="http://onehopeunited.org/wp-content/themes/ohu/images/star.jpg" align="absmiddle">
<br />
<a href="http://onehopeunited.org/annualreport12/" target="blank" style="color:gray;font-weight:normal;">ANNUAL REPORT</a> <img src="http://onehopeunited.org/wp-content/themes/ohu/images/pdf-icon.gif" align="absmiddle">
<br />
<a href="http://onehopeunited.org/get-involved/donor-bill-of-rights/" target="blank" style="color:gray;font-weight:normal;">DONOR BILL OF RIGHTS</a>
<br />
<a href="http://onehopeunited.org/blue-ribbon-month/"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/2013_BRM_web_300x250.jpg" style="width:220px;height:184px;margin-top:15px;"></a>
<br /><br />
<b>GUIDESTAR</b>
<ul>
<li><a href="http://www2.guidestar.org/organizations/37-0697157/one-hope-united-hudelson-region.aspx" target="_blank">Central & Southern Illinois / Missouri</a></li>
</ul>

<B>CASE FOR SUPPORT</B>
<ul>
<li><a href="http://onehopeunited.org/downloads/pdfs/case_for_support_FR.pdf">Florida Region</a></li>
</ul>

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">

<a href="https://donate.onehopeunited.org/sslpage.aspx?pid=298" target="_blank"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/donate-button.gif" style="margin-top:-10px;margin-bottom:10px;"></a>
<br />
<span class="redtext">Monetary</span><br />
<a href="https://donate.onehopeunited.org/sslpage.aspx?pid=298" target="_blank">Make a One-Time donation</a>
<br /><br />
<span class="redtext">Monthly Donation</span><br />
Make a difference in the life of a child with your monthly donation. Your support can provide crisis intervention for a runaway teen, play therapy supplies for a child in counseling, or support six months of services for an at-risk family. <a href="https://donate.onehopeunited.org/sslpage.aspx?pid=298" target="_blank">Make a monthly donation</a>.<br />
<br /><br />

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">

<img src="http://onehopeunited.org/wp-content/themes/ohu/images/wish-list-button.gif" style="margin-top:-10px;margin-bottom:10px;">
<br />
Our needs range from Band-Aids to buildings! Please check our <a href="http://onehopeunited.org/get-involved/get-involved-in-florida/florida-region-wish-list/">Wish Lists</a>. For more information or to arrange delivery of your donations, please contact:
 <br /><br />
Maria Weber<br />
407-379-2900<br />
<a href="mailto:mweber@onehopeunited.org">mweber@onehopeunited.org</a>
</div>
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