<?php
/*******************************************************************************
Plugin URI: http://www.Rainbow-Link.com/catalogue.htm?&item_no=RLF15&link_id=wp
Update URI: https://wordpress.org/plugins/page-for-random-banners/
Requires PHP: 8.0
Author: RainbowLink Inc.
Author URI: https://www.Rainbow-Link.com/
Text Domain: page-for-random-banners
Copyright: RainbowLink Inc. (email : info@Rainbow-Link.com)
*******************************************************************************/
/*============================================================================== 
 * The plugin bootstrap file
 * @link              https://www.Rainbow-Link.com
 * @since             1.0.0
 * @package           page-for-random-banners     
 =============================================================================*/ 
/* Core system of this plugin1 -------------------------------*/ 
if(!defined('ABSPATH')){ die('Invalid request.'); } 
if ( ! defined( 'rl_pfrb_dir_path' ) ) exit; 
if(!empty($wppfrb_banners)){
$wppfrb_banners = str_replace( '<p>', '', $wppfrb_banners );			$wppfrb_banners = str_replace( '</p>', '', $wppfrb_banners );			if(stristr($wppfrb_banners,"<a ") !== FALSE){$wppfrb_banners = str_replace( '<a href', "<a href", $wppfrb_banners );	$wppfrb_banners = str_replace( '</a>', "</a>,", $wppfrb_banners );	}else{$wppfrb_banners = str_replace( '>', ">,", $wppfrb_banners );	}	$wppfrb_banners = preg_split("/,/", $wppfrb_banners);	shuffle($wppfrb_banners); 
/* --------------------------- /Core system of this plugin1 --*/
if(rl_pfrb_disp_mobile()){
//for smartphones
echo '<div class="banner_container_sp">';
}else{
//for without smartphones
echo '<div class="banner_container">';
}
/* Core system of this plugin2 -------------------------------*/
foreach ($wppfrb_banners as $wppfrb_banner){    echo "\t" . $wppfrb_banner; }
/* --------------------------- /Core system of this plugin2 --*/
echo '</div>';
}
?>
  
