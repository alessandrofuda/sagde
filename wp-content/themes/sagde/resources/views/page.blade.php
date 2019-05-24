@extends('layouts.app')  {{--page NOT post--}}



@section('header-background-image')
  <div class="box-fullscreen test-gradient lazy coverize lazy" data-src="@asset('images/communication-agency-cover.jpeg')" style="z-index:-1;"></div>
@endsection



@section('content') 
<div id="privacy-policy" class="container">
	<div class="row">
		<div class="col-md-12">
			@while(have_posts()) @php the_post() @endphp
				@include('partials.page-header')
				@include('partials.content-page')
			@endwhile			
		</div>
	</div>
</div>

@endsection
