<div class="flex flex-col w-full" x-data="carousel(@js($images))">
    <div class="p-2 overflow-hidden border border-solid border-gray-300 rounded-md mt-4">
        <img x-ref="highlight" class="w-full object-scale-down" src="{{ Vite::images($images[0]) }}">
    </div>

    <div class="relative flex flex-row items-center justify-center space-x-2 mt-4">

        <x-icon @click="changeImage('previous')" name="chevron_left" size="large" class="cursor-pointer absolute left-0"></x-icon>

        @foreach ($images as $image)
            <img
                x-ref="image{{$loop->index}}"
                @click="showImage($event.target.src)"
                class="w-12 h-12 object-cover object-center rounded-md bg-gray-300 cursor-pointer hover:bg-gray-400"
                src="{{ Vite::images($image) }}"
            >
        @endforeach

        <x-icon @click="changeImage('next')" name="chevron_right" size="large" class="cursor-pointer absolute right-0"></x-icon>

    </div>
</div>
