@extends('layouts.app')

@section('content')
<div class="max-w-prose mx-auto">
<section class="prose-2xl mt-4 mb-4">
<h1 class="uppercase">{{ __('The Courtyard Consulting', 'sage') }}</h1>
</section>


@hasfield('secciones')
  @fields('secciones')
  @php
   $id = get_sub_field('titulo_seccion');
   $id = strtolower($id);
   $id = preg_replace('/\s+/', '', $id);
  @endphp
  <section id="{{ $id }}" class="prose-2xl py-8 mb-40 reveal transition-opacity duration-500 ease-in">
    <h2 class="border-b-4 border-black w-full pb-2">@sub('titulo_seccion')</h2>
    <div class="pt-8">
      @sub('seccion')
    </div>

  </section>
  @endfields

@endfield
</div>
@endsection
