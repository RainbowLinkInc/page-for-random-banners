<?php 
/* Template Name Posts: Page for Random Banners [IFRAME]
Author: RainbowLink Inc.
Author URI: http://www.Rainbow-Link.com/
Copyright RainbowLink Inc. (email : info@Rainbow-Link.com)
 
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
if ( ! defined( 'rl_pfrb_dir_path' ) ) exit; 
while ( have_posts() ) : the_post();		
$wppfrb_page_title = get_the_title();
endwhile;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $wppfrb_page_title;  ?></title>
<meta name="ROBOTS" content="index" />
<!-- WordPress Style Sheet | This file (single-prfb_IFRAME.php) has already been copied from the GitHub repository to your active-theme-dir by YOU, so this file can display your active-theme's stylesheet. -->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>" />
<!-- Page for Random Banners Style Sheet | If you use a stand-aline Style Sheet for this page, copy 'banners_page.css' from the GitHub repository to your active-theme-dir.-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/banners_page.css" />
</head>
<body>
<?php
while ( have_posts() ) : the_post();		
$wppfrb_banners = get_the_content();
endwhile;
include rl_pfrb_dir_path.'page-for-random-banners_core.php';
?>
</body>
</html>
