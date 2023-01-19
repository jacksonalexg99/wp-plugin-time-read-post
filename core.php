<?php
/*
Plugin Name:زمان خواندن پست
Plugin URI: http://wordpress.org/plugins/plugin-wordpress/
Description:  افزونه زمان خواندن پپست
Author: محمدرضا کیانی
Version: 1.0.0
Author URI:http://developer-wp.local
*/
if ( ! defined( "ABSPATH" ) ) {
	die( 'دسترسی به این صفحه را ندارید!' );
}

function kp_time_read( $content, $word = 300 ) {
	$clean_content = strip_tags( strip_shortcodes( $content ) );
	$count_word    = str_word_count( $clean_content );

	return ceil( $count_word / $word );
}
