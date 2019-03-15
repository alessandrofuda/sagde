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
<div class="wrapper bg-8">
  <div class="wrapper-padded-more">
    <div class="block-spacing">
      <h3 class="aligncenter">
        <span class="text-shadow dark">{!! get_field('introduction') !!}</span>
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
          <img data-src="{{ get_field('clip_block_1')['url'] }}" alt="Sagde" class="lazy" />          
        </div>
      </div>
      <h2 class="txt-8 allupper">{{ get_field('title_block_1') }}</h2>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <img class="front_img" src="{{ get_field('image_block_1')['url'] }}" alt="">
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
      <h4 class="txt-8">{{ get_field('text_block_1') }}</h4>
      <div class="btn light">
        <div id="cta-0" class="inner allupper">Contattaci</div>
      </div>
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
          <img data-src="{{ get_field('clip_block_2')['url'] }}" alt="Sagde" class="lazy" />
        </div>
      </div>
      <h2 class="txt-8 allupper">{{--get_field('title_block_2')--}}</h2>
      <h3 class="aligncenter">{!! get_field('text_block_2') !!}</h3>
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

<!--block 3-->
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

      <h2 class="allupper">{{ get_field('title_block_3') }}</h2>

      <h3 class="aligncenter">{!! get_field('text_block_3') !!}</h3>
      <div class="btn">
        <div class="inner allupper">
          <a href="#anchor" id="cta-1" class="absl"></a>Contattaci
        </div>
      </div>
    </div>
  </div>
</div>

<!--block 4-->
<div id="menu-item-16-anchor" class="wrapper bg-11">
  <div class="wrapper-padded-more">
    <div class="block-spacing aligncenter txt-8">

      <h2 class="txt-8 allupper">{{ get_field('title_block_4') }}</h2> 

      <div class="container">
        <div class="row">
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
        </div>
      </div>

    </div>
  </div>
</div>

<!--block 5-->
<div id="menu-item-17-anchor" class="wrapper bg-8">
  <div class="container wrapper-padded-more">

    <div class="row block-spacing">

      <div class="col-12 col-md-6">
        <div class="google-map">
          <div class="map">
            <iframe id="gmap_canvas" src="{{ get_field('google_map_url') }}" frameborder="0" scrolling="no"></iframe>
          </div>
        </div>
      </div>

      <div id="location" class="col-12 col-md-6">
        <div class="addr-tit-block">
          <div class="image-icon">
            <div class="no-the-100 location">
              <img data-src="http://sagde.alessandrofuda.it/wp-content/uploads/2019/03/location.png" alt="Sagde" class="lazy" />
              {{-- @asset('images/wexplore-announcment.svg') --}}
            </div>
          </div>
          <h2 class="allupper">{{ get_field('title_block_5') }}</h2>
        </div>
        <div class="addr-text-block">
          <h3>
            <span class="text-shadow dark">{!! get_field('subtitle_block_5') !!}</span>
          </h3>
          <h4>{!! get_field('text_block_5') !!}</h4>
          <div class="btn">
            <div id="cta-2" class="inner allupper">Contattaci</div>
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

      <h2 class="allupper">Vuoi informazioni?<br/>Scrivici</h2>
      <div class="form-hold">
        {!! do_shortcode( '[contact-form-7 id="20" title="Contact form 1"]' ) !!}
      </div>

    </div>
  </div>
</div>


@endsection
