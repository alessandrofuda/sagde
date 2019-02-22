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
      <div class="wrapper">
        <div class="wrapper-padded">
          <div class="wrapper-padded-more">
            <div class="madscroll-slow aligncenter" data-scroll-speed="6">
              <h1 class="txt-8 allupper">sag.de</h1>
              <h2 class="txt-8 allupper">studio associato giornalistico distribuzione elettronica</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="wrapper bg-8">
  <div class="wrapper-padded-more">
    <div class="block-spacing">
      <h3 class="aligncenter">
        <span class="text-shadow dark">
          Strategia, contenuti, creatività e analisi sono le parole chiave alla base della nostra offerta. Ideiamo e gestiamo <span class="text-shadow underline">progetti di comunicazione</span> che consentono ai nostri clienti di differenziasi, aumentare il valore dei loro brand e sviluppare business per raggiungere i loro obiettivi aziendali.
        </span>
      </h3>
    </div>
  </div>
</div>

<div id="menu-item-15-anchor" class="wrapper bg-10">
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter">
      <div class="image-icon">
        <div class="no-the-100">
          <img data-src="@asset('images/wexplore-screen.svg')" alt="Sagde" class="lazy" />
        </div>
      </div>
      <h2 class="txt-8 allupper">Chi siamo</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="@asset('images/image-placeholder-350x350.png')" alt="..." class="rounded-circle">
          </div>
          <div class="col-md-4">
            <img src="@asset('images/image-placeholder-350x350.png')" alt="..." class="rounded-circle">
          </div>
          <div class="col-md-4">
            <img src="@asset('images/image-placeholder-350x350.png')" alt="..." class="rounded-circle">
          </div>
        </div>
      </div>
      <h4 class="txt-8">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
      </h4>
    </div>
  </div>
</div>

<div class="wrapper bg-8">
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter">

      <div class="image-icon">
        <div class="no-the-100">
          <img data-src="@asset('images/wexplore-world.svg')" alt="Sagde" class="lazy" />
        </div>
      </div>

      <h3 class="aligncenter">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.<br/><br/><br/>

          Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur
      </h3>
      <div class="container four-blocks">
          <div class="row">
            <div class="col-md-3">
              <img src="@asset('images/image-placeholder-350x350.png')">              
            </div>
            <div class="col-md-3">
              <img src="@asset('images/image-placeholder-350x350.png')">              
            </div>
            <div class="col-md-3">
              <img src="@asset('images/image-placeholder-350x350.png')">              
            </div>
            <div class="col-md-3">
              <img src="@asset('images/image-placeholder-350x350.png')">              
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="wrapper bg-6 hide-overflow">
  <div class="baloon-4 madscroll-slow" data-scroll-speed="3">
    <div class="no-the-100">
      <img data-src="@asset('images/baloon-1.png')" alt="Sagde" class="lazy" />
    </div>
  </div>

  <div class="baloon-5 madscroll-slow bg-10" data-scroll-speed="5"></div>

  <div class="baloon-7 madscroll-slow" data-scroll-speed="6">
    <div class="no-the-100">
      <img src="@asset('images/baloon-1.png')" alt="Sagde" class="" />
    </div>
  </div>

  <div class="baloon-8 madscroll-slow bg-2" data-scroll-speed="4"></div>

  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter">

      <h2 class="allupper">Lorem ipsum dolor sit amet</h2>

      <h3 class="aligncenter">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
      </h3>
      <div class="btn">
        <div class="inner allupper">
          <a href="#" class="absl"></a>Contattaci
        </div>
      </div>
    </div>
  </div>
</div>

<div id="menu-item-16-anchor" class="wrapper bg-11">
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter txt-8">

      <h2 class="txt-8 allupper">Cosa facciamo</h2> 

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
  </div>
</div>

<div id="menu-item-17-anchor" class="wrapper bg-8">
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter">

      <div class="image-icon">
        <div class="no-the-100">
          <img data-src="@asset('images/wexplore-announcment.svg')" alt="Sagde" class="lazy" />
        </div>
      </div>

      <h2 class="allupper">Dove siamo</h2>

      <h3>
        <span class="text-shadow underline">
          Sed ut perspiciatis unde omnis iste
        </span>
      </h3>

      <h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?<br />
      </h4>
      <div class="container google-map">
        <div class="row">
          <div class="col-md-12">
              <div class="map" style="border:1px solid black; min-height: 500px; margin:5% auto;">
                Mappa google?
              </div>
          </div>
        </div>
      </div>

      <div class="btn">
        <div class="inner allupper">
          Contattaci
        </div>
      </div>

    </div>
  </div>
</div>

<div id="menu-item-18-anchor" class="wrapper bg-6 hide-overflow">
  <div class="baloon-9 madscroll-slow" data-scroll-speed="8">
    <div class="no-the-100">
      <img src="@asset('images/baloon-1.png')" alt="Sagde" />
    </div>
  </div>
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter">
      <h2 class="allupper">Vuoi informazioni?<br/>Scrivici</h2>
      <div class="form-hold">
        <form action="{{-- route('landing-page-post') --}}" method="POST">
          {{-- csrf_field() --}}
          <div class="flex-hold flex-hold-3">

            <div class="flex-hold-child">
              <input type="text" name="firstname" placeholder="Nome" value="{{--old('firstname')--}}" required />
            </div>

            <div class="flex-hold-child">
              <input type="text" name="lastname" placeholder="Cognome" value="{{--old('lastname')--}}"required />
            </div>

            <div class="flex-hold-child">
              <input type="email" name="email" placeholder="Email" value="{{--old('email')--}}" required/>
            </div>

          </div>
          <textarea name="message" placeholder="Scrivi il tuo messaggio" required>{{--old('message')--}}</textarea>
          <div class="alignleft">
            Informativa Privacy*<br />
            <input type="checkbox" name="privacy" required />
            Dichiaro di aver preso visione dell'Informativa sulla privacy
          </div>

          <input type="submit" value="INVIA" />
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
