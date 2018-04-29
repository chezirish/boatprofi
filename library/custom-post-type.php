<?php



add_action( 'admin_menu', 'remove_menus' );

function remove_menus(){
    remove_menu_page( 'edit.php' );                   //Записи
}
   

function awesome_custom_post_type() {

    

    // register_taxonomy('articles-post-taxonomy', array('articles-post'), array( 
    //     'label' => __( 'Рубрики' ),
    //     'labels'                => array(
	// 		'name'              => 'Рубрики',
	// 		'singular_name'     => 'рубрика',
	// 		'search_items'      => 'Поиск рубрик',
	// 		'all_items'         => 'Все рубрики',
	// 		'view_item '        => 'Просмотр  рубрики',
	// 		'parent_item'       => 'Родительская рубрика',
	// 		'parent_item_colon' => 'Родительская рубрика:',
	// 		'edit_item'         => 'редактировать рубрику',
	// 		'update_item'       => 'Обновить рубрику',
	// 		'add_new_item'      => 'Добавить новую рубрику',
	// 		'new_item_name'     => 'Имя новой рубрики',
	// 		'menu_name'         => 'Рубрика',
	// 	),
    //     'hierarchical'          => true,


    // ));

    register_post_type( 'articles-post',
        array(
        'label' => 'Статьи',
        'public' => true,
        'has_archive' => true,
        'show_ui'              => true,
        'menu_position'=> 5,
        'supports'             => array('title', 'editor', 'thumbnail','excerpt'),
        'taxonomies'          => array('category'),
        )
    );


    register_post_type( 'reviews-post',
        array(
        'label' => 'Отзывы',
        'public' => true,
        'has_archive' => false,
        'show_ui'              => true,
        'menu_position'=> 5,
        'supports'             => array('thumbnail'),
        'taxonomies'          => array('category'),
        )
    );

    register_post_type( 'project-post',
        array(
        'label' => 'Проекты',
        'public' => true,
        'has_archive' => true,
        'show_ui'              => true,
        'menu_position'=> 5,
        'supports'             => array(),
        'taxonomies'          => array('category'),
        )
    );

    register_post_type( 'services-post',
    array(
    'label' => 'Услуги',
    'public' => true,
    'has_archive' => true,
    'show_ui'              => true,
    'menu_position'=> 5,
    'supports'             => array(),
    'taxonomies'          => array('category'),
    )
);




}
  // flush_rewrite_rules( false );


  add_action('init','awesome_custom_post_type');
