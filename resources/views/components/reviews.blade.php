<div class="flex flex-col">
    <div class="flex flex-row w-full justify-between border-b pb-1 mt-6">
        <span class="text-md font-bold mt-2">
            Reviews
        </span>
    </div>

    @for($i=0; $i<4; $i++)
        <div class="flex flex-row w-full mt-8 space-x-4 pb-4 border-b">
            <div class="bg-green-700 w-10 h-10 flex-shrink-0 rounded-full"></div>

            <div class="flex flex-col">
                <h3 class="text-md font-bold">Usuário</h3>
                <div class="flex flex-row items-start mt-1">
                    <x-icon name="star" size="large" class="text-yellow-400"></x-icon>
                    <x-icon name="star" size="large" class="text-yellow-400"></x-icon>
                    <x-icon name="star" size="large" class="text-yellow-400"></x-icon>
                    <x-icon name="star" size="large" class="text-yellow-400"></x-icon>
                    <x-icon name="star" size="large" class="text-yellow-400"></x-icon>
                </div>

                <span class="text-md font-medium mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar,
                    mi nec maximus placerat, turpis ipsum eleifend ipsum, at tincidunt arcu libero euismod dui.
                    Integer sagittis purus posuere ante suscipit, vitae euismod dolor viverra. Etiam mattis dictum urna,
                    ut ornare enim lobortis a. Morbi pretium porta risus non consequat. Etiam et molestie quam, cursus
                    venenatis enim.
                </span>
            </div>
        </div>
    @endfor
</div>
