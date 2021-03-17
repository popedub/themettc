@extends('layouts.app')

@section('content')


@hasfield('secciones')
  @fields('secciones')
  @php
   $id = get_sub_field('titulo_seccion');
   $id = strtolower($id);
   $id = preg_replace('/\s+/', '', $id);

  @endphp

  <section id="{{ $id }}" class="min-w-full prose sm:prose lg:prose-lg 2xl:prose-2xl grid flex-col items-center justify-items-center
                  top-0 min-h-screen
                  @sub('bg-color') py-8 reveal transition-opacity duration-300 ease-in-out">

        <div class="max-w-prose px-4 lg:mx-auto pb-8 2xl:px-0 2xl:pb-0">

          @if ($id === 'nichebusinessconcierge')
            <h1 class="uppercase lg:text-center lg:pt-16 2xl:text-left 2xl:mt-0">{{ __('The Courtyard Consulting', 'sage') }}</h1>
          @endif

        <h2 class="border-b-4 border-rojo w-full pb-2 ">@sub('titulo_seccion')</h2>
        <div class="pt-8 my-auto list-outside">
          @sub('seccion')
        </div>


      </div>

  </section>
  <section class="h-40 lg:h-96 @sub('parallax') bg-no-repeat bg-fixed bg-center bg-cover"></section>

  @endfields
@endfield

@endsection
