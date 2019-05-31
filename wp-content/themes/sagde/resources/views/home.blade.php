{{--
  Template Name: Sagde Homepage
--}}

@extends('layouts.app')

@section('header-background-image')
  <div class="box-fullscreen test-gradient lazy coverize lazy" data-src="{{ get_field('header_background_image')['url'] }}" style="max-width:100%;"></div>
@endsection

@section('content')
  {{-- @while(have_posts()) @php the_post() @endphp
  abcd
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile --}}
  <div class="box-fullscreen-fair hide-overflow">

      <div class="baloon-1 madscroll-slow" data-scroll-speed="3">
        <div class="no-the-100">
          <img data-src="@asset('images/baloon-1.png')" alt="Sagde" class="lazy" />
        </div>
      </div>

      <div class="baloon-2 madscroll-slow bg-8" data-scroll-speed="4">
      </div>

      <div class="baloon-3 madscroll-fast" data-scroll-speed="3">
        <div class="no-the-100">
          <img data-src="@asset('images/baloon-3.png')" alt="Sagde" class="lazy" />
        </div>
      </div>
      <div class="fullscreen-cta fullscreen-cta-center">
        <div id="top-titles" class="wrapper">
          <div class="wrapper-padded">
            <div class="wrapper-padded-more">
              <div class="madscroll-slow aligncenter" data-scroll-speed="6">
                  <!--h1 class="txt-8 allupper">{{-- get_field('title_1') --}}</h1>
                  <h2 class="txt-8 allupper">{{-- get_field('title_2') --}}</h2-->
                  <h1 class="txt-8 allupper">
                      <?php echo do_shortcode( '[typed string0="'.get_field('title_1').'" typeSpeed="80" startDelay="500" backSpeed="40" backDelay="100"]' ) ?> 
                  </h1>
                  <h2 class="txt-8 allupper" style="height: 50px;">
                      <?php echo do_shortcode( '[typed string0="Studio Associato Giornalistico" string1="Distribuzione Elettronica" string2="'.get_field('title_2').'" typeSpeed="50" startDelay="2000" backSpeed="40" backDelay="100" loopCount="2" loop="1"]' ) ?>  
                  </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!--block 1-->
  <div id="menu-item-15-anchor" class="wrapper bg-10">
    <div class="wrapper-padded-more">
      <div id="chi-siamo" class="block-spacing aligncenter" style="background-image: url('@asset('images/sfondo2.jpg')');">
        <!--h2 class="title txt-8 allupper">Chi siamo: non il solito ufficio stampa</h2-->
        <div class="container-fluid">
          <div class="row row-1">
            <div class="col-md-12 padding-0 sx">
              <div class="chi-siamo-1-container">
                  <h4 class="txt-8 content-1">
                      SAGDE nasce dall'esperienza ultradecennale delle sue fondatrici nell'editoria di settore, supportata da una formazione universitaria tecnica.<br>
                      Forti delle capacità acquisite sul campo, ci proponiamo ad aziende produttrici, associazioni, imprese, enti e associazioni per sviluppare insieme piani di comunicazione “taylor made”, prodotti editoriali e servizi a supporto delle attività di marketing e comunicazione.<br>
                      L'obiettivo di SAGDE è ben preciso: accorciare le distanze tra gli operatori e la stampa.<br>
                  </h4>
                  <br><br><br><br>
                  <h4 class="txt-8 content-2">
                      Grazie alla preparazione tecnica e giornalistica nostra e dei nostri collaboratori, il nostro obiettivo è supportare le piccole e le grandi realtà che operano in diversi settori, agricolo, zootecnico, agro-alimentare, trasporti, logistica.<br>
                      Proponiamo strategie di comunicazione B2B e B2C sostenibili e orientate ad obiettivi concreti che esaltino e valorizzino l'identità di chi ci sceglie, così da raggiungere una posizione definita e facilmente individuabile nel mercato di riferimento.<br>
                  </h4>
                  <div class="btn light" style="border:2px solid #000; box-shadow:1px 1px 10px #FFF;">
                      <div id="cta-0" class="inner allupper" style="text-shadow: 2px 2px 0px #FFF, -1px -1px 0px #000; color: #888;">Contattaci</div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--div class="baloon-5 madscroll-slow bg-10" data-scroll-speed="5"></div-->
  <div class="baloon-7 madscroll-slow" data-scroll-speed="6">
    <div class="no-the-100">
      <img src="@ asset('images/baloon-1.png')" alt="Sagde" class="" />
    </div>
  </div>
  <div class="baloon-8 madscroll-slow bg-2" data-scroll-speed="4"></div>

  <!--block 4-->
  <div id="menu-item-16-anchor" class="wrapper b_g-11">
    <div class="wrapper-padded-more">
      <div class="block-spacing aligncenter txt-8">
        <div class="container-fluid">
          <div class="row row-top cosa-facciamo-bg" style="background-image: url('@asset('images/cosa-facciamo.jpg')')">
            <div class="col-12 padding-0" style="z-index: 10">
              <div class="cosa-facciamo-container col12 aligncenter">
                  <img class="services" src="@asset('images/sagde-servizi.jpg')">
                  <div class="btn light">
                      <div id="cta-0" class="inner allupper">Contattaci</div>
                  </div>
              </div>
            </div>
            <div class="filter-opacity" style="z-index:9"></div>
          </div>
          <div class="row row-bottom bg-12">
            <div class="col-12 padding-0">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--block 6-->
  <div id="menu-item-18-anchor" class="wrapper bg-6 hide-overflow contact-form-bg" style="background-image: url('@asset('images/contattaci.jpg')');">
    <div class="baloon-9 madscroll-slow" data-scroll-speed="8">
      <div class="no-the-100">
        <img src="@asset('images/baloon-1.png')" alt="Sagde" />
      </div>
    </div>
    <div class="wrapper-padded-more">
      <div class="block-spacing aligncenter">
        <div class="form-hold">
          <h2 class="title allupper">Vuoi informazioni?<br/>Scrivici</h2>
          {!! do_shortcode( '[contact-form-7 id="20" title="Contact form 1"]' ) !!}
        </div>
      </div>
    </div>
  </div>

@endsection
