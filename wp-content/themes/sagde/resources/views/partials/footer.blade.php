<!--footer class="content-info">
  <div class="container">
    {{-- @php dynamic_sidebar('sidebar-footer') @endphp --}}
  </div>
</footer-->

<footer id="footer" class="bg-8">
  <div class="wrapper">
    <div class="wrapper-padded">
      <div id="footer-structure">
        <div class="logo">
          <img src="@asset('images/wexplore-logo-color.svg')" alt="Sagde" />
        </div>
        <div class="hamburger hamburger-footer-typoo">
          <a href="#">Privacy Policy</a> | <a href="#">Cookie Policy</a>
        </div>
      </div>
    </div>
  @php dynamic_sidebar('sidebar-footer') @endphp  
  </div>
</footer>