<header id="header" class="not-scrolled-header">
	<div class="header-bg"></div>
	<div class="wrapper">
		<div class="wrapper-padded">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="logo">
					<a class="navbar-brand" href="{{ home_url('/') }}">
						{{-- 
						 <img class="logo-with-txt" src="@asset('images/sagde_logo_header.png')" alt="{{ get_bloginfo('name', 'display') }}">
						 <img class="logo-without-txt" src="@asset('images/sagde_logo_header_without_txt.png')" alt="{{ get_bloginfo('name', 'display') }}"> 
						--}}

						<!--img class="logo-with-txt" src="@ asse t('images/sagde_logo_header.png')" alt="{{-- get_bloginfo('name', 'display') --}}">
						<img class="logo-without-txt" src="@ asse t('images/sagde_logo_header_without_txt.png')" alt="{{-- get_bloginfo('name', 'display') --}}"-->
						<img class="logo-with-txt" src="{{ get_field('header_logo')['url'] }}" alt="{{ get_bloginfo('name', 'display') }}">
						<img class="logo-without-txt" src="{{ get_field('header_logo_on_scroll')['url'] }}" alt="{{ get_bloginfo('name', 'display') }}">
					</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					@if (has_nav_menu('primary_navigation'))
						{!! wp_nav_menu(['theme_location' => 'primary_navigation','menu_class' => 'navbar-nav mr-0 ml-auto']) !!}
					@endif
				</div>
			</nav>
		</div>
	</div>
</header>