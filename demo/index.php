<?php get_header(); ?>
<?php get_template_part('modules/headermenu'); ?>

<?php get_template_part('modules/scrolltotop'); ?>
<?php get_template_part('modules/spmenu'); ?>

<div id="wrapper">
  <aside>
    <?php dynamic_sidebar( 'Sidebar' ); ?>
  </aside>

  <div id="content">
    <div id="default-content">
      <div class="transparent-box">
        <?php if ( have_posts() ) : ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php else : ?>
          Sorry,, page not found TT
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

