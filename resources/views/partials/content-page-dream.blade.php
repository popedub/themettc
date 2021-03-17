<div id="msry" class="flex flex-wrap pb-6">
<div class="grid-sizer w-1/2 lg:w-1/3"></div>
@hasfields('galeria')
  @php
    $galeria = get_field('galeria')
  @endphp
  @foreach ($galeria as $img)
    <div class="item-g w-1/2 lg:w-1/3 pl-2 pr-2 pb-4 cursor-pointer" data-src="{{ $img['url'] }}">

      <img class="" src="{{ $img['url'] }}" alt="{{ $img['alt'] }}">

    </div>
  @endforeach


@endhasfields



</div>
