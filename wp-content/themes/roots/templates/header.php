<header class="banner container" role="banner">

  <div class="row">
    <div class="col-lg-4">
      <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
      <nav class="nav-main" role="navigation">
        <ul>
          <li>
            <?php if (has_nav_menu('primary_navigation')) : wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills')); endif;?>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
