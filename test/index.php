<!DOCTYPE html>
<html <?php language_attributes( ); ?>> <!-- multi-language supports -->
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri( ); ?>">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class( ); ?>>

    <?php get_template_part('spmenu'); ?> <!-- SP用メニューの呼び出し -->

    <div id="wrapper">
      <aside>
        <?php dynamic_sidebar( 'Sidebar' ); ?>
      </aside>
      <div id="contents">
        contentsだよ
      </div>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>
