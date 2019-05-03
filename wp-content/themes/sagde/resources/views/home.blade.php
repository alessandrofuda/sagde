{{--
  Template Name: Sagde Homepage
--}}

@extends('layouts.app')

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
              <h1 class="txt-8 allupper">{{ get_field('title_1') }}</h1>
              <h2 class="txt-8 allupper">{{ get_field('title_2') }}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!--intro-->
<!--div class="wrapper bg-8">
  <div class="wrapper-padded-more">
    <div class="block-spacing">
      <h3 class="aligncenter">
        <span class="text-shadow dark">{{-- !! get_field('introduction') !!--}}</span>
      </h3>
    </div>
  </div>
</div-->

<!--block 1-->
<div id="menu-item-15-anchor" class="wrapper bg-10">
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter">
      <!--div class="image-icon">
        <div class="no-the-100">
          <img data-src="{{-- get_field('clip_block_1')['url'] --}}" alt="Sagde" class="lazy" />          
        </div>
      </div-->
      <h2 class="title txt-8 allupper">{{-- get_field('title_block_1') --}} Chi siamo: non il solito ufficio stampa</h2>

      <div class="container-fluid">
        <div class="row row-1">
          <div class="col-md-6 padding-0 sx">
            <div class="chi-siamo-1-container">
              <h4 class="txt-8">Comunicare significa suscitare l’interesse e la curiosità attraverso un messaggio diretto, semplice, immediato e soprattutto coerente e corretto.</h4>
              <h4 class="txt-8">Noi sappiamo come fare</h4>
              <div class="btn light">
                <div id="cta-0" class="inner allupper">Contattaci</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 padding-0">
            <img class="front_img" src="{{ get_field('image_block_1')['url'] }}" alt="">
          </div>
        </div>
        <div class="row row-2">
          <div class="col-md-6 bottom padding-0 sx">
            <div class="chi-siamo-2-container">
              <h4 class="txt-8">SAGDE nasce dall’esperienza ultradecennale delle sue fondatrici nell’editoria di settore, supportata da una formazione universitaria tecnica.</h4>
              <h4 class="txt-8">Forti delle capacità acquisite sul campo, ci proponiamo ad aziende produttrici, associazioni, imprese, enti e associazioni per sviluppare insieme piani di comunicazione “taylor made”, prodotti editoriali e servizi a supporto delle attività di marketing e comunicazione.</h4>
              <h4 class="txt-8">L'obiettivo di SAGDE è ben preciso: accorciare le distanze tra gli operatori e la stampa.</h4>
            </div>
          </div>
          <div class="col-md-6 bottom padding-0 dx">
            <div class="chi-siamo-2-container">
              <h4 class="txt-8">Grazie alla preparazione tecnica e giornalistica nostra e dei nostri collaboratori, il nostro obiettivo è supportare le piccole e le grandi realtà che operano in diversi settori,agricolo, zootecnico, agro-alimentare, trasporti, logistica.</h4>
              <h4 class="txt-8">Proponiamo strategie di comunicazione B2B e B2C sostenibili e orientate ad obiettivi concreti che esaltino e valorizzino l’identità di chi ci sceglie, così da raggiungere una posizione definita e facilmente individuabile nel mercato di riferimento.</h4>
            </div>
          </div>
        </div>
      </div> 
      <!--div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <img class="front_img" src="{{-- get_field('image_block_1')['url'] --}}" alt="">
          </div>
        </div>
      </div-->
      <!--div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <img src="@ asset('images/image-placeholder-350x350.png')" alt="..." class="rounded-circle">
          </div>
          <div class="col-md-4">
            <img src="@ asset('images/image-placeholder-350x350.png')" alt="..." class="rounded-circle">
          </div>
          <div class="col-md-4">
            <img src="@ asset('images/image-placeholder-350x350.png')" alt="..." class="rounded-circle">
          </div>
        </div>
      </div-->
      <!--h4 class="txt-8">{{-- get_field('text_block_1') --}}</h4-->
      <!--div class="btn light">
        <div id="cta-0" class="inner allupper">Contattaci</div>
      </div-->
    </div>
  </div>
