{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
  <div class="bg-marco bg-gray-200"></div>
  <div class="bg-marco bg-white"></div>
@endsection
