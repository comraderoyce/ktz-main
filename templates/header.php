<header class="z-max">
  <nav class="db dt-l w-100 border-box ph3-l fixed bg-white bb b--light-gray shadow-1 z-max">
    <a class="f2 db dtc-l link dim w-25 w-25-l tc tl-l mb0-l" href="<?= esc_url(home_url(  '/')); ?>" title="Home">
    <i class="ai scorpio"></i>
      <?php bloginfo('name'); ?>
    </a>


    <div class="db dtc-l v-btm w-100 w-75-l tc tr-l">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'f6 fw6 ttu v-mid tracked dib']);
      endif;
      ?>
    </div>
  </nav>
  </div>
</header>
