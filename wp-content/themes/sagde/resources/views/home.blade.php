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

      <!--div class="baloon-1 madscroll-slow" data-scroll-speed="3">
        <div class="no-the-100">
          <img data-src="@ asset('images/baloon-1.png')" alt="Sagde" class="lazy" />
        </div>
      </div-->

      <!--div class="baloon-2 madscroll-slow bg-8" data-scroll-speed="4">
      </div-->

      <!--div class="baloon-3 madscroll-fast" data-scroll-speed="3">
        <div class="no-the-100">
          <img data-src="@ asset('images/baloon-3.png')" alt="Sagde" class="lazy" />
        </div>
      </div-->
      <div class="fullscreen-cta fullscreen-cta-center">
        <div id="top-titles" class="wrapper">
          <div class="wrapper-padded">
            <div class="wrapper-padded-more">
              <div class="m_____adscroll-slow aligncenter" data-scroll-speed="6">
                  {{-- <h2 class="txt-8 allupper">Non il solito Ufficio Stampa</h2> --}}
                  <h2 class="txt-8 allupper">{{ get_field('title_1') }}</h2>
                  <h2 class="txt-8 allupper">{{ get_field('title_2') }}</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!--block 1-->
  <div id="menu-item-15-anchor" class="wrapper bg-10">
    <div class="wrapper-padded-more">
      <div id="chi-siamo" class="block-spacing aligncenter" style="background-image: url('@asset('images/cosa-facciamo.jpg')');"> {{--sfondo2.jpg--}}
        <!--h2 class="title txt-8 allupper">Chi siamo: non il solito ufficio stampa</h2-->
        <div class="container-fluid">
          <div class="row row-1">
            <div class="col-md-10 offset-md-1 sx">
              <div class="chi-siamo-1-container">
                  <h4 class="txt-8 content-1">
                      {{-- SAGDE nasce dall'esperienza ultradecennale delle sue fondatrici nell'editoria di settore, supportata da una formazione universitaria tecnica.<br>
                      Forti delle capacità acquisite sul campo, ci proponiamo ad aziende produttrici, associazioni, imprese, enti e associazioni per sviluppare insieme piani di comunicazione “taylor made”, prodotti editoriali e servizi a supporto delle attività di marketing e comunicazione.<br>
                      L'obiettivo di SAGDE è ben preciso: accorciare le distanze tra gli operatori e la stampa.<br>
                  </h4>
                  <br><br><br><br>
                  <h4 class="txt-8 content-2">
                      Grazie alla preparazione tecnica e giornalistica nostra e dei nostri collaboratori, il nostro obiettivo è supportare le piccole e le grandi realtà che operano in diversi settori, agricolo, zootecnico, agro-alimentare, trasporti, logistica.<br>
                      Proponiamo strategie di comunicazione B2B e B2C sostenibili e orientate ad obiettivi concreti che esaltino e valorizzino l'identità di chi ci sceglie, così da raggiungere una posizione definita e facilmente individuabile nel mercato di riferimento.<br> --}}

                      {!! get_field('text_1') !!}
                  </h4>
                  <br><br><br><br>
                  <h4 class="txt-8 content-2">
                      {!! get_field('text_2') !!}
                  </h4>
                  <div class="btn light" style="box-shadow:1px 1px 10px #FFF;">
                      <div id="cta-0" class="inner allupper" style="/*text-shadow:2px 2px 0px #000, -1px -1px 0px #000;color:#FFF;*/">Contattaci</div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--div class="baloon-5 madscroll-slow bg-10" data-scroll-speed="5"></div-->
  <!--div class="baloon-7 madscroll-slow" data-scroll-speed="6">
    <div class="no-the-100">
      <img src="@ asset('images/baloon-1.png')" alt="Sagde" class="" />
    </div>
  </div-->
  <!--div class="baloon-8 madscroll-slow bg-2" data-scroll-speed="4"></div-->

  <!--block 4-->
  <div id="menu-item-16-anchor" class="wrapper b_g-11">
    <div class="wrapper-padded-more">
      <div class="block-spacing aligncenter txt-8">
        <div class="container-fluid">
            <div class="col-12 padding-0" style="z-index: 10">
              <div class="cosa-facciamo-container col12 aligncenter">
                  <img class="services style-svg" src="@asset('images/services/no-bg/00_Sito-head.svg')"> {{-- .style-svg !important!! --}}
                  <div class="row">
                      <!--div id="anchor-1"></div-->

                      <div id="anchor-1" class="col-md-6  serv-sx">
                        <div class="serv-sx-img-container">
                          <img class="services img-sx uff-sta-sx" src="@asset('images/services/no-bg/01_sx_Sito-ufficio e stampa.png')">
                        </div>
                      </div>
                      <div class="col-md-6 serv-dx">
                        <div class="serv-dx-img-container">
                          <img class="services img-dx uff-sta-dx" src="@asset('images/services/no-bg/01_dx_Sito-ufficio e stampa.png')">
                        </div>
                      </div>

                      <!--div id="anchor-2"></div-->
                      
                      <div id="anchor-2" class="col-md-6  serv-sx">
                        <div class="serv-sx-img-container">
                          <img class="services img-sx soc-med-sx" src="@asset('images/services/no-bg/02_sx_Sito-Social media.png')">
                        </div>
                      </div>
                      <div class="col-md-6 serv-dx">
                        <div class="serv-dx-img-container">
                          <img class="services img-dx soc-med-dx" src="@asset('images/services/no-bg/02_dx_Sito-Social media.png')">
                        </div>
                      </div>

                      <!--div id="anchor-3"></div-->
                      
                      <div id="anchor-3" class="col-md-6  serv-sx">
                        <div class="serv-sx-img-container">
                          <img class="services img-sx lead-gen-sx" src="@asset('images/services/no-bg/03_sx_Sito-lead generation.png')">
                        </div>
                      </div>
                      <div class="col-md-6 serv-dx">
                        <div class="serv-dx-img-container">
                          <img class="services img-dx lead-gen-dx" src="@asset('images/services/no-bg/03_dx_Sito-lead generation.png')">
                        </div>
                      </div>
                      
                      <!--div id="anchor-4"></div-->
                      
                      <div id="anchor-4" class="col-md-6  serv-sx">
                        <div class="serv-sx-img-container">
                          <img class="services img-sx graf-des-sx" src="@asset('images/services/no-bg/04_sx_Sito-Grafica e Design.png')">
                        </div>
                      </div>
                      <div class="col-md-6 serv-dx">
                        <div class="serv-dx-img-container">
                          <img class="services img-dx graf-des-dx" src="@asset('images/services/no-bg/04_dx_Sito-Grafica e Design.png')">
                        </div>
                      </div>
                      
                      <!--div id="anchor-5"></div-->
                      
                      <div id="anchor-5" class="col-md-6  serv-sx">
                        <div class="serv-sx-img-container">
                          <img class="services img-sx serv-giorn-sx" src="@asset('images/services/no-bg/05_sx_Sito-service giornalistico.png')">
                        </div>
                      </div>
                      <div class="col-md-6 serv-dx">
                        <div class="serv-dx-img-container">
                          <img class="services img-dx serv-giorn-dx" src="@asset('images/services/no-bg/05_dx_Sito-service giornalistico.png')">
                        </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="filter-opacity" style="z-index:9"></div>
          <!--div class="row row-bottom bg-12">
            <div class="col-12 padding-0">
            </div-->
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <!--block 6-->
  <div id="menu-item-18-anchor" class="wrapper bg-6 hide-overflow contact-form-bg" style="background-image: url('@asset('images/contattaci.jpg')');">
    <!--div class="baloon-9 madscroll-slow" data-scroll-speed="8">
      <div class="no-the-100">
        <img src="@ ___asset('images/baloon-1.png')" alt="Sagde" />
      </div>
    </div-->
    <div class="wrapper-padded-more">
      <div class="block-spacing aligncenter">
        <div class="form-hold">
          {{-- <h2 class="title allupper">Vuoi informazioni?<br/>Scrivici</h2> --}}
          <h2 class="title allupper">{!! get_field('contact_form_title') !!}</h2>
          {!! do_shortcode( '[contact-form-7 id="20" title="Contact form 1"]' ) !!}
        </div>
      </div>
    </div>
  </div>

@endsection
