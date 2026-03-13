=== Page for Random Banners ===
Contributors: rainbowlinkinc
Donate link: https://www.Rainbow-Link.com/catalogue.htm?&item_no=RLF15&link_id=wp
Tags: random banners
Requires at least: 4.4.2
Tested up to: 6.9
Stable tag: 1.3.8
Requires PHP: 8.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allows you to create a custom page where banner images are displayed in a different random order every time the page is loaded.

== Description ==

Page for Random Banners provides a way to display banner images randomly on a dedicated page. Every time the page is accessed, the order of the banners is shuffled automatically.

📺 Video: How to Use  
https://youtu.be/rxGcSPCgyfs

📺 SlideShow: How to Use  
https://www.Rainbow-Link.com/catalogue.htm?&item_no=RLF15#make_index3

📁 Live Demo:  
https://www.secure-formmail.net/?rl_pfrb_headerfooter=page-for-random-banners-demo3

📁 Sample banners are included in:  
`/wp-content/plugins/page-for-random-banners/example/images`

【How to Install】
(0) Log into your WordPress admin panel and install this plugin, along with the required plugin “Custom Post Template”.  

(1) Go to: Page for Random Banners > Add a New Page for Random Banners.
(2) Using the TinyMCE editor in “Text” mode, write your banner layout using one of the following formats:

Format 1 (linked image): `<a href=""><img src=""></a>`  
Format 2 (image only): `<img src="">`

⚠️ For optimal randomness, we recommend using only one format per page.

(3) Under “Post Template”, choose “Page for Random Banners [Header Footer]”.
(4) Click “Publish” to save your page.
(5) Optionally, create and apply a custom stylesheet by modifying `header.php`.  
   Sample CSS is available in:  
   `/wp-content/plugins/page-for-random-banners/example`


【FAQ】 
https://www.Rainbow-Link.com/catalogue.htm?&item_no=RLF15#faq


【Inquiry】
For support or inquiries, please contact the plugin author directly:  
https://www.Rainbow-Link.com/catalogue.htm?&item_no=RLF15#inquiry



== Installation ==

1. Upload the plugin files to `/wp-content/plugins/page-for-random-banners`, or install it via the WordPress admin screen.
2. Activate the plugin from the “Plugins” menu.
3. Copy the template files from `/wp-content/plugins/page-for-random-banners/templates` to your active theme folder.
4. Install and activate the “Custom Post Template” plugin (https://wordpress.org/plugins/custom-post-template/).

📺 Video: How to Use  
https://youtu.be/rxGcSPCgyfs


== Screenshots ==

1. screenshot-1.png: Required plugins
2. screenshot-2.png: How to create one of the Child-Pages
3. screenshot-3.png: How to create the Parent-Page
3. screenshot-4.png: DEMO



== Frequently Asked Questions ==

= FAQ LIST URL =  
https://www.Rainbow-Link.com/catalogue.htm?&item_no=RLF15#faq

== Changelog ==
= 1.3.8 =
Jan 2, 2026: Renewed the HowTo-Video and assets. Incorporated the parts had published as components on Github into the templates.
- New Plugin-Logo Created by ChatGPT-5.2 

= 1.3.7 =
May 5, 2025: Fixed: Tag Errors

= 1.3.6 =
Apr 24, 2025: Fixed: Version error.

= 1.3.5 =
Apr 24, 2025: Updated readme.txt and readme_ja.txt with the support of ChatGPT.  
Jan 21, 2025: Added: header fields (Requires PHP, Requires at least, Update URI)

= 1.3.4 =
Oct 10, 2024: Modified tags per WordPress.org review

= 1.3.3 =
Sep 11, 2024: Bug fix for version 1.3.2

= 1.3.2 =
Sep 11, 2024: Added new template: single-pfrb_HeaderFooter_2024.php

= 1.3.1 =
May 7, 2023: Added banner-1544x500.png  
Nov 2, 2022: PHP8 compatibility and bug fix for 1.3.0

= 1.3.0 =
Nov 1, 2022: Updated for PHP8 compatibility

= 1.2 =
Nov 22, 2018: Updated catalogue URL

= 1.1 =
Oct 5, 2018: Corrected WordPress version reference

= 1.0 =
Line 84: $post_types = rl_pfrb_headerfooter;

= 0.1 =
Line 84–89: Debug comments added  
If you use an old version of WordPress and the plugin fails, remove the ‘//’ to enable compatibility mode.

== Upgrade Notice ==

= 1.1 =
- Updated readme.txt: DEMO URL and usage instructions revised and video added

= 1.0 =
- Initial release

= 0.1 =
- Addressed debug message for dependency plugin "Custom Post Template"
