<?php
/*
Template Name: Get Involved Page: Northern
*/
?>

<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

<div style="float:left;border:1px solid #757575;width:220px;margin-left:-70px;padding:20px;line-height:1.3em;color:#757575;font-size:0.9em;margin-bottom:20px;">
<span style="font-weight:bold;text-transform:uppercase;color:#e41c39;"><?php the_title(); ?></span>

<br /><br />
<b>LOCATIONS</b>
<ul class="sidebar-links">
<li><a href="http://new.onehopeunited.org/get-involved/get-involved-in-northern/">Northern Illinois / Wisconsin</a></li>
<li><a href="http://new.onehopeunited.org/get-involved/get-involved-in-hudelson/">Central & Southern Illinois / Missouri</a></li>
<li><a href="http://new.onehopeunited.org/get-involved/get-involved-in-florida/">Central Florida Region</a></li>
</ul>
<a href="http://new.onehopeunited.org/downloads/pdfs/OHU_2011_annual_report.pdf" target="blank" style="color:gray;font-weight:normal;">ANNUAL REPORT</a> <img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/pdf-icon.gif" align="absmiddle">
<br />
<a href="http://new.onehopeunited.org/downloads/pdfs/Donor_Bill_of_Rights.pdf" target="blank" style="color:gray;font-weight:normal;">DONORS BILL OF RIGHTS</a> <img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/pdf-icon.gif" align="absmiddle">

<br /><br />
<b>GUIDESTAR</b>
<ul class="sidebar-links">
<li><a href="http://www.guidestar.org/organizations/36-2181967/central-baptist-childrens-home.aspx">Northern Illinois / Wisconsin</a></li>
</ul>

<B>CASE FOR SUPPORT</B>
<ul class="sidebar-links">
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
Make a difference in the life of a child with your monthly donation. Your support can provide crisis intervention for a runaway teen, play therapy supplies for a child in counseling, or support six months of services for an at-risk family. <a href="http://onehopeunited.org/donate/">Make a monthly donation</a>.<br /><br />
<span class="redtext">Planned Giving</span>
Join the <a href="http://new.onehopeunited.org/get-involved/get-involved-in-northern/planned-giving/">Scofield-Gibbs Society</a> and establish a gift through bequest, trust or other planned arrangement.
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

<hr style="margin-bottom:0px;">
		<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/volunteer-button.gif" style="margin-bottom:10px;">
		
				<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/events-button.gif" style="margin-bottom:10px;float:right;margin-right:170px;">
		<table>
		<tr>
		<td width="300">
		Giving your time, energy and creativity can make an amazing difference!
There are many ways to get involved. Volunteer as an individual or with a group. Get your school, company or place of worship involved.
 <br /><br />
We'd love to match your passion to our mission to offer you the best volunteer experience possible! Please contact us to learn more.
  <br /><br />
<span class="redtext">For Chicago and Cook County, contact:</span><br />
     	Jenaeth Markaj<br />
     	(312) 949-4001<br />
     	jmarkaj@onehopeunited.org
  <br /><br />
<span class="redtext">For all other counties, contact:</span><br />
     	Marilee LaMattina<br />
     	(847) 245-6553<br />
     	mlamattina@onehopeunited.org
     	</td>
		<td>
		
		
		<?php
global $post;
$args = array( 'numberposts' => 5, 'offset'=> 0, 'category' => 7 );
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