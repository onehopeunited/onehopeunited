<?php
/*
Template Name: Get Involved Page: Northern
*/
?>

<?php get_header(); ?>

		<div id="primary1">
			<div id="content1" role="main">

<div class="ohu_sidebar1">
<span style="font-weight:bold;text-transform:uppercase;color:#e41c39;"><?php the_title(); ?></span>

<br /><br />
<b>LOCATIONS</b>
<ul class="sidebar-links">
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
<ul class="sidebar-links">
<li><a href="http://www.guidestar.org/organizations/36-2181967/central-baptist-childrens-home.aspx">Northern Illinois / Wisconsin</a></li>
</ul>

<B>CASE FOR SUPPORT</B>
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/downloads/pdfs/case_for_support_NR.pdf">Northern Illinois / Wisconsin</a></li>
</ul>

<B>NORTHERN REGION WISHLISTS</B>
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/northern-region-wishlist-child-development-centers/">Child Development Centers</a></li>
<li><a href="http://onehopeunited.org/northern-region-wishlist-foster-care/">Foster Care</a></li>
<li><a href="http://onehopeunited.org/northern-region-wishlist-residential-treatment/">Residential Treatment</a></li>
<li><a href="">Therapeutic Day Treatment</a></li>
<li><a href="http://onehopeunited.org/northern-region-wishlist-counseling-programs/">Counseling Programs</a></li>
<li><a href="http://onehopeunited.org/northern-region-wishlist-kindergarten-readiness/">Family Support</a></li>
</ul>
<br />

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">

<a href="https://donate.onehopeunited.org/sslpage.aspx?pid=298"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/donate-button.gif" style="margin-top:-10px;margin-bottom:10px;"></a>
<br />
<span class="redtext">Monetary</span><br />
<a href="https://donate.onehopeunited.org/sslpage.aspx?pid=298" target="_blank">Make a One-Time donation</a>
<br /><br />
<span class="graytext">Contact:</span> <br />
Joyce Heneberry<br />
847-245-6503<br />
<a href="mailto:jheneberry@onehopeunited.org">jheneberry@onehopeunited.org</a>
<br /><br />
<span class="redtext">Monthly Donation</span><br />
Make a difference in the life of a child with your monthly donation. Your support can provide crisis intervention for a runaway teen, play therapy supplies for a child in counseling, or support six months of services for an at-risk family. <a href="https://donate.onehopeunited.org/sslpage.aspx?pid=298">Make a monthly donation</a>.
<br /><br />
<span class="redtext">Planned Giving</span>
Join the <a href="http://onehopeunited.org/get-involved/get-involved-in-northern/planned-giving/">Scofield-Gibbs Society</a> and establish a gift through bequest, trust or other planned arrangement.
</div>

</div>

				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content1">


		<?php the_content(); ?>

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">
		<img src="http://onehopeunited.org/wp-content/themes/ohu/images/volunteer-button.gif" style="margin-top:-10px;margin-bottom:10px;float:left;">
		
				<img src="http://onehopeunited.org/wp-content/themes/ohu/images/events-button.gif" style="margin-top:-10px;margin-bottom:10px;float:right;margin-right:170px;">
				</div>
				
		<table>
		<tr>
		<td width="300" style="vertical-align:top;">
		Giving your time, energy and creativity can make an amazing difference!
There are many ways to get involved. Volunteer as an individual or with a group. Get your school, company or place of worship involved.
 <br /><br />
We'd love to match your passion to our mission to offer you the best volunteer experience possible! Please contact us to learn more.
  <br /><br />
<span class="redtext">For Chicago and Cook County, contact:</span><br />
     	Jenaeth Markaj<br />
     	(312) 949-4001<br />
     	<a href="mailto:jmarkaj@onehopeunited.org">jmarkaj@onehopeunited.org</a>
  <br /><br />
<span class="redtext">For all other counties, contact:</span><br />
     	Marilee LaMattina<br />
     	(847) 245-6553<br />
     	<a href="mailto:mlamattina@onehopeunited.org">mlamattina@onehopeunited.org</a>
     	</td>
		<td>
		
		
		<?php
global $post;
$args = array( 'numberposts' => 3, 'offset'=> 0, 'category' => 7 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>

<table style="margin-top:10px;margin-left:20px;">
<tr>
<td style="width:50px;">
<div class="homepage-calendar-stub-<?php echo get_post_meta($post->ID, 'region', true) ?>">
	<div class="calendar-stub-top"><center><?php echo get_post_meta($post->ID, 'month', true) ?></center></div>
<center><?php echo get_post_meta($post->ID, 'day', true) ?></center>
</div>

	
</td>
<td>
<b><?php the_title(); ?></b><br />

<?php echo get_post_meta($post->ID, 'additional-info', true) ?><br />
<span style="font-size:0.8em;"><a href="<?php the_permalink(); ?>">MORE DETAILS ></a></span>
</td>
</tr>
</table>
	
<?php endforeach; ?>

		
		</td>
		</tr>
		</table>
		

		
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>