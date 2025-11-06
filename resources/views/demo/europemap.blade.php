<div id="europemap" class="relative w-full aspect-[2/1]">
    @include('demo.partials.europemap-svg')
</div>

<div id="tooltip" class="hidden absolute bg-white text-black text-sm p-2 rounded shadow"></div>

@vite(['resources/js/demo/europemap.js'])


<style>
    #europemap svg {
        display: block;
        width: 100%;
        height: 100%;
    }

    #europemap path {
        transition: transform 0.15s ease, fill-opacity 0.15s ease;
        transform-origin: center;
        transform-box: fill-box; /* dit is cruciaal */
    }
</style>
