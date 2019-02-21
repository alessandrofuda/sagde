<header id="header" class="not-scrolled-header">
<div class="header-bg"></div>
<div class="wrapper">
  <div class="wrapper-padded">
    <div id="header-structure">
      <div class="logo">
        <a href="<?php echo e(home_url('/')); ?>"><img src="<?= App\asset_path('images/logo-placeholder.png'); ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>" /></a>
      </div>
      <div class="hamburger hamburger-typoo">
      	<nav class="nav-primary">
	      <?php if(has_nav_menu('primary_navigation')): ?>
	        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

	      <?php endif; ?>
	    </nav>
        <span id="goToSectionOne">Contattaci</span>
      </div>
    </div>
  </div>
</div>
</header>