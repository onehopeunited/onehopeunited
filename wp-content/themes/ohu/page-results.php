<?php
/*
Template Name: Results Page
*/
?>

<?php get_header(); ?>

		<div id="primary1">
			<div id="content1" role="main">

<div class="ohu_sidebar1">
<span style="font-weight:bold;text-transform:uppercase;color:#e41c39;"><?php the_title(); ?></span>



<br /><br />
<span class="graytext">LOCATIONS</span>
<br />
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/results/northern-results/">Northern Illinois / Wisconsin</a></li>
<li><a href="http://onehopeunited.org/results/hudelson-results/">Central & Southern Illinois / Missouri</a></li>
<li><a href="http://onehopeunited.org/results/florida-results/">Florida Region</a></li>
</ul>
<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">
<span class="redtext"><b>FIND RESULTS IN YOUR AREA</b></span>
<br /><br />

<div style="margin-left:-20px;margin-bottom:15px;">
<img id="Image-Maps_8201208131652306" src="http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif" usemap="#Image-Maps_8201208131652306" border="0" width="250" height="324" alt="" />
<map id="_Image-Maps_8201208131652306" name="Image-Maps_8201208131652306">
<area shape="rect" coords="0,0,250,124" href="http://onehopeunited.org/results/northern-results/" alt="" title=""   onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-red-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif';"  /> 

<area shape="rect" coords="0,125,250,230" href="http://onehopeunited.org/results/hudelson-results/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-yellow-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif';"  />

<area shape="rect" coords="0,231,250,324" href="http://onehopeunited.org/results/florida-results/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-blue-new.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://onehopeunited.org/wp-content/themes/ohu/images/small-map-new.gif';"  />
</map>

</map>
</div>

<span class="redtext">PUBLICATIONS & ARTICLES</span>
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/downloads/pdfs/Social-Impact-News_2013-01.pdf">Social Impact Newsletter</a></li>
<li><a href="http://onehopeunited.org/downloads/pdfs/OHU_CQIRT_Teambuilding.pdf">Team Building</a></li>
<li><a href="http://onehopeunited.org/downloads/pdfs/OHU_CQIRT_Trauma.pdf">Trauma and the Imapct on Attachment</a></li>
<li><a href="http://onehopeunited.org/downloads/pdfs/OHU_CQIRT_Preparedness.pdf">Emergency Preparedness</a></li>
<li><a href="http://onehopeunited.org/downloads/pdfs/OHU_CQIRT_Strengthening.pdf">Strengthening Families</a></li>
<li><a href="http://onehopeunited.org/downloads/pdfs/OHU_CQIRT_Employee.pdf">Employee Assistance Program</a></li>
<li><a href="http://onehopeunited.org/downloads/pdfs/OHU_CQIRT_Medication.pdf">Psychotropic Medication Effects on Children</a></li>
</ul>

<span class="redtext">REPORTS</span>
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/results/agency-reports/">Agency Reports</a></li></ul>
</div>
</div>

				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content1">

		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>