<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


// ============== Custom Posts Fields ======================
// ============== START ======================

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'post_meta', 'Java Script код' )
		->show_on_post_type('page') 
        ->add_fields( array(
            Field::make( 'footer_scripts', 'crb_footer_script' )
        ) );
}

// ============== END ======================
// ============== Custom Posts Fields ======================


// ============== SDStudio Theme Options======================
// ============== START ======================================

add_action( 'carbon_fields_register_fields', 'SDStudio_theme_options' );
function SDStudio_theme_options() {
Container::make( 'theme_options', 'SDStudio' )
    /*->add_fields( array(
        Field::make( 'text', 'crb_facebook_url') ,
        Field::make( 'textarea', 'crb_footer_text' )
    ) );*/
    
    
    ->add_tab( __('Вход и выход'), array(
        // ВХОД
        Field::make( 'text', 'sdstudio_signup', 'Редирект при ВХОДЕ на сайт' )
        ->set_help_text( 'Введите ссылку страницы, на которую должен попасть пользователь при входе. <b>Данная настройка необходима в основном профессиональным блогерам и для магазинов. Используется не часто</b>' )
        ->set_width( 50 ),
        
        // ВЫХОД        
        Field::make( 'text', 'sdstudio_exit', 'Редирект при ВЫХОДЕ с сайта' )
        ->set_help_text( 'Введите ссылку страницы, на которую должен попасть пользователь при ВЫХОДЕ с админки сайта или из личного кабинета.' )
        ->set_width( 50 ),
        
        Field::make( 'image', 'sdstudio_logo_signin', 'Логотип сайта для страницы входа на сайт' )
    	->set_value_type( 'url' )
    	->set_width( 33 ),
    	
    	Field::make( 'image', 'sdstudio_background_signin', 'Бекграунд для страницы входа на сайт' )
    	->set_value_type( 'url' )
    	->set_width( 33 ),
    ) )
    
    ->add_tab( __('Медиа'), array(
        Field::make( 'select', 'sdstudio_gallery_num', 'Галерея - количество колонок изображений' )
        ->add_options( array(
	        '1' => '1',
	        '2' => '2',
	        '3' => '3',
	        '4' => '4',
	        '5' => '5',
	        '6' => '6',
	        '7' => '7',
	        '8' => '8',
	    ) )
        ->set_help_text( 'Введите количество колонок в галерее изображений' )
        ->set_width( 50 ),
    
    ) )
    
    
    
    
    
    
    
    
    ->add_tab( __('FAQ'), array(
		Field::make( 'html', 'crb_information_text' )
	    ->set_html( '
	    <h2 style="font-weight:600">Горячие клавиши</h2>
	    <p><b>Ctrl+Shift+1</b> - переход в админ панель сайта по ссылке "*/wp-admin/" </p>
	    <b>Ctrl+Shift+2</b> - переход в редактирование текущей страницы в админ панели сайта </p>
	    ' 
	    )
    ) );
}
    
// ============== END ======================================
// ============== SDStudio Theme Options======================


// include '/wp-content/plugins/sdstudio-options-and-settings/__SDStudio/_SDStudio-Carbon-Fields_THEME_OPTIONS.php' ;


// ============== CONNECTOR ======================
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( 'autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}
?>