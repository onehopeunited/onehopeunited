=== CodeArt - Google MP3 Player ===
Contributors: codeart, SkyDriver
Tags: plugin, mp3, audio, google, media, player
Requires at least: 3.0
Tested up to: 3.4
Stable tag: 2.5.3
License: GPLv2 or later

Embedding MP3 audio files using Google MP3 Audio Player.

== Description ==

The plugin 'CodeArt - Google MP3 Audio Player (for WordPress)' will allow you to embed mp3 audio files in a player where you want on the post(s), page(s) and/or sidebar(s).

- HTML5 support for iPhone (in version 1.0.8)

First of all, you need to upload/host your mp3 audio file which you want to embed in the posts.
You can do this via Media Library (from WordPress) or another file hosting.
After uploading your mp3 audio file you need to copy the full URL path of the uploaded mp3 file and to put in the post where you want to be displayed in this format:
`
[ca_audio url="URL" width="WIDTH" height="HEIGHT" css_class="CSS_CLASS"]
`
The shortcode shoult looks like this:
`
[ca_audio url="http://www.example.com/path/to/mp3/file/audio_file.mp3" width="500" height="27" css_class="codeart-google-mp3-player" autoplay="true"]
`
* URL - Full URL to the MP3 audio file which you want to embed in the posts [Required].
* WIDTH - Width of the MP3 player (must be integer) [optional, default is 500 pixels].
* HEIGHT - Height of the MP3 player (must be integer) [optional, default is 27 pixels].
* AUTOPLAY = Automatically start the song [optional, default is false].
* CSS_STYLE - This is for the developers.

Put the shortcode (of course, with the correct informations) in post(s) where you want to be displayed the player.

Also, after installing and activating the plugin go to 'Setting > Google MP3 Player' submenu in the admin panel for more instructions.

== Installation ==

1. Upload the entire `google-mp3-audio-player` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Look at your toolbar / admin bar for "Settings" in a submenu "Google MP3 Player" and enjoy using the Google MP3 Audio Player!

== Changelog ==

= 1.0.8 = 

- NEW: Added option for autoplay
- NEW: Add HTML5 player support for iPhone only


= 1.0.7 = 

- Fixed bug - Admin background color


= 1.0.6 = 

- Forced update
* NEW: The new player is available (the old player was deprecated from Google)

= 1.0.5 = 

* NEW: Added settings page
* NEW: Added support for displaying the player in the sidebars using shortcode
* NEW: Added media button and visual editor to generate the chortcode
* NEW: Added many options (You can see in the Settings > Google MP3 Player submenu
* User-friendly editor and options
* Greater Security

= 1.0.0 =

Initial release. 

== Screenshots ==

1. Embedded Google MP3 Audio Player
2. Settings Page
3. Media Button in the text editor
4. Visual editor to generate shortcode
5. Settings submenu