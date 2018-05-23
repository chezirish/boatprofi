<?php



add_action( 'wp_ajax_tag', 'tag_callback' );
add_action('wp_ajax_nopriv_tag', 'tag_callback');

function tag_callback() {
    $tag_name = $_POST['name'];
    $res_arr = array();

    if($tag_name == 'share'){
        
    } else if($tag_name == 'new'){
        
    } else if($tag_name == 'hit'){
        
    }
    
    $myJSON = json_encode($res_arr);

    echo $myJSON;

	wp_die(); // выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
}