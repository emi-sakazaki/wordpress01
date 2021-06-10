<?php
function theme_setup() {
	add_theme_support( 'title-tag' );//WordPress上のタイトルタグを取得する

	add_theme_support( 'custom-logo' );//WordPress上のロゴを取得する

	register_nav_menus( array(
		'global' => 'Global Menu'
	) );//WordPress上にメニューを追加
}
add_action( 'after_setup_theme', 'theme_setup' );//WordPressの設定が終わったら、自分が用意した関数を実行し、表示※順番が大事

function theme_styles() {
	wp_enqueue_style( 'theme-font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Open+Sans:wght@400;700&display=swap', array(), '1.0.0' );
	wp_enqueue_style( 'theme-reset', get_template_directory_uri() . '/css/normalize.css', array( 'theme-font' ), '1.0.0' );//名前を付ける、wordpress01までのパスを取得、それ以降のパスを書く,theme_fontの読み込みが終わった後,
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/flex.css', array( 'theme-reset' ), '1.0.0' );//theme_resetの読み込みが終わったら
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );//woedPressが用意したCSSのあとに自分のCSSを実行

function theme_scripts() {
	wp_deregister_script( 'jquery' );//WordPress上の不要なJavaScriptを削除
	wp_deregister_script( 'jquery-migrate' );

	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/scroll.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
