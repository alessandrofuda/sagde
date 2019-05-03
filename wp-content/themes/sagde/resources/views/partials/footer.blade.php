<!--footer class="content-info">
  <div class="container">
    {{-- @php dynamic_sidebar('sidebar-footer') @endphp --}}
  </div>
</footer-->

<footer id="footer" class="bg-8">
  <div class="wrapper">
    <div class="wrapper-padded">
      <div id="footer-structure" class="row">
        <div class="col-md-3">
          <div class="logo">
            <img src="@asset('images/logo-placeholder.png')" alt="Sagde" />
          </div>
        </div>
        <div class="col-md-3">
            <div class="rag-soc-footer">
                <span class="rag-soc-1">Distribuzione Elettronica</span>
                <span class="rag-soc-2">Studio Associato Giornalistico</span>
            </div>
            <div class="sede">
                <span>Sede legale:</span>
                <span>via Corridoni, 11  20122 Milano</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="contact">
                <span></span>
                <span><i class="fa fa-mail"></i>info@distribuzioneelettronica.it</span>
                <span>Cell: +39 000 0000000 </span>
                <span>CF P.Iva 09451630961</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="hamburger hamburger-footer-typoo">
              <a href="#">Privacy Policy</a> | <a href="#">Cookie Policy</a>
            </div>    
        </div>

        
        



      </div>
    </div>
  @php dynamic_sidebar('sidebar-footer') @endphp  
  </div>
</footer>