@extends('layouts.app')  {{--page NOT post--}}

@section('content') 
ZZZZ  page.blade.php
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
