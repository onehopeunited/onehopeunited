<?php
/*
Template Name: Get Involved Page: Hudelson
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
<li><a href="http://www2.guidestar.org/organizations/37-0697157/one-hope-united-hudelson-region.aspx" target="_blank">Central & Southern Illinois / Missouri</a></li>
</ul>

<B>CASE FOR SUPPORT</B>
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/downloads/pdfs/OHU_HUD_Case-for-Support.pdf">Central & Southern Illinois / Missouri</a></li>
</ul>

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">

<a href="https://donate.onehopeunited.org/sslpage.aspx?pid=298" target="_blank"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/donate-button.gif" style="margin-top:-10px;margin-bottom:10px;"></a>
<br />
<span class="redtext">Monetary</span><br />
<a href="https://donate.onehopeunited.org/sslpage.aspx?pid=298" target="_blank">Make a One-Time donation</a>
<br /><br />
<span class="redtext">Monthly Donation</span><br />
Make a difference in the life of a child with your monthly donation. Your support can provide crisis intervention for a runaway teen, play therapy supplies for a child in counseling, or support six months of services for an at-risk family. <a href="https://donate.onehopeunited.org/sslpage.aspx?pid=298" target="_blank">Make a monthly donation</a>.
<br /><br />
<span class="redtext">Planned Giving</span>
Join the <a href="http://onehopeunited.org/get-involved/get-involved-in-hudelson/planned-giving/">Scofield-Gibbs Society</a> and establish a gift through bequest, trust or other planned arrangement.

<br /><br />

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">

<img src="http://onehopeunited.org/wp-content/themes/ohu/images/wish-list-button.gif" style="margin-top:-10px;margin-bottom:10px;">
<br />
Our needs range from Band-Aids to buildings! Please check our <a href="http://onehopeunited.org/get-involved/get-involved-in-hudelson/hudelson-region-wish-list/">Wish Lists</a>. For more information or to arrange delivery of your donations, please contact:
 <br /><br />
Jayme Godoyo<br />
(618) 532-4311<br />
<a href="mailto:jgodoyo@onehopeunited.org">jgodoyo@onehopeunited.org</a>
</div>
</div>

</div>

				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content1" style="margin-top:0px;">


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
We love our volunteers and are thankful for the time they give. If you are interested in a volunteer opportunity, please contact us to learn more.
  <br /><br />
Jayme Godoyo<br />
     	(618) 532-4311<br />
     	<a href="mailto:jgodoyo@onehopeunited.org">jgodoyo@onehopeunited.org</a>
       	</td>
		<td>
		
		
		<?php
global $post;
$args = array( 'numberposts' => 4, 'offset'=> 0, 'category' => 6 );
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
		
		<div style="border-top:1px solid #ccc;height:300px">
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/community-partners.gif" style="margin-top:0px;">

<table border=1>
<tr>
<td>&nbsp;</td>
<td><a href="http://www.uwsci.org/"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/partners-united-way-south-central-il.gif"></a></td>
<td><a href="http://www.effinghamunitedway.org/"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/partners-united-way-effingham.gif"></a></td>
<td><a href="http://www.colesunitedway.org/"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/partners-united-way-coles-county.gif"></a></td>
<td><a href="http://www.springfieldunitedway.org/"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/partners-united-way-central-il.gif"></a></td>
</tr>
</table>

<center><a href="http://varietystl.org/" target="_blank"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/variety.jpg"></a></center>

</div>
		
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>