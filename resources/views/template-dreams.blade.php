{{--
  Template Name: Dreams Template
--}}

@extends('layouts.app')

@section('content')
<div class="w-full">
  @while(have_posts()) @php(the_post())
  <div class="prose-2xl mt-4 mb-4">
    @include('partials.page-header')
  </div>

  @include('partials.content-page-dream')
  @endwhile
</div>
@endsection
