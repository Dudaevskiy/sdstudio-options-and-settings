<?php

/**
* 
* @_1_ГАЛЕРЕЯ_ИЗОБРАЖЕНИЙ
* 
*/


// Галереи WordPress Всегда использовать линк на медиа файл при создании галереи
/**
 * Set default link type to “file” for image galleries when link isn't set
 */
/*function my_gallery_default_type_set_link( $settings ) {
    $settings['galleryDefaults']['link'] = 'file';
    return $settings;
}
add_filter( 'media_view_settings', 'my_gallery_default_type_set_link');*/

/**
 * SDStudio - https://techblog.sdstudio.top/blog/wordpress-ssylka-na-media-fajl-po-umolchaniyu-dlya-galerei-izobrazhenij
 * Установка типа ссылки по умолчанию на медиа файл для галерей изображений
 */
function my_gallery_default_type_set_link( $settings ) {
	$sdstudio_gallery_num =  carbon_get_theme_option( 'sdstudio_gallery_num' );
	
    $settings['galleryDefaults']['link'] = 'file';
    $settings['galleryDefaults']['size'] = 'thumbnail';
    $settings['galleryDefaults']['columns'] = $sdstudio_gallery_num;
    return $settings;
}
add_filter( 'media_view_settings', 'my_gallery_default_type_set_link');

/**
* 
* @_2_РАЗМЕРЫ_ИЗОБРАЖЕНИЙ
* 
*/

// ДОбавляем свои размеры изображений
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'cactus-posts-grid', 300, 200, true );
	// add_image_size( 'category-thumb', 300, 9999 ); // 300 в ширину и без ограничения в высоту
	// add_image_size( 'homepage-thumb', 220, 180, true ); // Кадрирование изображения
}


?>