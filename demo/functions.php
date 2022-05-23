<?php

/**
 * widget area
 */
register_sidebar( array( 
  'name'          => 'Sidebar',
  'id'            => 'widget-area',
  'description'   => 'Sidebar widget area',
  'before_widget' => '<section id="%1$s" class="widget %2$s transparent-box">',
  'after_widget'  => '</section>',
  'before_title'  => '<h3 class="widget-title">',
  'after_title'   => '</h3>',
 ) );


register_sidebar( array( 
  'name'          => 'Sidebar-SP',
  'id'            => 'widget-area-sp',
  'description'   => 'Sidebar widget area SP',
  'before_widget' => '<section id="%1$s" class="widget %2$s transparent-box">',
  'after_widget'  => '</section>',
  'before_title'  => '<h3 class="widget-title">',
  'after_title'   => '</h3>',
 ) );

/**
 * アイキャッチ画像の機能を有効化
 */

add_theme_support( 'post-thumbnails' );

?>
