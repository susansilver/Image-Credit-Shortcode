<?php
/*
Plugin Name: Image Credit Shortcode
Description: Adds a Shortcode to your WordPress blog for properly crediting images
*/


/** * Image Credit Shortcode 
http://speckyboy.com/2011/07/18/getting-started-with-wordpress-shortcodes-examples/*/ 

function image_credit($atts) {
    extract(shortcode_atts(array(
        'author' => 'author',
		'profile' => 'profile',
		'title' => 'title',
		'deed' => 'deed',
		'website' => 'website',
		'credit' => 'credit',
		'url'=> 'url' 
    ), $atts ) );;
     
   return 'Image Credit: <a href="' . ($url) . '" title="on ' . ($website) . '" target="_blank">"' . ($title) . '"</a> by <a href="' . ($profile) . '" title="' . ($author) . '" target="_blank">' . ($author) . '</a> is licensed under <a href="' . ($deed) . '" title="' . ($credit) . '" target="_blank">' . ($credit) . '</a>';
    }

add_shortcode('imagecredit', 'image_credit');

?>