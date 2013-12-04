<?php
/*
Plugin Name: CodeArt - Google MP3 Player
Plugin URI: http://wordpress.org/extend/plugins/google-mp3-audio-player/
Description: Embedding MP3 audio files using Google MP3 Audio Player.
Version: 1.0.8
Author: CodeArt
Author URI: http://codeart.mk
License: GPL3
*/


/*  Copyright 2012  CodeArt  (email : tomislav [at] codeart.mk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



	// Define AUTH constant
	define('CODEART_PLUGIN', 		true);
	
	
	
	// Define variable constants
	define('CA_PLUGIN_NAME', 		'codeart-google-mp3-player');
	define('CA_PLUGIN_PATH', 		plugin_dir_path(__FILE__) );
	define('CA_PLUGIN_URL',			plugin_dir_url(__FILE__) );
	define('CA_PLUGIN_TITLE', 		'CodeArt - Google MP3 Audio Plyer');
	define('CA_PLUGIN_ADMIN_PAGE', 	'ca-admin-page.php');
	define('CA_PLUGIN_MENU_TITLE', 	'Google MP3 Player');
	
	
	
	
	/*
		Register options
	*/
	function ca_mp3_player_register_options()
	{
		register_setting('ca_mp3_player_option', 'ca_mp3_player_width', 'intval');
		register_setting('ca_mp3_player_option', 'ca_mp3_player_height', 'intval');
		register_setting('ca_mp3_player_option', 'ca_mp3_player_css_class');
		register_setting('ca_mp3_player_option', 'ca_mp3_player_in_single');
		register_setting('ca_mp3_player_option', 'ca_mp3_player_autoplay');
	}



	
	/**
	*	Hook, add submenu into admin area (in settings menu)
	*	Init, Register options
	*/
	if( is_admin() )
	{
		add_action('admin_menu', 'ca_google_audio_player_menu');
		add_action('admin_init', 'ca_mp3_player_register_options');
	}
	
	
	
	
	
	/*****************************************************************************
	*	Start of ca_audio shortcode
	******************************************************************************/
	

	/**
	*	Method to generate embed code
	*	@param string $url The URL of the mp3 audio file
	*	@param integer $width Player width in pixels (Optional) [Default: 500px]
	*	@param integer $height Player height in pixels (Optional) [Default: 27px]
	*	@param string $css_class The class of the div (Optional) [Default: ca_google_mp3_audio_player]
	*	@return string HTML code
	*/
	function ca_google_audio_player_code($url = NULL, $width = 500, $height = 27, $autoplay = true, $css_class = CA_PLUGIN_NAME)
	{
		if( empty($url) ) return 'No File Found';
		
		$width = is_numeric($width) ? $width : 500;
		$height = is_numeric($height) ? $height : 27;
		$css_class = empty($css_class) ? 'ca_google_mp3_audio_player' : $css_class;
		$google_swf_player 	= 'http://prac-gadget.googlecode.com/svn/branches/google-audio-step.swf';
		$size = ' width="' . $width . '" height="' . $height . '"';
		
		$aplay = '';
		$aplay_mob = '';
		if( $autoplay === 'true' )
		{
			$aplay = '&autoPlay=true';
			$aplay_mob = ' autoplay="autoplay"';
		}
		$embed = '<embed type="application/x-shockwave-flash" src="' . $google_swf_player . '" quality="best" flashvars="audioUrl=' . $url . $aplay . '" ' . $size . '></embed>';
		
		global $is_iphone;
		if ( $is_iphone )
		{
			$embed = '
				<audio controls' . $aplay_mob . '>
					<source src="' . $url . '" type="audio/mpeg">
					Your browser does not support the audio element.
				</audio>';
		}
			
		return '<div class="' . $css_class . '">' . $embed . '</div>';
	}
	
	
	
	
	
	/**
	*	Method to handle 'ca_audio' shortcode
	*	@params array $atts An associative array of attributes
	*	@return callback function ca_google_audio_player_code(...)
	*/
	function ca_google_mp3_audio_player_shortcode_handler( $atts )
	{
		
		$in_single = get_option('ca_mp3_player_in_single');
		
		extract( shortcode_atts( array(
			'url' 			=> '',
			'width' 		=> '500',
			'height' 		=> '27',
			'autoplay'			=> false,
			'css_class' 	=> CA_PLUGIN_NAME,
		), $atts ) );
		
		if( is_numeric($in_single) && $in_single === '1' )
		{
			if( is_single() || is_page() )
			{
				var_dump( $autoplay );
				return ca_google_audio_player_code($url, $width, $height, $autoplay, $css_class);
			}
		}
		else
		{
			return ca_google_audio_player_code($url, $width, $height,  $autoplay, $css_class);
		}
	}
	
	
	
	
	/**
	*	Hook, add shorcode 'ca_audio'
	*	@shortcode_name: ca_audio
	*/
	add_action( 'init', 'ca_audio_player_register_shortcodes' );
	function ca_audio_player_register_shortcodes()
	{
		// Register ca_audio shortcode
		add_shortcode( 'ca_audio', 'ca_google_mp3_audio_player_shortcode_handler' );
		
		// Add support for text widget
		add_filter('widget_text', 'do_shortcode');
	}
	
	/*****************************************************************************
	*	End of ca_audio shortcode
	******************************************************************************/



	
	
	
	/*
		Function to get the custom options
	*/
	function ca_get_custom_options()
	{
		$width 		= esc_attr( intval(get_option('ca_mp3_player_width')) );
		$height 	= esc_attr( intval(get_option('ca_mp3_player_height')) );
		$css 		= esc_attr( get_option('ca_mp3_player_css_style') );
		$in_single 	= esc_attr( get_option('ca_mp3_player_in_single') );
		$autoplay	= esc_attr( get_option('ca_mp3_player_autoplay') );
		
		$opts = array(
			'width' 		=> empty($width) ? 500 : $width,
			'height' 		=> empty($height) ? 27 : $height,
			'css_class' 	=> empty($css) ? 'codeart-google-mp3-player' : $css,
			'in_single' 	=> $in_single,
			'autoplay' 	=> $autoplay
		);
		return $opts;
	}
	
	
	
	
	
	/*********************************************
	*	Admin Panel
	*	CodeArt - Google MP3 Audiot Player
	**********************************************/
	
	/**
	*	Method to display the admin (option) page
	*/
	function ca_google_mp3_audio_player_admin_page()
	{
		?>
        
        <div class="wrap">
        
        	<div id="icon-options-general" class="icon32"><br /></div>
            
            <h2><?php echo CA_PLUGIN_TITLE; ?></h2>
            <h3 style="margin-top: 35px;">Google MP3 Player Settings</h3>
            
            <form method="post" action="options.php">
            	<?php
					settings_fields('ca_mp3_player_option');
					
					$opts = ca_get_custom_options();
				?>
				<table class="form-table">
                	
                    <tr valign="top">
                    	<th scope="row">Google MP3 PLayer size</th>
                        <td>
                        	<label for="ca_mp3_player_width">Width</label>
                            <input name="ca_mp3_player_width" type="text" id="ca_mp3_player_width" value="<?php echo $opts['width']; ?>" class="small-text">
                            <span class="description" style="font-style: normal;">px.</span>
                            
                            <label for="ca_mp3_player_height" style="margin-left: 30px;">Height</label>
                            <input name="ca_mp3_player_height" type="text" id="ca_mp3_player_height" value="<?php echo $opts['height']; ?>" class="small-text">
                            <span class="description" style="font-style: normal;">px.</span>
                        </td>
                    </tr>
                    
                    <tr valign="top">
                    	<th scope="row"><label for="ca_mp3_player_css_class">CSS class name</label></th>
                        <td>
                        	<input name="ca_mp3_player_css_class" type="text" id="ca_mp3_player_css_class" value="<?php echo $opts['css_class']; ?>" class="regular-text code">
                        	<span class="description">DIV class name <code><?php echo htmlentities('<div class="CLASS_NAME">MP3 Player</div>'); ?></code></span>
                            <br />
                            <input name="ca_mp3_player_in_single" type="checkbox" id="ca_mp3_player_in_single" value="1" <?php checked( $opts['in_single'], 1 ); ?> />
                            <label for="ca_mp3_player_in_single">Display MP3 player only in single post <span class="description">(Exclude loops, excerpts, sidebars/widgets etc...)</span>.</label>
                        </td>
                    </tr>

                </table>
                
                <br />
                
                <?php $image_url = plugin_dir_url( __FILE__ ) .  'favicon.ico';  ?>
                <span class="description">
                	To embed the MP3 Player, copy the following shortcode and paste in the post(s), page(s) and/or sidebar(s) where you want to be displayed the MP3 Player 
                    <br />
                    or you can use the visual editor by clicking on the <img align="absbottom" src="<?php echo $image_url; ?>" width="16" alt="Media Button..." /> in the text editor (media button).
                </span>
                <br />
                <span class="description"><strong>NOTE: Do not forget to replace the 'URL' paramether with the FULL URL of the MP3 which you want to embed!</strong></span>
                <br />
                <textarea rows="2" cols="150">[ca_audio url="URL" width="<?php echo $opts['width']; ?>" height="<?php echo $opts['height']; ?>" css_class="<?php echo $opts['css_class']; ?>"]</textarea>
                <br />
                <span>Also, you can visit the <a href="http://wordpress.org/extend/plugins/google-mp3-audio-player/" target="_blank">plugin site (CodeArt - Google MP3 Player)</a> for more information.</span>
                
                <p class="submit"><input type="submit" name="submit" id="submit" class="button-primary" value="Save Changes"></p>
                
                <?php $image_url = plugin_dir_url( __FILE__ ) .  'codeart-watermark3.png';  ?>
                <a href="http://codeart.mk/" title="Visit out website..." target="_blank"><img align="absbottom" src="<?php echo $image_url; ?>" width="71" height="55" alt="CodeArt Watermark" /></a>
            
            </form>
            
            
    	</div>
            
		<?php
		
		/*
		$filename = CA_PLUGIN_PATH . 'ca-admin-page.php';
		if( file_exists($filename) )
		{
			@require_once(CA_PLUGIN_ADMIN_PAGE);
		}
		else
		{
			echo CA_PLUGIN_TITLE;
		}
		*/
		
	}
	
	
	
	/**
	*	Method to add a submenu into admin area, in settings menu
	*	@submenu_name: CodeArt: Google MP3 Audio Player Plugin
	*	@title: Google MP3 Player
	*	@alias: ca-google-mp3-audio-player
	*	@callback_func: ca_google_mp3_audio_player_admin_page
	*/
	function ca_google_audio_player_menu()
	{
		add_options_page(CA_PLUGIN_TITLE, CA_PLUGIN_MENU_TITLE, 'manage_options', CA_PLUGIN_NAME, 'ca_google_mp3_audio_player_admin_page');
	}
	
	
	
	
	
	
	
	
	
	//add a button to the content editor, next to the media button
	//this button will show a popup that contains inline content
	add_action('media_buttons_context', 'add_my_custom_button');
	
	
	//add some content to the bottom of the page
	//This will be shown in the inline modal
	add_action('admin_footer', 'add_inline_popup_content');
	
	
	//action to add a custom button to the content editor
	function add_my_custom_button($context)
	{
		//path to my icon
		// $img = CA_PLUGIN_URL . 'mp3-icon.png';
		$img = CA_PLUGIN_URL . 'favicon.ico';
		
		//the id of the container I want to show in the popup
		$container_id = 'ca_google_audio_player_popup_container';
		//our popup's title
		$title = 'Insert an audio file';
		//append the icon
		$context .= "<a class='thickbox' title='{$title}' href='#TB_inline?width=660&inlineId={$container_id}'><img src='{$img}' width='16' alt='ca_mp3_img' /></a>";
		return $context;
	}
	
	/**
	 *	Function
	 */
	function add_inline_popup_content()
	{
		
		
		$opts = ca_get_custom_options();
	?>
    <script type="text/javascript">
		function InsertMP3Player(){
			
			try {
				var ca_full_url 	= jQuery('#ca_full_url').val();
				var ca_width 		= jQuery('#ca_width').val();
				var ca_height 		= jQuery('#ca_height').val();
				var ca_css_style 	= jQuery('#ca_css_style').val();
				var ca_autoplay 	= jQuery('#ca_autoplay').is(':checked');
				
		    	var win = window.dialogArguments || opener || parent || top;
				win.send_to_editor('[ca_audio url="' + ca_full_url + '" width="' + ca_width + '" height="' + ca_height + '" css_class="' + ca_css_style + '" autoplay="' + ca_autoplay + '"]');
			} catch (e) {}
			
		}
	</script>
    
    <div id="ca_google_audio_player_popup_container" style="display: none;">
    	<h3>Insert MP3 Player!</h3>
        <table class="form-table">
            
        	<tr class="form-field">
				<th scope="row"><label for="ca_full_url">Full MP3 URL:</label></th>
				<td><input type="text" id="ca_full_url" name="ca_full_url" style="width: 225px;" /></td>
				<th scope="row"><em>Full MP3 URL (Required).</em></th>
			</tr>
            
            <tr class="form-field">
				<th scope="row"><label for="ca_width">Width:</label></th>
				<td><input type="number" id="ca_width" name="ca_width" style="width: 90px;" value="<?php echo $opts['width']; ?>" /></td>
				<th scope="row"><em>Width of the MP3 Player (Optional).</em></th>
			</tr>
            
            <tr class="form-field">
				<th scope="row"><label for="ca_height">Height:</label></th>
				<td><input type="number" id="ca_height" name="ca_height" style="width: 90px;" value="<?php echo $opts['height']; ?>" /></td>
				<th scope="row"><em>Height of the MP3 Player (Optional).</em></th>
			</tr>
            
            <tr class="form-field">
				<th scope="row"><label for="ca_autoplay">Autoplay:</label></th>
				<td><input name="ca_autoplay" type="checkbox" style="width: 20px;" id="ca_autoplay" value="1" <?php checked( $opts['autoplay'], 1 ); ?> /></td>
				<th scope="row"><em>Automatically start the song (Optional).</em></th>
			</tr>
            
            <tr class="form-field">
				<th scope="row"><label for="ca_css_style">CSS Class</label></th>
				<td><input type="text" id="ca_css_style" name="ca_css_style" value="<?php echo $opts['css_class']; ?>" style="width: 225px;" /></td>
				<th scope="row"><em>CSS class of the DIV tag (Optional).</em></th>
			</tr>
            
            <tr class="form-field">
				<td><input type="button" style="height: 21px; line-height: 21px; width: 170px;" class="button-primary" value="Insert MP3 Player" onclick="InsertMP3Player();"/></td>
				<td><a class="button" style="height: 21px; display: block; text-align: center; line-height: 21px; width: 100px;" href="#" onclick="tb_remove(); return false;">Cancel</a></td>
            </tr>
            
        </table>
        
        <!--
        <div style="width: 100%; text-align: center; margin-top: 12px; border-bottom: 1px #DDD solid; padding-bottom: 4px;">
        	<em>Upload the MP3 audio file(s) which you want to embed into post/player. Copy the full URL of the uploaded audio file and paste into text field. Press 'Insert MP3 Player' and enjoy!</em>
        </div>
        -->
        
        <!-- <iframe src="media-upload.php?post_id=57&tab=type" width="655" style="min-height: 530px; margin: 20px 0 0 -10px;"></iframe> -->
        
    </div>
	<?php
    }
	
	
	
?>