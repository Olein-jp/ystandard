<?php
/**
 * body class
 */
function ys_body_classes( $classes ) {

	/**
	 * 背景画像があればクラス追加
	 */
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	/**
	 * ampならクラス追加
	 */
	if ( ys_is_amp() ) {
		$classes[] = 'amp';
	} else {
		$classes[] = 'no-amp';
	}

	/**
	 * 1カラム,AMPの場合
	 */
	if( ys_is_one_column() || ys_is_amp() ) {
		$classes[] = 'one-col';
	}

	/**
	 * アーカイブレイアウト
	 */
	if( is_archive() || is_home() ){
		$classes[] = 'entry-list--' . ys_get_option( 'ys_archive_type' );
	}

	return $classes;
}
add_filter( 'body_class', 'ys_body_classes' );