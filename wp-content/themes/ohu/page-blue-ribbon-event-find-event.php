<?php
/*
Template Name: Blue Ribbon Month Find Event
*/
?>

<?php get_header(); ?>

		<div id="primary1">
			<div id="content1" role="main">

<br /><br />
<a href="http://blueribbonmonth.org"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/back-button.jpg"></a>
<br /><br /><br />
<div style="margin-bottom:-30px;"><center>
<span style="color:#4e8332;font-size:2em;font-weight:bold;">April 2013 Blue Ribbon Month Events</span>
<br /><span style="font-size:1.3em;color:#2f571a;font-weight:bold;">Check back later for 2014 events</span>
		
		</center></div>
				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
					



		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

		
<hr>
<table style="margin-bottom:30px;margin-top:-25px;">

<tr>
<td width="310" style="border-right:1px solid #ccc;padding-top:20px;"><span style="color:#d03b3e;font-size:1.2em;font-weight:bold;">Northern Illinois/Wisconsin Events</span></td>

<td width="300" style="padding-top:20px;border-right:1px solid #ccc;padding-left:30px;padding-right:30px;"><span style="color:#e6a813;font-size:1.2em;font-weight:bold;">Central & Southern Illinois/Missouri Events</span></td>

<td width="290" style="padding-left:30px;padding-top:20px;"><span style="color:#3993c4;font-size:1.2em;font-weight:bold;">Florida Events</span></td>

</tr>

<tr><td width="310" style="padding-top:20px;width:310px;border-right:1px solid #ccc;vertical-align:top;">
<img src="http://onehopeunited.org/wp-content/themes/ohu/images/310.jpg">
<?php
global $post;
$args = array( 'numberposts' => 30, 'offset'=> 0, 'category' => 7 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>

<table style="margin-top:10px;margin-left:20px;" class="<?php echo get_post_meta($post->ID, 'highlight', true) ?>">
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
<td width="300" style="width:300px;border-right:1px solid #ccc;padding-left:30px;padding-right:30px;vertical-align:top;"><img src="http://onehopeunited.org/wp-content/themes/ohu/images/300.jpg">
<?php
global $post;
$args = array( 'numberposts' => 30, 'offset'=> 0, 'category' => 6 );
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
<td width="290" style="width:290px;padding-left:30px;vertical-align:top;">

		<?php
global $post;
$args = array( 'numberposts' => 30, 'offset'=> 0, 'category' => 8 );
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

</td></tr></table>


		</div><!-- #primary -->

<?php get_footer(); ?>