<?php
// Tự động thêm thẻ <title> cho trang web
function custom_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

// Tự động load file style.css
function custom_theme_scripts() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );

// Tùy chỉnh độ dài câu tóm tắt (Excerpt)
function custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Đổi dấu [...] cuối bài thành dấu 3 chấm đẹp hơn
function custom_excerpt_more( $more ) {
    return ' [...]';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );