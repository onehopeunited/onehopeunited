<?php

/*

Template Name: About: Northern Region

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

<span class="redtext">NORTHERN ILLINOIS / WISCONSIN</span>

<ul class="sidebar-links">

<li><a href="http://onehopeunited.org/about/northern-illinois-wisconsin/">About Us</a></li>

<li><a href="http://onehopeunited.org/services/services-in-northern-illinois-wisconsin/">Services</a></li>

<li><a href="http://onehopeunited.org/careers/northern/">Careers</a></li>

<li><a href="http://onehopeunited.org/blue-ribbon-month/">Get Involved</a></li>

<li><a href="http://onehopeunited.org/downloads/pdfs/case_for_support_NR.pdf">Case for Support</a></li>

<li><a href="http://onehopeunited.org/news/northern-illinois-wisconsin/">News</a></li>

<li><a href="http://onehopeunited.org/results/northern-results/">Results</a></li>

<li><a href="http://onehopeunited.org/services/early-care-and-education/">Early Childhood Centers</a></li>

</ul>



<span class="redtext">NORTHERN ILLINOIS / WISCONSIN REGION ADVISORY BOARD</span><br /><br />

<b>Howard Schnitzer, Chair</b><br />

President, A&S Auto Sales<br /><br />



<b>Jon Bilton, Vice Chair</b><br />

The John Buck Company<br /><br />



<b>Paul Earle, Treasurer</b><br />

Senior Director, Spencer Stuart<br /><br />



<b>Theresa Dear</b><br />

HR 4 Non-Profits<br /><br />



<b>Ermit Finch</b><br />

Partner, Real Estate (Ret.)<br /><br />



<b>Patrick Firman</b><br />

Chief of Corrections, McHenry County Sheriff's Office<br /><br />



<b>Christopher Hoffman</b><br />

Assurance Partner, PricewaterhouseCoopers LLP<br /><br />



<b>Dan Horsley,</b><br />

Engagement Manager, L.E.K. Consulting<br /><br />



<b>Cindy Lusignan</b><br />

SVP, Marsh USA<br /><br />



<b>John Mauck</b><br />

Partner, Mauck & Baker<br /><br />



<b>Scott Moeller</b><br />

Director, Quality Engineering, Baxter Healthcare<br /><br />



<b>Kim Montgomery</b><br />

Client Team Manager, The Boston Consulting Group<br /><br />



<b>Dr. Donna Petras</b><br />

Professor Emerita, University of Illinois at Chicago<br /><br />



<b>Bradley A. Pierce</b><br />

Vice President, US Bank Food Industries<br /><br />



<b>Pastor Linda Requilez</b><br />

Pastor, Rivers of Living Water Christian Center<br /><br />



<b>Adam Ressner</b><br />

Senior Sales Representative, Cigna Group Insurance<br /><br />



<b>Clarke C. Robinson</b><br />

Retired Attorney<br /><br />



<b>Mitch Rogers</b><br />

Partner, Laurus Strategies<br /><br />



<b>Toni Sandor Smith</b><br />

SVP, Spencer Stuart (Ret.)<br /><br />



<b>Edgar Santiago</b><br />

Director of Finance, Moody Publishers<br /><br />



<b>Emily Selbe</b><br />

Marketing and Communications Consultant<br /><br />



<b>Jan Turner</b><br />

Vice President, Cotter Consulting Inc.<br /><br />



<b>William R. Wallin</b><br />

Retired Attorney, Illinois Department of Human Services<br /><br />



<b>Jonathan Ziebarth</b><br />

Assistant Vice President, Golub Capital<br /><br />

</small>

<span class="redtext">SENIOR REGIONAL LEADERSHIP</span><br /><br />

<b>Mark McHugh</b><br />

Executive Director<br /><br />



<b>David Fox</b><br />

Associate Executive Director<br /><br />



<b>Beth Lakier</b><br />

Associate Executive Director<br /><br />



<b>Ruann Barack</b><br />

Senior Vice President of Continuous Quality Improvement<br /><br />



<b>Josie Disterhoft</b><br />

Senior Vice President<br /><br />



<b>Laura Franz</b><br />

Senior Vice President<br /><br />



<b>Valerie Searcy-Cox</b><br />

Director of Human Resources<br /><br />



<b>Joyce Heneberry</b><br />

Senior Vice President of Development<br /><br />



<b>Tim Snowden</b><br />

Senior Vice President<br /><br />



<b>Betty Winters</b><br />

Business Manager<br /><br />







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



<div style="border-top:1px solid #ccc;padding-top:10px;margin-top:10px;">

<img src="http://onehopeunited.org/wp-content/themes/ohu/images/success-story.gif" style="margin-top:-10px;">

</div>

<table style="width:600px;margin-bottom:20px;min-height:120px;margin-left:-35px;">

<tr>

<?php

global $post;

$args = array( 'numberposts' => 3, 'offset'=> 0, 'category' => 9 );

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