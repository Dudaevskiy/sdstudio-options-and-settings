<?php

/*use Carbon_Fields\Container;
use Carbon_Fields\Field;*/

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
        Field::make( 'text', 'crb_first_name', 'Редирект при ВХОДЕ на сайт' )
        ->set_help_text( 'Введите ссылку страницы, на которую должен попасть пользователь при входе. <b>Данная настройка необходима в основном профессиональным блогерам и для магазинов. Используется не часто</b>' )
        ->set_width( 50 ),
        
        // ВЫХОД        
        Field::make( 'text', 'crb_last_name', 'Редирект при ВЫХОДЕ с сайта' )
        ->set_help_text( 'Введите ссылку страницы, на которую должен попасть пользователь при ВЫХОДЕ с админки сайта или из личного кабинета.' )
        ->set_width( 50 ),
        
        Field::make( 'text', 'crb_position', 'Position' ),
    ) )
    ->add_tab( __('Notification'), array(
        Field::make( 'text', 'crb_email', 'Notification Email' ),
        Field::make( 'text', 'crb_phone', 'Phone Number' ),
    ) );
}
    
// ============== END ======================================
// ============== SDStudio Theme Options======================

?>