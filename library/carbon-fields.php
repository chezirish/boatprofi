<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_fields_options' );
add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

// add_action('admin_menu', 'crb_attach_theme_options', 11);


function crb_attach_theme_options(){

    $parent_options_container = Container::make( 'theme_options', 'Настройки темы' )
    ->set_icon( 'dashicons-admin-customizer' )
    ->set_page_menu_position( 5 )
    ->add_tab( 'Соц сети', array(
        Field::make( 'text', 'crb_in', 'Ссылка на instagram') ,
        Field::make( 'text', 'crb_fb', 'Ссылка на facebook' ),
        Field::make( 'text', 'crb_vk', 'Ссылка на vk' )
    ) )
    ->add_tab( 'Прочее', array(
        Field::make( 'text', 'crb_address', 'Адрес') ,
        Field::make( 'text', 'crb_phone', 'Телефон' )
        ->set_help_text( 'В формате  +7 910 818 81 39' ),
        Field::make( 'file', 'crb_politics', 'Пользовательское соглашение (PDF)' )
        ->set_type( 'image' )
        ->set_value_type( 'url' )
    ) );



    Container::make( 'theme_options', 'Хедер' )
    ->set_page_parent( $parent_options_container ) // reference to a top level container
    ->add_fields( array(
        Field::make( 'text', 'crb_header_phrase', 'Слоган' )
    ) );


    Container::make( 'theme_options', 'Футер' )
    ->set_page_parent( $parent_options_container ) // reference to a top level container
    ->add_fields( array(
        Field::make( 'rich_text', 'crb_footer_info', 'Информация' ),
        Field::make( 'text', 'crb_footer_phrase', 'Слоган и права' ),
        Field::make( 'text', 'crb_company_link', 'Ссылка на компанию разработчиков' )
    ) );
}


function crb_attach_fields_options() {

    Container::make( 'post_meta', 'Пункты зеленого блока' )
        ->where( 'post_type', '=', 'project-post' )
        ->add_fields( array(
            Field::make( 'complex', 'crb_green_block-items', 'Маркерованный список' )
                ->set_layout( 'grid' )
                ->add_fields( array(
                    Field::make( 'text', 'task', 'Элемент списка' )
                ) ),
        ) );

    Container::make( 'post_meta', 'Пункты процесса' )
        ->where( 'post_type', '=', 'project-post' )
        ->add_fields( array(
            Field::make( 'complex', 'crb_process_block-items', 'Пункты процесса' )
                ->set_layout( 'tabbed-vertical' )
                ->add_fields( array(
                    Field::make( 'rich_text', 'text', 'Текст' ),
                    Field::make( 'image', 'img', 'Фото' )
                    ->set_value_type( 'url' )
                ) ),
        ) );

    Container::make( 'post_meta', 'галлерея' )
        ->where( 'post_type', '=', 'services-post' )
        ->add_fields( array(
            Field::make( 'media_gallery', 'crb_media_gallery', 'Добавте фотографии' )
                ->set_type( array( 'image' ) )
        ) );

    Container::make( 'post_meta', 'Произвольные ссылки' )
        ->where( 'post_type', '=', 'services-post' )
        ->add_fields( array(
            Field::make( 'complex', 'crb_service-links', 'Введите адрес сылки' )
                ->set_layout( 'grid' )
                ->add_fields( array(
                    Field::make( 'text', 'link', 'Ссылка' ),
                    Field::make( 'text', 'link-content', 'Текст ссылки' )
                ) ),
        ) );


}

