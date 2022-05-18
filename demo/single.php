<?php get_header(); ?>
<?php get_template_part('modules/headermenu'); ?>

<?php get_template_part('modules/scrolltotop'); ?>
<?php get_template_part('modules/spmenu'); ?>

<div id="wrapper">
  <aside>
    <?php dynamic_sidebar( 'Sidebar' ); ?>
  </aside>

  <div id="content">
    <div id="single-post">
      <div class="transparent-box">
        <section <?php post_class(); ?>>
          <h1><?php the_title(); ?></h1>
          <?php echo get_the_date( 'Y-m-d' ); ?>
          <?php the_content(); ?>
        </section>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>
