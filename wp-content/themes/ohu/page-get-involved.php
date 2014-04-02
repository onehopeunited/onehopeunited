<?php
/*
Template Name: Get Involved Page
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
<li><a href="http://onehopeunited.org/get-involved/get-involved-in-florida/"> Florida Region</a></li>
</ul>

<a href="http://onehopeunited.org/volunteer-opportunities/" style="color:gray;font-weight:normal;font-size:13px;">VOLUNTEER OPPORTUNITIES</a> <img src="http://onehopeunited.org/wp-content/themes/ohu/images/star.jpg" align="absmiddle">
<br />

<a href="http://onehopeunited.org/annualreport12/" target="blank" style="color:gray;font-weight:normal;">ANNUAL REPORT</a> <img src="http://onehopeunited.org/wp-content/themes/ohu/images/pdf-icon.gif" align="absmiddle">
<br />
<a href="http://onehopeunited.org/get-involved/donor-bill-of-rights/" target="blank" style="color:gray;font-weight:normal;">DONOR BILL OF RIGHTS</a>
<br />
<a href="http://onehopeunited.org/calendar/">
    <img src="<?php bloginfo('template_directory'); ?>/images/goblue/calendar-of-events-homepage.jpg" alt="Calendar of events" style="width:220px;margin-top:15px;" />
</a>
<br />
<div style="text-align:center;">
    <span class="redtext">Click the button below to create your own event!</span><br />
    <br />
    <a href="http://onehopeunited.org/wp-content/uploads/2014/03/OHU_GoBlue_CampaignKit_2014.pdf">
        <img src="<?php bloginfo('template_directory'); ?>/images/goblue/download-kit-01.jpg" alt="Campaign Kit">
    </a>
</div>




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
<li><a href="http://www.onehopeunited.org/downloads/pdfs/case_for_support_OHU.pdf">Agency-Wide</a></li>
<li><a href="http://www.onehopeunited.org/downloads/pdfs/case_for_support_NR.pdf">Northern Illinois / Wisonsin Region</a></li>
<li><a href="http://onehopeunited.org/downloads/pdfs/OHU_HUD_Case-for-Support.pdf">Central & Southern Illinois / Missouri Region</a></li>
<li><a href="http://www.onehopeunited.org/downloads/pdfs/case_for_support_FR.pdf">Florida Region</a></li>
</ul>

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">

<img src="http://onehopeunited.org/wp-content/themes/ohu/images/get-involved.gif" style="margin-top:-10px;margin-bottom:20px;">
<br />
<b>Here are some ideas for getting involved with One Hope United in your community. Whether by donating, coming to an upcoming event or volunteering, there are so many ways to help!</b>
<br /><br />
<a href="https://donate.onehopeunited.org/sslpage.aspx?pid=298" target="_blank"><span class="redtext">DONATE</span></a><br />
You can contribute to fundraising campaigns in your home region on a one-time or monthly basis. Every little bit helps! If you'd prefer to help out with goods rather than money, consider hosting a drive (school supplies, toys around the holidays, etc.) through your school, workplace, house of worship or community organization. <a href="https://donate.onehopeunited.org/sslpage.aspx?pid=298" target="_blank">Donate now</a>.
<br /><br />
<span class="redtext">VOLUNTEER</span><br />
Our tireless, passionate volunteers are the beating heart of One Hope United and provide a wide variety of services, from building a new garden, to helping with events, to providing pro-bono music or art lessons or bringing in dogs for pet therapy. Church groups, schools and businesses with a strong commitment to their communities have all been fantastic supporters of kids in our programs. Choose your region for more information:
<br /><br />
<a href="http://onehopeunited.org/volunteer-opportunities/" style="color:gray;font-weight:normal;font-size:13px;text-decoration:underline;">Volunteer Opportunities</a> <img src="http://onehopeunited.org/wp-content/themes/ohu/images/star.jpg" align="absmiddle">

<br /><br />
<span class="redtext">ATTEND OR HOST AN EVENT</span><br />
Not only are events a great way to raise funds and awareness about One Hope United, but they're an opportunity to get in touch with other service-minded folks in fellowship and fun. Whether it's a trivia night in Springfield, a darts tournament in Tampa or a time-travel fashion show in Chicago, there's an event for everyone. Find one in your region today or get some friends and host your own! Get started today! Choose a region where you wish to get involved.

</div>

</div>

				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content1" style="margin-top:-20px;">


		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>