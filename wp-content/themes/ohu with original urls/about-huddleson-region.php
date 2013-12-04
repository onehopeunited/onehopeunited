<?php
/*
Template Name: About: Hudleson Region
*/
?>

<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

<div style="float:left;border:1px solid #757575;width:220px;margin-left:-70px;padding:20px;line-height:1.3em;color:#757575;font-size:0.9em;margin-bottom:30px;">

<span class="redtext">OUR REGIONS</span>
<ul class="sidebar-links">
<li><a href="http://new.onehopeunited.org/about/northern-illinois-wisconsin/">Northern Illinois / Wisconsin</a></li>
<li><a href="http://new.onehopeunited.org/about/central-southern-illinois-missouri/">Central & Southern Illinois / Missouri</a></li>
<li><a href="http://new.onehopeunited.org/about/florida/">Central Florida Region</a></li>
</ul>

<span class="redtext">CENTRAL & SOUTHERN ILLINOIS / MISSOURI</span>
<ul class="sidebar-links">
<li><a href="http://new.onehopeunited.org/about/central-southern-illinois-missouri/">About Us</a></li>
<li><a href="http://new.onehopeunited.org/services/services-in-central-southern-illinois-missouri/">Services</a></li>
<li><a href="http://new.onehopeunited.org/careers/hudelson/">Careers</a></li>
<li><a href="http://new.onehopeunited.org/get-involved/get-involved-in-hudelson/">Get Involved</a></li>
<li><a href="http://new.onehopeunited.org/news/central-southern-illinois-wisconsin/">News</a></li>
<li><a href="http://new.onehopeunited.org/results/hudelson-results/">Results</a></li>
</ul>

<span class="redtext">CENTRAL & SOUTHERN ILLINOIS / MISSOURI REGION BOARD OF DIRECTORS</span><br /><br />

<b>William Beck, Chair</b><br />
William B. Beck Auction and Realty<br /><br />

<b>Patti J. Hahn</b><br />
Marion County Treasurer<br /><br />

<b>Drew Long</b><br />
CPA<br /><br />

<b>Judi Mills</b><br />
Special Needs Individual Aide, Ball- Chatham School District<br /><br />

<b>Dr. Walter Milton, Jr.</b><br />
Superintendent, Springfield Public Schools District<br /><br />

<b>Ronald Moorman</b><br />
Pastor, Retired<br /><br />

<b>Rev. Patrick Murphy</b><br />
Pastor, Retired<br /><br />

<b>James R. Nelson, M.S.</b><br />
Executive Director, Illinois Public Health Association<br /><br />

<b>Linda Schneider</b><br />
Emergency Medicine Residency Coordinator, SIU School of Medicine<br /><br />

<b>Greg Sprehe</b><br />
President, Com-Pac International<br /><br />

<b>Rev. Dr. T. Wayne Turner</b><br />
Chaplain, Hospice and Palliative Care of Southern Indiana<br /><br />

<b>Frederick Wear</b><br />
Engineer, The Boeing Company Senior Regional Leadership<br /><br />

<span class="redtext">SENIOR REGIONAL LEADERSHIP</span><br /><br />

<b>Patricia Griffith</b><br />
Executive Director<br /><br />

<b>Ann Pearcy</b><br />
Senior Vice President<br /><br />

<b>Jayme Godoyo</b><br />
Development Officer<br /><br />

<b>Rachel Gubbins</b><br />
Director of Programs<br /><br />

<b>Becky Newcomer</b><br />
Director of Programs<br /><br />

<b>Nikki Quandt</b><br />
Director of Programs<br /><br />

<b>Shannon Stokes</b><br />
Director of Programs

<b>Melissa Webster</b><br />
Director of Programs
</div>



				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content" style="width:620px;float:right;margin-right:-70px;margin-top:-80px;">

<div style="border-top:1px solid #ccc;padding-top:5px;border-bottom:1px solid #ccc;padding-bottom:5px;margin-bottom:10px;">
<span class="redtext" style="font-size:0.8em;font-weight:normal;">ABOUT US:</span><br />
<span style="font-size:1.3em;font-weight:normal;"><?php meta('job-listing-state1'); ?><?php the_title(); ?></span><br />
<span class="graytext" style="font-weight:normal;"><a href="http://new.onehopeunited.org/about/">About Us</a> > <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>

<div class="yellowbutton-nohover" style="width:600px;text-align:left;font-weight:bold;margin-top:20px;line-height:1.5em;margin-bottom:20px;">
<?php meta('region-description'); ?>
</div>

<hr><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/success-story.gif" style="margin-top:-25px;">

<table style="width:600px;margin-bottom:20px;min-height:120px;margin-left:-35px;">
<tr>
<?php
global $post;
$args = array( 'numberposts' => 3, 'offset'=> 0, 'category' => 10 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<td style="vertical-align:top;"><div class="news-stub">
<a href="<?php the_permalink(); ?>">


<?php if ( get_post_meta($post->ID, 'thumbnail', true) ) { ?>
<img src="<?php echo get_post_meta($post->ID, 'thumbnail', true) ?>" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">
<?php } else { ?>
<?php
if ( in_category('everyday-heroes') ) {
	echo '<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/everyday-heroes-default.gif" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
} elseif ( in_category('in-the-news') ) {
	echo '<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/in-the-news-default.gif" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
} elseif ( in_category('press-releases') ) {
	echo '<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/press-release-default.gif" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
} elseif ( in_category('stories-of-hope') ) {
	echo '<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/stories-of-hope-default.gif" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
}
?>
<?php } ?>


</a>
	<a href="<?php the_permalink(); ?>" style="font-size:0.9em;"><?php the_title(); ?></a>
	</div></td>
<?php endforeach; ?>
  <?php endwhile; ?>
</tr>
</table>
<hr style="margin-bottom:0px;"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/history.gif">
 
  <?php rewind_posts(); ?>
 
  <?php while (have_posts()) : the_post(); ?>
    <!-- Do stuff... -->
		
<?php the_content(); ?>		


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>