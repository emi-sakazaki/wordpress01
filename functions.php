<?php
function theme_setup() {
	add_theme_support( 'title-tag' );//WordPress上のタイトルタグを取得する
}
add_action( 'after_setup_theme', 'theme_setup' );//WordPressの設定が終わったら、自分が用意した関数を実行し、表示※順番が大事

function theme_styles() {
	wp_enqueue_style( 'theme-reset', get_template_directory_uri() . '/css/normalize.css' );//名前を付ける、wordpress01までのパスを取得、それ以降のパスを書く
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/flex.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );//woedPressが用意したCSSのあとに自分のCSSを実行
