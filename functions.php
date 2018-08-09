<?php
    /*
     * Подключение необходимых стилей и скриптов
     */
    function main_style() {
        
        wp_enqueue_style( 'main-menu-style', get_template_directory_uri() . '/css/main-menu.css', false, null );
        wp_enqueue_style( 'social-menu-style', get_template_directory_uri() . '/css/social-menu.css', false, null );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', false, null );
        wp_enqueue_style( 'font-style', get_template_directory_uri() . '/css/fonts.css', false, null );
        wp_enqueue_style( 'media-style', get_template_directory_uri() . '/css/media.css', false, null );
        

        wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/libs/bootstrap-dist/css/bootstrap-grid-3.3.2.min.css', true, null );
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . './libs/bootstrap-dist/js/bootstrap.min.js', array(), null, true );

        wp_enqueue_script( 'jquery' );
    }
    add_action('wp_enqueue_scripts', 'main_style');

    /*
     * Поддержка миниатюр
     */
    add_theme_support( 'post-thumbnails' );

    /*
     * Подключение меню
     */
    if(function_exists('register_nav_menus')){
        register_nav_menus(
            array( // создаём любое количество областей
              'main_menu' => 'Главное меню', // 'имя' => 'описание'
              'social_menu' => 'Меню социальных ссылок'
            )
        );
    }