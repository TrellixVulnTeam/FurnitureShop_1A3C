<?php 

    function resin_zone(){
        wp_enqueue_script('main-scipt', get_theme_file_uri('/js/script.js'), NULL, 1.0, true);
        wp_enqueue_style('main_style', get_theme_file_uri('/css/main.css'));
        wp_enqueue_style('wp_style', get_theme_file_uri('/style.css'));
        wp_enqueue_style('google_font', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,300&display=swap');
        wp_enqueue_style('google_font2', '//fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap');
        wp_enqueue_style('lindeicons', '//cdn.lineicons.com/3.0/lineicons.css');
    }
    add_action('wp_enqueue_scripts', 'resin_zone');

    function add_favicon() {
        echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri().'/media/logo4.png" />';
    }
    
    add_action('wp_head', 'add_favicon');

    function features(){
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'features');


?>