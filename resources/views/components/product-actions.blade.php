<div class="flex flex-col w-full lg:w-1/2 px-0 mt-8 lg:mt-0 lg:px-12"
     x-data="{ count: 1 }"
>
    <div class="p-4 flex flex-col border border-gray-200 rounded w-full">
        <div class="flex flex-row items-start space-x-4">
            <span class="text-title-5 font-bold">$20</span>
            <span class="text-sm font-thins line-through text-gray-500">$30</span>
        </div>

        <div class="flex flex-row items-center space-x-4 mt-4">
            <x-form.button
                @click="count > 1 ? count-- : count = 1"
                type="button"
                variation="outline"
                size="small"
                icon="remove"
                icon-position="left"
            >
            </x-form.button>

            <span class="text-title-5 font-bold" x-text="count"></span>

            <x-form.button
                @click="count = count + 1"
                type="button"
                variation="outline"
                size="small"
                icon="add"
                icon-position="left"
            >
            </x-form.button>
        </div>

        <x-form.button
            @click="$dispatch('open-cart')"
            class="mt-4"
            type="button"
            variation="primary"
            size="large"
            icon="shopping_cart"
            icon-position="left"
            text="Adicione ao carrinho"
        >
        </x-form.button>

        <x-form.button
            class="mt-2"
            type="button"
            variation="outline"
            size="large"
            text="Compre agora"
        >
        </x-form.button>

        <div class="flex flex-col flex-shrink-0 items-start mt-4 space-y-1">
            <div class="flex flex-row justify-between w-full">
                <span class="text-sm font-thin text-gray-500">Detalhe 1</span>
                <span class="text-sm font-thin text-gray-500">info</span>
            </div>

            <div class="flex flex-row justify-between w-full">
                <span class="text-sm font-thin text-gray-500">Detalhe 2</span>
                <span class="text-sm font-thin text-gray-500">info</span>
            </div>

            <div class="flex flex-row justify-between w-full">
                <span class="text-sm font-thin text-gray-500">Detalhe 3</span>
                <span class="text-sm font-thin text-gray-500">info</span>
            </div>
        </div>
    </div>

    <div class="flex flex-row items-center bg-blue-300 mt-4 px-6 py-4 rounded-md space-x-2">
        <x-icon size="large" name="local_shipping" class="text-blue-500" />
        <span class="text-xs font-bold">Frete Grátis</span>
    </div>

</div>
