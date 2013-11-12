<?php

/**
 * Plugin Name: Tekserve Footer Folk
 * Plugin URI: https://github.com/bangerkuwranger
 * Description: Custom shortcodes for interface elements and Visual Composer button mappings
 * Version: 1.0
 * Author: Chad A. Carino
 * Author URI: http://www.chadacarino.com
 * License: MIT
 */
/*
The MIT License (MIT)
Copyright (c) 2013 Chad A. Carino
 
Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

/**  Shortcode for footer folk  **/
function footer_folk($atts){
$zagat = plugin_dir_url( __FILE__ ).'images/zagat.png';
$foursquare = plugin_dir_url( __FILE__ ).'images/foursquare-logo.png';
$folk = plugin_dir_url( __FILE__ ).'images/footer-folk-1.png';
return '<div class="footer-folk">
<ul class="certificationlogos">
<li>
<a title="Tekserve Corp. BBB Business Review" href="http://www.bbb.org/new-york-city/business-reviews/computers-service-and-repair/tekserve-corp-in-new-york-ny-23092/#bbbonlineclick"><img alt="Tekserve Corp. BBB Business Review" style="border: 0;" src="http://seal-newyork.bbb.org/seals/blue-seal-250-52-tekserve-corp-23092.png" /></a>
</li>
<li id="yelp-biz-badge-rrc-T-yDGKZZA71nkGQoPQCCng">Tekserve
</li>
<li>
<img src="'.$zagat.'" />
</li>
<li>
<img src="'.$foursquare.'" class="foursquare" />
<span style="margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline; color: #fff; cursor: default; display: inline-block; font-size: 12px; font-weight: bold; padding: 5px 0; text-align: center; text-shadow: rgba(0, 0, 0, 0.1) 0 -1px 0; width: 30px; -moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; font-size: 17px; float: none; line-height: 32px; margin-right: 23px; padding: 0 10px 0 20px; width: 47px; background: #69bf13; position: relative; top: -15px;"><span itemprop="ratingValue">8.8</span><sup>/<span itemprop="bestRating">10</span></sup></span>
</li>
</ul>
<div class="footer-folk-image">
<img src="'.$folk.'" />
</div>

</div>

<script type="text/javascript">
					!function(doc, id){
  var js;
  var scriptElement = doc.getElementsByTagName("script")[0];
  if (!doc.getElementById(id)) {
    js = doc.createElement("script");
    js.id = id;
    js.src = "//dyn.yelpcdn.com/biz_badge_js/rrc/T-yDGKZZA71nkGQoPQCCng.js";
    scriptElement.parentNode.insertBefore(js, scriptElement);
  }
} (document, "yelp-biz-badge-script-rrc-T-yDGKZZA71nkGQoPQCCng");


</script>

';
}
add_shortcode( 'footerfolk', 'footer_folk' );

/**  Visual Composer button  **/
if (function_exists('vc_map')) {
	vc_map( array(
	   "name" => __("Footer Folk"),
	   "base" => "footerfolk",
	   "class" => "",
	   "icon" => "icon-wpb-footerfolk",
	   "category" => __('Content'),
	   "admin_enqueue_css" => array(plugins_url().'/tekserve-footer-folk/footer-folk.css')
	)	);
}

/** Include CSS */
function footer_folk_css() {
 	wp_enqueue_style ( 'footerfolk', plugin_dir_url( __FILE__ ) . 'footer-folk.css' );
}
add_action( 'wp_enqueue_scripts', 'footer_folk_css' );