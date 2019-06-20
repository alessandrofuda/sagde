<!--footer class="content-info">
  <div class="container">
    {{-- @php dynamic_sidebar('sidebar-footer') @endphp --}}
  </div>
</footer-->

<footer id="footer" class="bg-8">
  <div class="wrapper">
    <div class="wrapper-padded" style="width: inherit;">
      <div id="footer-structure" class="row">
        <div class="col-12 col-md-2">
            <div class="logo">
                <a class="navbar-brand" href="{{ home_url('/') }}">
                    <img src="@asset('images/sagde_logo_header.png')" alt="{{ get_bloginfo('name', 'display') }}">
                </a>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="rag-soc-footer">
                <span class="rag-soc-1">Distribuzione Elettronica</span>
                <span class="rag-soc-2">Studio Associato Giornalistico</span>
            </div>
            <div class="sede">
                <span>Sede legale:</span>
                <span>via Corridoni, 11  20122 Milano</span>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="contact">
                <span></span>
                <span>
                    <svg width="30" height="25" class="octicon octicon-mail" viewBox="0 0 14 16" version="1.1" aria-hidden="true"><path fill-rule="evenodd" d="M0 4v8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H1c-.55 0-1 .45-1 1zm13 0L7 9 1 4h12zM1 5.5l4 3-4 3v-6zM2 12l3.5-3L7 10.5 8.5 9l3.5 3H2zm11-.5l-4-3 4-3v6z"></path></svg>info@distribuzioneelettronica.it
                </span>
                <span>
                    <svg width="30" height="20" class="octicon octicon-device-mobile" viewBox="0 0 10 16" version="1.1" aria-hidden="true"><path fill-rule="evenodd" d="M9 0H1C.45 0 0 .45 0 1v14c0 .55.45 1 1 1h8c.55 0 1-.45 1-1V1c0-.55-.45-1-1-1zM5 15.3c-.72 0-1.3-.58-1.3-1.3 0-.72.58-1.3 1.3-1.3.72 0 1.3.58 1.3 1.3 0 .72-.58 1.3-1.3 1.3zM9 12H1V2h8v10z"></path></svg> Cell: +39 000 0000000
                </span>
                <span>
                    <svg width="30" height="25" class="octicon octicon-calendar" viewBox="0 0 14 16" version="1.1" aria-hidden="true"><path fill-rule="evenodd" d="M13 2h-1v1.5c0 .28-.22.5-.5.5h-2c-.28 0-.5-.22-.5-.5V2H6v1.5c0 .28-.22.5-.5.5h-2c-.28 0-.5-.22-.5-.5V2H2c-.55 0-1 .45-1 1v11c0 .55.45 1 1 1h11c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm0 12H2V5h11v9zM5 3H4V1h1v2zm6 0h-1V1h1v2zM6 7H5V6h1v1zm2 0H7V6h1v1zm2 0H9V6h1v1zm2 0h-1V6h1v1zM4 9H3V8h1v1zm2 0H5V8h1v1zm2 0H7V8h1v1zm2 0H9V8h1v1zm2 0h-1V8h1v1zm-8 2H3v-1h1v1zm2 0H5v-1h1v1zm2 0H7v-1h1v1zm2 0H9v-1h1v1zm2 0h-1v-1h1v1zm-8 2H3v-1h1v1zm2 0H5v-1h1v1zm2 0H7v-1h1v1zm2 0H9v-1h1v1z"></path></svg> CF P.Iva 09451630961
                </span>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="hamburger hamburger-footer-typoo">
              <a href="privacy-policy">Privacy Policy</a> | <a href="cookies-policy">Cookie Policy</a>
            </div>    
        </div>
      </div>
    </div>
  @php dynamic_sidebar('sidebar-footer') @endphp  
  </div>
  <div id="swich-top" class="top-btn fixed">
    <svg width="50" height="50" class="octicon octicon-chevron-up" viewBox="0 0 10 16" version="1.1" aria-hidden="true"><path fill-rule="evenodd" d="M10 10l-1.5 1.5L5 7.75 1.5 11.5 0 10l5-5 5 5z"></path></svg>
  </div>
</footer>
