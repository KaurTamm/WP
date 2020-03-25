<?php
/*
Plugin Name: My Plugin
Plugin URI: https://tammkaur.ikt.khk.ee/
Description: This is my first WordPress Plugin
Author: Kaur Tamm
Author URI: https://tammkaur.ikt.khk.ee/
Version: 1.0
*/

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
}