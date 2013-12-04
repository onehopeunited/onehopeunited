<?php
/*
Template Name: About: Florida Region
*/
?>

<?php get_header(); ?>

		<div id="primary1">
			<div id="content1" role="main">

<div class="ohu_sidebar1">

<span class="redtext">OUR REGIONS</span>
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/about/northern-illinois-wisconsin/">Northern Illinois / Wisconsin</a></li>
<li><a href="http://onehopeunited.org/about/central-southern-illinois-missouri/">Central & Southern Illinois / Missouri</a></li>
<li><a href="http://onehopeunited.org/about/florida/">Florida Region</a></li>
</ul>
<span class="redtext">FLORIDA REGION</span>
<ul class="sidebar-links">
<li><a href="http://onehopeunited.org/about/florida/">About Us</a></li>
<li><a href="http://onehopeunited.org/services/services-in-central-florida/">Services</a></li>
<li><a href="http://onehopeunited.org/careers/florida/">Careers</a></li>
<li><a href="http://onehopeunited.org/blue-ribbon-month/">Get Involved</a></li>
<li><a href="http://onehopeunited.org/news/florida/">News</a></li>
<li><a href="http://onehopeunited.org/results/florida-results/">Results</a></li>
</ul>

<span class="redtext">FLORIDA REGION ADVISORY BOARD</span><br /><br />
<b>Thomas J. Quarles, Chair</b><br />
Shareholder, Stearns Weaver Miller Weissler Alhadeff & Sitterson P.A.<br /><br />

<b>Justin Bakes</b><br />
Chief Executive Officer,<br /> 1st Merchant Funding<br /><br />

<b>Crystal Knight</b><br />
Vestal & Wiler, CPA<br /><br />

<b>Barb Mucha</b><br />
LPGA and Legends Golf Touring Professional 
<br /><br />
<b>Sandra Osteen</b><br />
CEO, Critical Connections Consulting<br /><br />

<b>Brad Partridge</b><br />
Manager, Corporate Partnerships Universal Orlando
<br /><br />
<b>Deborah Reed</b><br />
Deloitte Consulting, Senior Consultant, Strategy Practice and Business Development<br /><br />

<span class="redtext">SENIOR REGIONAL LEADERSHIP</span><br /><br />

<b>Barbara D. Moss</b><br />
Executive Director<br /><br />

<b>Neika Berry</b><br />
Senior Vice President<br /><br />

<b>Lasonja Houston</b><br />
Director of Programs<br /><br />

<b>Brigette Brown</b><br />
Director of Programs<br /><br />

<b>Michelle Ramirez</b><br />
Director of Programs<br /><br />

<b>Jolene Palazzo</b><br />
Business Manager<br /><br />

<b>Jeffrey Honaker</b><br />
Director CQIR<br /><br />
 
<b>Maria Weber</b><br />
Director Community Relations<br /><br />
 
<b>Nora Larsen</b><br />
Human Resource Manager

</div>



				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					
<div class="entry-content1" style="margin-top:0px;">

<div style="border-top:1px solid #ccc;padding-top:5px;border-bottom:1px solid #ccc;padding-bottom:5px;margin-bottom:10px;">
<span class="redtext" style="font-size:0.8em;font-weight:normal;">ABOUT US:</span><br />
<span style="font-size:1.3em;font-weight:normal;"><?php meta('job-listing-state1'); ?><?php the_title(); ?></span><br />
<span class="graytext" style="font-weight:normal;"><a href="http://onehopeunited.org/about/">About Us</a> > <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>

<div class="yellowbutton-nohover" style="width:600px;text-align:left;font-weight:bold;margin-top:20px;line-height:1.5em;margin-bottom:20px;">
<?php meta('region-description'); ?>
</div>

<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/success-story.gif" style="margin-top:-10px;">
</div>
<table style="width:600px;margin-bottom:20px;min-height:120px;margin-left:-35px;">
<tr>
<?php
global $post;
$args = array( 'numberposts' => 3, 'offset'=> 0, 'category' => 11 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<td style="vertical-align:top;"><div class="news-stub">
<a href="<?php the_permalink(); ?>">

<?php if ( get_post_meta($post->ID, 'thumbnail', true) ) { ?>
<img src="<?php echo get_post_meta($post->ID, 'thumbnail', true) ?>" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">
<?php } else { ?>
<?php
if ( in_category('everyday-heroes') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/everyday-heroes-default.gif" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
} elseif ( in_category('in-the-news') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/in-the-news-default.gif" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
} elseif ( in_category('press-releases') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/press-release-default.gif" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
} elseif ( in_category('stories-of-hope') ) {
	echo '<img src="http://onehopeunited.org/wp-content/themes/ohu/images/stories-of-hope-default.gif" style="width:123px;height:81px;margin-bottom:0px;padding:5px;border:1px solid #ccc;">';
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
<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/history.gif" style="margin-top:-10px;">
 </div>
  <?php rewind_posts(); ?>
 
  <?php while (have_posts()) : the_post(); ?>
    <!-- Do stuff... -->
		
<?php the_content(); ?>		


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>