</div>

<!--block 2-->
<!--div class="wrapper bg-8">
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter">

      <div class="image-icon">
        <div class="no-the-100">
          <img data-src="{{-- get_field('clip_block_2')['url'] --}}" alt="Sagde" class="lazy" />
        </div>
      </div>
      <h2 class="txt-8 allupper">{{--get_field('title_block_2')--}}</h2>
      <h3 class="aligncenter">{{-- !! get_field('text_block_2') !! --}}</h3>
      <div class="container-fluid four-blocks">
          <div class="row">
            <div class="col-md-3">
              <img src="@ asset('images/image-placeholder-350x350.png')">              
            </div>
            <div class="col-md-3">
              <img src="@ asset('images/image-placeholder-350x350.png')">              
            </div>
            <div class="col-md-3">
              <img src="@ asset('images/image-placeholder-350x350.png')">              
            </div>
            <div class="col-md-3">
              <img src="@ asset('images/image-placeholder-350x350.png')">              
            </div>
          </div>
      </div>
    </div>
  </div>
</div-->

<!--block 3-->
<!--div class="wrapper bg-6 hide-overflow">
  <div class="baloon-4 madscroll-slow" data-scroll-speed="3">
    <div class="no-the-100">
      <img data-src="@ asset('images/baloon-1.png')" alt="Sagde" class="lazy" />
    </div>
  </div>

  <div class="baloon-5 madscroll-slow bg-10" data-scroll-speed="5"></div>

  <div class="baloon-7 madscroll-slow" data-scroll-speed="6">
    <div class="no-the-100">
      <img src="@ asset('images/baloon-1.png')" alt="Sagde" class="" />
    </div>
  </div>

  <div class="baloon-8 madscroll-slow bg-2" data-scroll-speed="4"></div>

  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter">
      <h2 class="allupper">{{-- get_field('title_block_3') --}}</h2>
      <h3 class="aligncenter">{{-- !! get_field('text_block_3') !! --}}</h3>
      <div class="btn">
        <div class="inner allupper">
          <a href="#anchor" id="cta-1" class="absl"></a>Contattaci
        </div>
      </div>
    </div>
  </div>
</div-->

