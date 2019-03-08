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
              <h1 class="txt-8 allupper">{{get_field('title_1')}}</h1>
              <h2 class="txt-8 allupper">{{get_field('title_2')}}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!--intro-->
<div class="wrapper bg-8">
  <div class="wrapper-padded-more">
    <div class="block-spacing">
      <h3 class="aligncenter">
        <span class="text-shadow dark">{!!get_field('introduction')!!}</span>
      </h3>
    </div>
  </div>
</div>

<!--block 1-->
<div id="menu-item-15-anchor" class="wrapper bg-10">
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter">
      <div class="image-icon">
        <div class="no-the-100">
          <img data-src="{{get_field('clip_block_1')['url']}}" alt="Sagde" class="lazy" />          
        </div>
      </div>
      <h2 class="txt-8 allupper">{{get_field('title_block_1')}}</h2>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <img class="front_img" src="{{get_field('image_block_1')['url']}}" alt="">
          </div>
        </div>
      </div>
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
      <h4 class="txt-8">{{get_field('text_block_1')}}</h4>
    </div>
  </div>
</div>

<!--block 2-->
<div class="wrapper bg-8">
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter">

      <div class="image-icon">
        <div class="no-the-100">
          <!--img data-src="@ asset('images/wexplore-world.svg')" alt="Sagde" class="lazy" /-->
          <img data-src="{{get_field('clip_block_2')['url']}}" alt="Sagde" class="lazy" />
        </div>
      </div>
      <h2 class="txt-8 allupper">{{--get_field('title_block_2')--}}</h2>
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
          <a href="#anhor" id="cta-1" class="absl"></a>Contattaci
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
              <div class="map">
                


                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=milano%20via%20privata%20stefanardo%20da%20vimercate&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"></iframe>




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
        {!! do_shortcode( '[contact-form-7 id="20" title="Contact form 1"]' ) !!}
      </div>

    </div>
  </div>
</div>


@endsection
