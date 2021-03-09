<header class="banner sticky top-0 w-full z-10 flex flex-row justify-between items-center content-center bg-white md:hidden">
  <a class="w-2/12 block text-center border-none left-1/12 relative pl-4" href="{{ home_url('/') }}">
    {{-- {{ $siteName }} --}}

    <img class="w-28 h-auto pt-4 pb-4" src="@asset('images/logo.png')" alt="">
  </a>

  <nav id="nav" class="nav-primary transform -translate-y-full transition-transform duration-300 ease-in-out
                      md:translate-y-0  absolute  md:relative top-0
                      h-screen bg-white md:bg-transparent w-full md:w-8/12 md:h-auto
                      left-0 md:left-auto md:top-0 md:ml-auto md:right-1/12"
                      >
    @if (is_front_page() && has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav h-screen md:h-auto', 'echo' => false]) !!}
    @endif
    @if (!is_front_page() && has_nav_menu('menu_alt'))
    {!! wp_nav_menu(['theme_location' => 'menu_alt', 'menu_class' => 'nav h-screen md:h-auto', 'echo' => false])
    !!}
    @endif
  </nav>
  <button id="hmbrgr" class="hamburger hamburger--spring md:hidden" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
</header>
