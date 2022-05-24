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

<script>
  // スクロールするたびにfuwaAnimation()を実行する
  window.addEventListener("scroll", function(){
    for (var j = 1;  j <= 25;  j++) {
      fuwaAnimation("fuwa" + j);
    };
  });

  function fuwaAnimation(fuwaId){
    // 要素が画面に入ったら「animate__fadeInUp」クラスを付与（animate.css）
    const fuwa = document.getElementById(fuwaId);
    const fuwaPoint = fuwa.getBoundingClientRect().top;
    const taegetPoint = window.innerHeight;
  
    if (fuwaPoint < taegetPoint) {
      fuwa.classList.add("animate__animated");
      fuwa.classList.add("animate__fadeInUp");
    } else {
      fuwa.classList.remove("animate__animated");
      fuwa.classList.remove("animate__fadeInUp");
    };
  };
</script>

<?php get_footer(); ?>

