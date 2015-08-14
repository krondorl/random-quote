<?php

/*
Plugin Name: Adam's random quote
Version: 0.1
Plugin URI: http://burucs.com
Description: Replaces the site's description with a random quote
Author: Adam Burucs
Author URI: http://burucs.com
*/
 
function ab_arq_generate() {
    $quotes = array(
        'Silence is golden.',
        'Nothing is what it looks like.',
        'Make everything right!',
        'Better late than never.',
        'Seeing is believing.'
    );
     
    return $quotes[rand(0, count($quotes)-1)];
}
 
function ab_arq_change_bloginfo( $text, $show ) {
    if( 'description' == $show ) {
        $text = ab_arq_generate();
    }
    return $text;
}
 
add_filter( 'bloginfo', 'ab_arq_change_bloginfo', 10, 2 );
