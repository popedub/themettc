<div id="msry" class="flex flex-wrap pb-6">
<div class="grid-sizer w-1/2 lg:w-1/3"></div>
@for ($i = 0; $i < 15; $i++)
@if ($i % 2 == 0)
<div class="item-g w-1/2 lg:w-1/3 p-2" data-src="https://picsum.photos/800/1200">

    <img class="" src="https://picsum.photos/800/1200" alt="">

</div>

@elseif($i % 3 == 0)
<div class="item-g w-1/2 lg:w-1/3 p-2" data-src="https://picsum.photos/1200/800">

    <img class="" src="https://picsum.photos/1200/800" alt="">

</div>
@elseif($i % 2 >= 1)
<div class="item-g w-1/2 lg:w-1/3 p-2" data-src="https://picsum.photos/800/800">

    <img class="" src="https://picsum.photos/800/800" alt="">

</div>
@endif
@endfor
</div>
