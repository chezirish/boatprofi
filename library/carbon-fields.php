<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {


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

