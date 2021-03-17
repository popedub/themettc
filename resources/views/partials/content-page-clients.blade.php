@hasfields('fashion')
<section class="prose-2xl">
  <h2 class="border-b-4 border-rojo"> {{ __('FASHION','sage') }}</h2>
  <div class="grid grid-cols-2 md:grid-cols-6 gap-6 items-center">
  @fields('fashion')

  <a href="@sub('link')" class="pointer sin" target="_blank">
    <img class="filter-grayscale hover:filter-none transition-all duration-300 ease-in-out" src="@sub('logo')" alt="">
  </a>
  @endfields
  </div>
</section>
@endhasfields

@hasfields('Kids')
<section class="prose-2xl">
  <h2 class="border-b-4 border-rojo"> {{ __('KIDS','sage') }}</h2>
  <div class="grid grid-cols-2 md:grid-cols-6 gap-6 items-center">
    @fields('Kids')

    <a href="@sub('link')" class="pointer sin" target="_blank">
      <img class="filter-grayscale hover:filter-none transition-all duration-300 ease-in-out" src="@sub('logo')" alt="">
    </a>
    @endfields
  </div>
</section>
@endhasfields

@hasfields('others')
<section class="prose-2xl">
  <h2 class="border-b-4 border-rojo"> {{ __('OTHERS','sage') }}</h2>
  <div class="grid grid-cols-2 md:grid-cols-6 gap-6 items-center">
    @fields('others')

    <a href="@sub('link')" class="pointer sin" target="_blank">
      <img class="filter-grayscale hover:filter-none transition-all duration-300 ease-in-out" src="@sub('logo')" alt="">
    </a>
    @endfields
  </div>
</section>
@endhasfields
