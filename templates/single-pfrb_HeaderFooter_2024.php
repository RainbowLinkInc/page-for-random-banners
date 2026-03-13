<?php 
/* Template Name Posts: Page for Random Banners [Header Footer] for 2024
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
?>
<?php get_header(); ?>
<div class="wp-site-blocks pfrb-twentyfour">
<header class="wp-block-template-part">
<?php
while ( have_posts() ) : the_post();			
$wppfrb_page_title = get_the_title();
echo '<p class="wp-block-site-title">'.$wppfrb_page_title.'</p>';
endwhile;
?>
</header>
<main class="wp-block-group alignfull has-global-padding is-layout-constrained wp-block-group-is-layout-constrained">
<?php
while ( have_posts() ) : the_post();			
$wppfrb_banners = get_the_content();
endwhile;
include rl_pfrb_dir_path.'page-for-random-banners_core.php';
?>
</main>
</div><!-- .pfrb-twentyfour -->
<?php get_footer(); ?>

