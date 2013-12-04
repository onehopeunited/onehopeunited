<?php
/*
Template Name: Get Involved Page
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
<li><a href="http://www2.guidestar.org/organizations/33-1051751/one-hope-united.aspx">Federation</a></li>
<li><a href="http://www.guidestar.org/organizations/36-2181967/central-baptist-childrens-home.aspx">Northern Illinois / Wisconsin Region</a></li>
<li><a href="http://www2.guidestar.org/organizations/37-0697157/one-hope-united-hudelson-region.aspx" target="_blank">Central & Southern Illinois / Missouri Region</a></li>
<li><a href="http://www.guidestar.org/organizations/54-2082539/one-hope-united-florida-region.aspx" target="_blank">Florida Region</a></li>
</ul>
<b>CASE FOR SUPPORT</B>
<ul class="sidebar-links">
<li><a href="http://www.onehopeunited.org/make_a_gift/case_for_support_OHU.pdf">Agency-Wide</a></li>
<li><a href="http://www.onehopeunited.org/make_a_gift/case_for_support_NR.pdf">Northern Illinois / Wisonsin Region</a></li>
<li><a href="http://www.onehopeunited.org/make_a_gift/case_for_support_HUD.pdf">Central & Southern Illinois / Missouri Region</a></li>
<li><a href="http://www.onehopeunited.org/make_a_gift/case_for_support_FR.pdf">Florida Region</a></li>
</ul>

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">

<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/get-involved.gif" style="margin-top:-10px;margin-bottom:20px;">
<br />
<b>Here are some ideas for getting involved with One Hope United in your community. Whether by donating, coming to an upcoming event or volunteering, there are so many ways to help!</b>
<br /><br />
<span class="redtext">DONATE</span><br />
You can contribute to fundraising campaigns in your home region on a one-time or monthly basis. Every little bit helps! If you'd prefer to help out with goods rather than money, consider hosting a drive (school supplies, toys around the holidays, etc.) through your school, workplace, house of worship or community organization.
<br /><br />
<span class="redtext">VOLUNTEER</span><br />
Our tireless, passionate volunteers are the beating heart of One Hope United and provide a wide variety of services, from building a new garden, to helping with events, to providing pro-bono music or art lessons or bringing in dogs for pet therapy. Church groups, schools and businesses with a strong commitment to their communities have all been fantastic supporters of kids in our programs. Choose your region for more information.
<br /><br />
<span class="redtext">ATTEND OR HOST AN EVENT</span><br />
Not only are events a great way to raise funds and awareness about One Hope United, but they're an opportunity to get in touch with other service-minded folks in fellowship and fun. Whether it's a trivia night in Springfield, a darts tournament in Tampa or a time-travel fashion show in Chicago, there's an event for everyone. Find one in your region today or get some friends and host your own! Get started today! Choose a region where you wish to get involved.

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