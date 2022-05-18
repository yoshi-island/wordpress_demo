<div id="spmenu-wrapper">

  <!-- ハンバーガーアイコン -->
  <div id="hamburger">
    <span class="hamburger-line" id="hamburger-line-1"></span>
    <span class="hamburger-line" id="hamburger-line-2"></span>
    <span class="hamburger-line" id="hamburger-line-3"></span>
  </div>

  <!-- SP用メニュー -->
  <div id="sp-menu">
    <div id="sp-menu-widget-area">
      <?php dynamic_sidebar( 'Sidebar-SP' ); ?>
    </div>
  </div>
</div>

<script>
  window.onload = function () {
    var wrapper = document.getElementById('spmenu-wrapper');
    var hamburger = document.getElementById('hamburger');
    hamburger.addEventListener('click', function () {
      wrapper.classList.toggle('spmenu-open'); // クリックされたら'spmenu-open'クラスを付与
    });
  };
</script>
