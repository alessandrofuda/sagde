<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')

    <div class="box-fullscreen test-gradient lazy coverize lazy" data-src="@asset('images/communication-agency-cover.jpg')"></div>

    <div class="wrap container" role="document">
      <div class="content">
        
        <main class="main">
          @yield('content')
        </main>

        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif

      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    <script>
      (function() {
        var myLazyLoad = new LazyLoad({
          elements_selector: ".lazy",
          class_loading: "lazy-loading",
          class_loaded: "lazy-loaded"
        });
      }());
    </script>
    @php wp_footer() @endphp
  </body>
</html>
