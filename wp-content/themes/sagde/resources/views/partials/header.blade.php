<header id="header" class="not-scrolled-header">
<div class="header-bg"></div>
<div class="wrapper">
  <div class="wrapper-padded">
    <div id="header-structure">
      <div class="logo">
        <a href="{{ home_url('/') }}"><img src="@asset('images/logo-placeholder.png')" alt="{{ get_bloginfo('name', 'display') }}" /></a>
      </div>
      <div class="hamburger hamburger-typoo">
      	<nav class="nav-primary">
          
	      @if (has_nav_menu('primary_navigation'))
	        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
	      @endif

	    </nav>
        <!--span id="goToSectionOne">Contattaci</span-->
      </div>
    </div>
  </div>
</div>
</header>