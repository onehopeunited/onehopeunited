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
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/latest-news.jpg" style="float:left;">


<?php
global $post;
$args = array( 'numberposts' => 5, 'offset'=> 0, 'category' => 4 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div class="news-stub">
<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'thumbnail', true) ?>" style="margin-bottom:-5px;"></a>
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</div>
<?php endforeach; ?>

</div><!-- latest news box-->
		
<div class="bottom-container">
		
		<div class="bottom-column">
		
		<img src="http://onehopeunited.org/wp-content/themes/ohu/images/findservices.jpg" alt="Find Services" style="margin-top:-5px;">
		
		<br /><br /><br /><br /><br />
		Linked image map to go here once Arlen gets the HQ graphics from Beth.
		
		</div><!-- bottom column -->
		
				<div class="bottom-column">
		
		<img src="http://onehopeunited.org/wp-content/themes/ohu/images/findevents.jpg" alt="Find Events">

		
		<?php
global $post;
$args = array( 'numberposts' => 5, 'offset'=> 0, 'category' => 5 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>

<table style="margin-top:10px;">
<tr>
<td style="height:50px;width:50px;">
<div class="homepage-calendar-stub-<?php echo get_post_meta($post->ID, 'region', true) ?>">
	<div class="calendar-stub-top"><center><?php echo get_post_meta($post->ID, 'month', true) ?></center></div>
<center><?php echo get_post_meta($post->ID, 'day', true) ?></center>
</div>

	
</td>
<td>
<?php the_title(); ?><br />
<span style="font-size:0.8em;"><a href="<?php the_permalink(); ?>">MORE DETAILS ></a></span>
</td>
</tr>
</table>
	
<?php endforeach; ?>
		
		
		

		
		</div><!-- bottom column -->
		
				<div class="bottom-column">
		
		<img src="http://onehopeunited.org/wp-content/themes/ohu/images/makepledge.jpg" alt="Make a Pledge">
		
		<br /><br /><br /><br /><br />
		Unknown content to go here.
		
		</div><!-- bottom column -->
		
				<div class="bottom-column-end">
		<center>
		<img src="http://onehopeunited.org/wp-content/themes/ohu/images/waystohelp.jpg" alt="Ways to Help">
		
		<img src="http://onehopeunited.org/wp-content/themes/ohu/images/help1.jpg"><br />
		Help Individuals in Need
		
		<img src="http://onehopeunited.org/wp-content/themes/ohu/images/help2.jpg"><br />
		Help Parents Become Great Parents
		
		<img src="http://onehopeunited.org/wp-content/themes/ohu/images/help3.jpg">
		<br />
		Help Children Who Are Vulnerable
		</center>
		</div><!-- bottom column -->
		
</div><!-- bottom container -->



		</div><!-- #primary -->


<?php get_footer(); ?>