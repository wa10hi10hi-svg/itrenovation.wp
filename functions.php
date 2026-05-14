<?php
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles() {

    wp_register_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Noticia+Text:wght@400;700&family=Satisfy&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap',
        array(),
        null
    );

    wp_register_style(
        'reset',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        null
    );

    wp_enqueue_style(
        'main',
        get_template_directory_uri() . './css/main.css',
        array('google-fonts','reset'),
        filemtime(get_template_directory() . './css/main.css')
    );
}

add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts()
{
    // デフォルトのjQueryを削除
    wp_deregister_script('jquery');


    //JSの読み込み

    //jqueryを登録
    wp_register_script(
        'jquery_script',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        array(),
        '1.0',
        true
    );

    // main.jsを最後に実行
    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . './js/main.js',
        array('jquery_script'),
        '1.0',
        true
    );

}

// サムネイル設定を有効化
add_theme_support('post-thumbnails');

add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
}
?>

