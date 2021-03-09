<div id="phone-overflow" class="w-full">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @include('partials.header')
  <div class="flex flex-grid">
    {{-- @hasSection('sidebar')
    <aside class="sidebar p-4 bg-gray-200 w-1/6 fixed h-full left-0 top-0">
      @yield('sidebar')
    </aside>
    @endif --}}

    <aside class="sidebar p-4 bg-pattern bg-center bg-no-repeat bg-cover w-1/12 fixed h-full left-0 top-0 z-20">
      @hasSection('sidebar')
      @yield('sidebar')
      @endif
    </aside>
    <aside class="w-2/12 fixed h-full left-1/12 top-0 border-r-4 border-black z-20 hidden md:block">
      <a class="hidden md:block text-center border-none relative z-20" href="{{ home_url('/') }}">
          {{-- {{ $siteName }} --}}

          <img class="w-48 h-auto pt-4 pb-4 mx-auto" src="@asset('images/logo.png')" alt="">
        </a>
      @if (is_front_page() && has_nav_menu('primary_navigation'))
      <div class="fixed top-0 left-1/12 w-2/12">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav h-screen flex flex-col
       justify-center mx-auto list-none w-48 mx-auto', 'echo' =>
      false])
      !!}ƒ
      </div>

      @endif
      @if (!is_front_page() && has_nav_menu('menu_alt'))
            <div class="fixed top-0 left-1/12 w-2/12">
              {!! wp_nav_menu(['theme_location' => 'menu_alt', 'menu_class' => 'nav h-screen flex flex-col
              justify-center mx-auto list-none w-48 mx-auto', 'echo' =>
              false])
              !!}ƒ
            </div>

            @endif
    </aside>


    <main id="main" class="p-4 main w-11/12 left-1/12 md:w-9/12 md:left-3/12 relative">

        @yield('content')


    </main>
  </div>
  @include('partials.footer')
</div>
