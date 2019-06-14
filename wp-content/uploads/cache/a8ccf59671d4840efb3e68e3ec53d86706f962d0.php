<header id="header" class="not-scrolled-header">
	<div class="header-bg"></div>
	<div class="wrapper">
		<div class="wrapper-padded">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="logo">
					<a class="navbar-brand" href="<?php echo e(home_url('/')); ?>">
						<img class="logo-with-txt" src="<?= App\asset_path('images/sagde_logo_header.png'); ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>">
						<img class="logo-without-txt" src="<?= App\asset_path('images/sagde_logo_header_without_txt.png'); ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>">
					</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<?php if(has_nav_menu('primary_navigation')): ?>
						<?php echo wp_nav_menu(['theme_location' => 'primary_navigation','menu_class' => 'navbar-nav mr-0 ml-auto']); ?>

					<?php endif; ?>
				</div>
			</nav>
		</div>
	</div>
</header>