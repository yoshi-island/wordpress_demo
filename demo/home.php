<?php get_header(); ?>
<?php get_template_part('modules/headermenu'); ?>

<?php get_template_part('modules/scrolltotop'); ?>
<?php get_template_part('modules/spmenu'); ?>

<div id="wrapper">
  <aside>
    <?php dynamic_sidebar( 'Sidebar' ); ?>
  </aside>

  <div id="content">
    <div id="posts">
      <div class="transparent-box">
        <?php while ( have_posts() ) : the_post(); ?>
          <section <?php post_class('post-list'); ?>>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(array(80, 80)); ?>
            </a>
            <?php echo get_the_date( 'Y-m-d' ); ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_category( '</span><span class="category-item">' ); ?>
          </section>
        <?php endwhile; ?>
        <div id="page-navi">
          <div id="previous-posts">
            <?php previous_posts_link("&laquo; Newer Posts") ?>
          </div>
          <div id="next-posts">
            <?php next_posts_link("Older Posts &raquo;"); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>
