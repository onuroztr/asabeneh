<?php
// Add this markup inside your header.php file where you want the navbar to appear.
?>
<nav class="wp-navbar" role="navigation" aria-label="Primary">
  <a class="wp-navbar__brand" href="<?php echo esc_url(home_url('/')); ?>">
    <?php bloginfo('name'); ?>
  </a>

  <button
    class="wp-navbar__toggle"
    type="button"
    data-toggle="wp-navbar"
    aria-label="Menüyü aç/kapat"
    aria-expanded="false"
  >
    <span class="wp-navbar__icon" aria-hidden="true">☰</span>
    <span class="wp-navbar__label">Menü</span>
  </button>

  <div class="wp-navbar__menu-wrapper">
    <?php
    wp_nav_menu([
      'theme_location'  => 'primary',
      'container'       => false,
      'menu_class'      => 'wp-navbar__menu',
      'fallback_cb'     => false,
      'depth'           => 2,
      'link_before'     => '<span>',
      'link_after'      => '</span>',
    ]);
    ?>
  </div>
</nav>
