<div {{ $attributes->class(['flex flex-col w-full mt-6']) }} x-transition>
    <span class="text-md font-bold">
        Description
    </span>

    <span class="text-md font-medium mt-2">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar,
        mi nec maximus placerat, turpis ipsum eleifend ipsum, at tincidunt arcu libero euismod dui.
        Integer sagittis purus posuere ante suscipit, vitae euismod dolor viverra. Etiam mattis dictum urna,
        ut ornare enim lobortis a. Morbi pretium porta risus non consequat. Etiam et molestie quam, cursus
        venenatis enim.
    </span>

    <span class="text-md font-bold mt-8">
        Specifications
    </span>

    <div class="flex flex-col items-center w-full mt-4">
        @foreach([1,2,3,4,5,6] as $item)
            <div class="flex flex-row w-full justify-between border-b pb-1">
                <span class="text-md font-bold mt-2">
                    Feature {{ $item }}
                </span>
                <span class="text-md font-medium mt-2">
                    Parameter
                </span>
            </div>
        @endforeach
    </div>
</div>