<!--block 4-->
<div id="menu-item-16-anchor" class="wrapper b_g-11">
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter txt-8">
      <div class="title" style="position:relative;">
        <h2 class="title txt-8 allupper" style="z-index:10; margin-bottom:0;">{{-- get_field('title_block_4') --}}I nostri servizi</h2>
        <div class="filter-opacity" style="z-index:-1"></div>
      </div>
      <div class="container-fluid">
        <!--div class="row">
          <div class="col-md-6">
            <div class="timeline-structure">
              <div class="timeline-block">
                <h3 class="allupper">Branding intelligence</h3>
                <h5 class="txt-1">Sed ut perspiciatis unde omnis iste natus</h5>
              </div>
              <div class="timeline-block">
                <h3 class="allupper">Web intelligence</h3>
                <h5 class="txt-1">Sed ut perspiciatis unde omnis iste natus</h5>
              </div>
              <div class="timeline-block">
                <h3 class="allupper">Media relations</h3>
                <h5 class="txt-1">Sed ut perspiciatis unde omnis iste natus</h5>
              </div>
              <div class="timeline-block">
                <h3 class="">Social Branding</h3>
                <h5 class="txt-1">Sed ut perspiciatis unde omnis iste natus</h5>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="timeline-structure">
              <div class="timeline-block">
                <h3 class="allupper">Branding intelligence</h3>
                <h5 class="txt-1">Sed ut perspiciatis unde omnis iste natus</h5>
              </div>
              <div class="timeline-block">
                <h3 class="allupper">Web intelligence</h3>
                <h5 class="txt-1">Sed ut perspiciatis unde omnis iste natus</h5>
              </div>
              <div class="timeline-block">
                <h3 class="allupper">Media relations</h3>
                <h5 class="txt-1">Sed ut perspiciatis unde omnis iste natus</h5>
              </div>
              <div class="timeline-block">
                <h3 class="">Social Branding</h3>
                <h5 class="txt-1">Sed ut perspiciatis unde omnis iste natus</h5>
              </div>
            </div>
          </div>
        </div-->
        <div class="row row-top">
          <div class="col-12 padding-0" style="z-index: 10">
            <div class="cosa-facciamo-container col12 alignleft">
              <h3 class="allupper">UFFICIO STAMPA: SE FAI E NON COMUNICHI, NESSUNO LO SAPRÀ</h3>
              <h4 class="txt-8">Conosciamo approfonditamente i mercati di riferimento e le dinamiche dei settori in cui operiamo. E conosciamo molto bene i diversi canali media. Il che ci permette di comunicare al meglio, mantenendo costante la visibilità di chi ci sceglie.</h4>
              <h5 class="">Studiare la migliore strategia comunicativa su misura per te è il nostro lavoro.</h5>
              <div class="btn light" style="float:right;">
                <div id="cta-0" class="inner allupper">Contattaci</div>
              </div>
            </div>
          </div>
          <div class="filter-opacity" style="z-index:9"></div>
        </div>
        <div class="row row-middle bg-11">
          <div class="col-md-6 padding-0 sx">
            <div class="cosa-facciamo-container">
              <h3 class="allupper">SOCIAL MEDIA: UN OCCHIO SEMPRE APERTO</h3>
              <h4 class="txt-8">Strumento da saper gestire, i Social Media raggiungono il più ampio e variegato target di utenti, a cui vanno fornite informazioni chiare, mirate e costanti.</h4>
              <h5 class="txt-1">Studiare e individuare i migliori canali social e un preciso calendario di gestione è il nostro lavoro</h5>
              <div class="btn light">
                <div id="cta-0" class="inner allupper">Contattaci</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 padding-0 dx">
            <div class="cosa-facciamo-container">
              <h3 class="allupper">LEAD GENERATION: IL CONTATTO PERFETTO</h3>
              <h4 class="txt-8">Generare nuovi potenziali contatti è linfa vitale per tutti.</h4>
              <h5 class="txt-1">Studiare la tua lista contatti, grazie al supporto di un Team di esperti, è il nostro lavoro</h5>
              <div class="btn light">
                <div id="cta-0" class="inner allupper">Contattaci</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-bottom bg-12">
          <div class="col-12 padding-0">
            <div class="cosa-facciamo-container">
              <h3 class="allupper">IL GIUSTO LOOK: GRAFICA E DESIGN</h3>
              <h4 class="txt-8">La prima impressione conta eccome. Il giusto look attira l’attenzione e apre la strada al messaggio comunicativo. I nostri servizi di grafica e design curano nel dettaglio l’immagine di chi lavora con noi e permettono di accrescere la percezione del brand.</h4>
              <h5 class="txt-1">Studiare il tuo Look nel rispetto della tua identità e dei tuoi valori aziendali è il nostro lavoro</h5>
              <div class="btn light">
                <div id="cta-0" class="inner allupper">Contattaci</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!--block 6-->
<div id="menu-item-18-anchor" class="wrapper bg-6 hide-overflow">
  <div class="baloon-9 madscroll-slow" data-scroll-speed="8">
    <div class="no-the-100">
      <img src="@asset('images/baloon-1.png')" alt="Sagde" />
    </div>
  </div>
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter">

      <h2 class="title allupper">Vuoi informazioni?<br/>Scrivici</h2>
      <div class="form-hold">
        {!! do_shortcode( '[contact-form-7 id="20" title="Contact form 1"]' ) !!}
      </div>

    </div>
  </div>
</div>


@endsection
