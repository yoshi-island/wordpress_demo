<?php get_header(); ?>
<?php get_template_part('modules/headermenu'); ?>

<?php get_template_part('modules/scrolltotop'); ?>
<?php get_template_part('modules/spmenu'); ?>

<div id="wrapper">
  <aside>
    <?php dynamic_sidebar( 'Sidebar' ); ?>
  </aside>

  <div id="content">
    <div id="site-description">
      <div class="transparent-box">
        <h1>サイト説明</h1>
        このサイトの説明だよ
      </div>
    </div>

    <div id="recent-post">
      <div class="transparent-box">
        <h1>新着記事</h1>
        <ul>
          <!-- 新着記事リスト取得 -->
          <?php
            $args = array( 'posts_per_page' => 5, 'order'=> 'DESC', 'orderby' => 'date' );
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
            setup_postdata( $post );
          ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <?php the_date(); ?> <?php the_title(); ?>
              </a>
            </li>
          <?php
            endforeach; 
            wp_reset_postdata();
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

