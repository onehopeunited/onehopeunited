<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

		<div id="primary">
			



<div id="homepage-main-box">

<?php
$post_id = 29;
$queried_post = get_post($post_id);
?>

<img src="<?php echo get_post_meta($queried_post->ID, 'thumbnail', true) ?>" style="float:left;">
<div style="padding:20px;width:420px;float:right;">
<?php echo $queried_post->post_content; ?>
</div>

</div>
			
<div id="latest-news-box">
<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/latest-news.jpg" style="float:left;">

<table style="width:600px;margin-bottom:20px;min-height:120px;margin-left:-5px;">
<tr>
<?php
global $post;
$args = array( 'numberposts' => 5, 'offset'=> 0, 'category' => 4 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<td style="vertical-align:top;padding-left:30px;" valign="baseline">
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
	</td>
<?php endforeach; ?>
</tr>
</table>


</div><!-- latest news box-->
		
<div class="bottom-container">
		
		<div class="bottom-column">
		
		<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/find-services.gif" alt="Find Services" style="margin-top:-20px;">
		
<div style="margin-left:-20px;">
<img id="Image-Maps_8201208131652306" src="http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif" usemap="#Image-Maps_8201208131652306" border="0" width="250" height="324" alt="" />
<map id="_Image-Maps_8201208131652306" name="Image-Maps_8201208131652306">
<area shape="rect" coords="0,0,250,124" href="http://new.onehopeunited.org/services/services-in-northern-illinois-wisconsin/" alt="" title=""   onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map-red.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  /> 

<area shape="rect" coords="0,125,250,230" href="http://new.onehopeunited.org/services/services-in-central-southern-illinois-missouri/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map-yellow.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  />

<area shape="rect" coords="0,231,250,324" href="http://new.onehopeunited.org/services/services-in-central-florida/" alt="" title="" onMouseOver="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map-blue.gif';" onMouseOut="if(document.images) document.getElementById('Image-Maps_8201208131652306').src= 'http://new.onehopeunited.org/wp-content/themes/ohu/images/small-map.gif';"  />
</map>

</map>
</div>

		
		</div><!-- bottom column -->
		
				<div class="bottom-column">
		
		<a href="http://new.onehopeunited.org/results/" alt="Results" title="Results"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/our-impact.gif" alt="Our Impact" style="margin-top:-20px;"></a>

		

		
		</div><!-- bottom column -->
				
				<div class="bottom-column-end">
	
	<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/ways-to-help.gif" alt="Ways to Help" style="margin-top:-0px;">
	
		<BR /><BR />
		<span class="redtext">FOSTER A CHILD:</span>
				<br /><br />
				<a href="http://new.onehopeunited.org/services/foster-care/" class="graytext" style="font-weight:normal">HELP CHANGE THE LIFE OF A CHILD</a> <a href="http://new.onehopeunited.org/services/foster-care/"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/red-button.gif" align="absmiddle"></a>
				<br />
<br /><br />				
				<hr style="color:#cccwidth:305px;margin-left:-20px;margin-bottom:0px;">

				
					<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/get-involved.gif" alt="Ways to Help">
				<br /><br />
				<span class="redtext">BY LOCATION:</SPAN><br /><br />
<a href="http://new.onehopeunited.org/get-involved/get-involved-in-northern/" class="graytext" style="font-weight:normal">NORTHERN ILLINOIS / WISCONSIN</a> <a href="http://new.onehopeunited.org/get-involved/get-involved-in-northern/"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/red-button.gif" align="absmiddle"></a>
<br /><br />
<a href="http://new.onehopeunited.org/get-involved/get-involved-in-hudelson/" class="graytext" style="font-weight:normal">CENTRAL & SOUTHERN ILLINOIS / MISSOURI</a> <a href="http://new.onehopeunited.org/get-involved/get-involved-in-hudelson/"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/red-button.gif" align="absmiddle"></a>
<br /><br />
<a href="http://new.onehopeunited.org/get-involved/get-involved-in-florida/" class="graytext" style="font-weight:normal">CENTRAL FLORIDA REGION</a> <a href="http://new.onehopeunited.org/get-involved/get-involved-in-florida/"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/red-button.gif" align="absmiddle"></a>
				
				
		</div><!-- bottom column -->
		
</div><!-- bottom container -->



		</div><!-- #primary -->


<?php get_footer(); ?>