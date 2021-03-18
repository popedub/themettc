{{--
  Template Name: Clients Template
--}}

@extends('layouts.app')

@section('content')
<div class="w-full p-4">
  @while(have_posts()) @php(the_post())
  <div class="min-w-full prose sm:prose lg:prose-lg 2xl:prose-2xl mt-4 mb-4">
    @include('partials.page-header')
  </div>
    @include('partials.content-page-clients')
  @endwhile
</div>
@endsection
