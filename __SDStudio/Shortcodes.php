<?php

/**
* 
* @_1_ТЕКУЩИЙ_ГОД
* 
*/

// Текущий год - ШОРТКОД
/* Use [year] in your posts. */
function year_shortcode() {
  $year = date('Y');
  return $year;
}
// Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');
add_shortcode('year', 'year_shortcode');

// Custom h1
// Оборачиваем текст в виджете в h1 только на главной странице? для других страниц оборачиваем в span
// [Custom_H1].*[/Custom_H1]
// https://misha.blog/wordpress/shortcodes.html

add_shortcode( 'Custom_H1', 'Custom_H1_shortcode' );
function Custom_H1_shortcode( $atts, $content ) {
	if( is_front_page() ){
	 return "<h1>$content</h1>";
 } else {
	 return "<span>$content</span>";
 };
}




?>