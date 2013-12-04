<?php
/*
Template Name: Results Page
*/
?>

<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

<div style="float:left;border:1px solid #757575;width:220px;margin-left:-70px;padding:20px;line-height:1.3em;color:#757575;font-size:0.9em;margin-bottom:30px;">
<span style="font-weight:bold;text-transform:uppercase;color:#e41c39;"><?php the_title(); ?></span>



<br /><br />
<span class="graytext">LOCATIONS</span>
<br />
<ul class="sidebar-links">
<li><a href="http://new.onehopeunited.org/results/northern-results/">Northern Illinois / Wisconsin</a></li>
<li><a href="http://new.onehopeunited.org/results/hudelson-results/">Central & Southern Illinois / Missouri</a></li>
<li><a href="http://new.onehopeunited.org/results/florida-results/">Central Florida Region</a></li>
</ul>
<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">
<span class="redtext"><b>FIND RESULTS IN YOUR AREA</b></span>
<br /><br />

<div style="margin-left:-20px;margin-bottom:15px;">
<img id="Image-Maps_8201208131652306" src="http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif" usemap="#Image-Maps_8201208131652306" border="0" width="250" height="324" alt="" />
<map id="_Image-Maps_8201208131652306" name="Image-Maps_8201208131652306">
<area shape="rect" coords="0,0,250,124" href="http://new.onehopeunited.org/results/northern-results/" alt="" title=""   onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map-red.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  /> 

<area shape="rect" coords="0,125,250,230" href="http://new.onehopeunited.org/results/hudelson-results/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map-yellow.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  />

<area shape="rect" coords="0,231,250,324" href="http://new.onehopeunited.org/results/florida-results/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map-blue.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  />
</map>

</map>
</div>

<span class="redtext">PUBLICATIONS & ARTICLES</span>
<ul class="sidebar-links">
<li><a href="http://new.onehopeunited.org/downloads/pdfs/OHU_CQIRT_Teambuilding.pdf">Team Building</a></li>
<li><a href="http://new.onehopeunited.org/downloads/pdfs/OHU_CQIRT_Trauma.pdf">Trauma and the Imapct on Attachment</a></li>
<li><a href="http://new.onehopeunited.org/downloads/pdfs/OHU_CQIRT_Preparedness.pdf">Emergency Preparedness</a></li>
<li><a href="http://new.onehopeunited.org/downloads/pdfs/OHU_CQIRT_Strengthening.pdf">Strengthening Families</a></li>
<li><a href="http://new.onehopeunited.org/downloads/pdfs/OHU_CQIRT_Employee.pdf">Employee Assistance Program</a></li>
<li><a href="http://new.onehopeunited.org/downloads/pdfs/OHU_CQIRT_Medication.pdf">Psychotropic Medication Effects on Children</a></li>
</ul>

<span class="redtext">REPORTS</span>
<ul class="sidebar-links">
<li><a href="http://new.onehopeunited.org/downloads/pdfs/FY11_CQIR_Annual_Report.pdf">Cross Regional Analysis</a></li>
<li><a href="http://new.onehopeunited.org/downloads/pdfs/FY11_CQIR_Annual_Report_Northern.pdf">Northern Region Analysis</li>
<li><a href="http://new.onehopeunited.org/downloads/pdfs/FY11_CQIR_Annual_Report_Hudelson.pdf">Hudelson Region Analysis</a></li>
<li><a href="http://new.onehopeunited.org/downloads/pdfs/FY11_CQIR_Annual_Report_Florida.pdf">Florida Region Analysis</a></li>
</ul>
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