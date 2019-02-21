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
              <h1 class="txt-8 allupper">Giving you the freedom to choose your future</h1>
              <h2 class="txt-8 allupper">#YourNextChange</h2>
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
        <span class="text-shadow underline">
          Wexplore è la prima piattaforma tecnologica di servizi di carriera, consulenza HR  e formazione, sia per gli individui che per le aziende, per lo sviluppo di percorsi professionali internazionali.
        </span>
      </h3>
    </div>
  </div>
</div>

<div class="wrapper bg-10">
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter">
      <div class="image-icon">
        <div class="no-the-100">
          <img data-src="@asset('images/wexplore-screen.svg')" alt="Sagde" class="lazy" />
        </div>
      </div>

      <h4 class="txt-8">
        La nostra piattaforma fornisce servizi di carriera digitali tramite VIC – il nostro Virtual International Consultant, e-learning e consulenza, in un mix unico di intelligenza artificiale e relazione umana, content creation, blockchain e multiculturalità.
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
          Vogliamo offrire ai neolaureati, ai professionisti e alle aziende la libertà di scegliere il loro futuro e affrontare le sfide globali del mercato del lavoro: per questo mettiamo a disposizione più di 30 anni di esperienza nei servizi di carriera, un network internazionale costituito da più di 50 Paesi nel mondo e una strategia che combina i vantaggi della tecnologia con l’insostituibile competenza umana.
      </h3>
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

      <h2 class="allupper">Global Orientation Test</h2>

      <h3 class="aligncenter">
        Inizia il viaggio per scoprire di più su di te: che tipo di società e quali paesi corrispondono meglio ai tuoi valori e le tue preferenze?
      </h3>
      <div class="btn">
        <div class="inner allupper">
          <a href="https://www.wexplore.co/en/register" class="absl"></a>scopri di più
        </div>
      </div>
    </div>
  </div>
</div>

<div class="wrapper bg-11">
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter txt-8">

      <h2 class=" allupper">timeline wexplore</h2>

      <div class="timeline-structure">

        <div class="timeline-block">
          <h3 class="allupper">Marzo</h3>
          <h5 class="txt-1">Go live nuovo sito e Wexplore 2.0</h5>
        </div>

        <div class="timeline-block">
          <h3 class="allupper">Aprile</h3>
          <h5 class="txt-1">Release WOW (Wexplore Original webinar) e Blockchain workshop e application</h5>
        </div>

        <div class="timeline-block">
          <h3 class="allupper">Maggio</h3>
          <h5 class="txt-1">Lancio VIC (Virtual International Consultant) per le aree: carriere internazionali, gestione team globali, negoziazioni cross-culturali</h5>
        </div>

        <div class="timeline-block">
          <h3 class="">GIUGNO - onwards</h3>
          <h5 class="txt-1">Ottimizzazione e sviluppo delle linee di servizio Wexplore</h5>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="wrapper bg-8">
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter">

      <div class="image-icon">
        <div class="no-the-100">
          <img data-src="@asset('images/wexplore-announcment.svg')" alt="Sagde" class="lazy" />
        </div>
      </div>

      <h3>
        <span class="text-shadow underline">
          Business Development Manager cercasi!
        </span>
      </h3>

      <h4>Se anche tu come noi sei convinto che il mercato globale vada affrontato con un approccio e con degli strumenti nuovi;<br />
        se ti appassiona contribuire alla crescita delle persone verso una realizzazione di sé;<br />
        se ti senti un cittadino del mondo e non poni limiti (né mentali, né geografici) alle culture con cui vuoi entrare in contatto;<br />
        se come noi ritieni che “un obiettivo senza un piano d’azione è solo un desiderio”;<br />
        se hai fame di nuove avventure e sete di conoscere e di farti conoscere, allora vogliamo incontrarti per crescere insieme e raggiungere nuovi livelli.<br />
        Come?</h4>

      <div class="btn">
        <div class="inner allupper">
          AAAAAAAAAA
        </div>
      </div>

    </div>
  </div>
</div>

<div class="wrapper bg-6 hide-overflow">
  <div class="baloon-9 madscroll-slow" data-scroll-speed="8">
    <div class="no-the-100">
      <img src="@asset('images/baloon-1.png')" alt="Sagde" />
    </div>
  </div>

  <div id="SectionOne" class="wrapper-padded-more">
    <div class="block-spacing aligncenter">

      <h2 class="allupper">Hai BISOGNO DI INFORMAZIONI?<br/>Contattaci</h2>
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
