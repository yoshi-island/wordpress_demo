<!DOCTYPE html>
<html <?php language_attributes( ); ?>> <!-- multi-language supports -->
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri( ); ?>">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">

    <!-- aimate.css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <?php wp_head(); ?>
  </head>

  <body <?php body_class( ); ?>>
    <header>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="transparent-box">
          YOSHI<br>
          Demo Blog
        </div>
      </a>
    </header>

