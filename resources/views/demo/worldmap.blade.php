
<div id="worldmap" class="relative">
    @include('demo.partials.worldmap-svg')
</div>
<div id="tooltip" class="hidden absolute bg-white text-black text-sm p-2 rounded shadow"></div>


@vite(['resources/js/demo/worldmap.js'])
