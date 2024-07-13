<x-layouts.base>
    <div class="container p-12 flex flex-col">
        <h1 class="text-title-4 font-bold">
            Nome do produto
        </h1>

        <x-bread-crumb :items="['Home', 'Produtos', 'Nome do produto']" />

        <div class="flex flex-col lg:flex-row justify-between">

            <div class="flex flex-col w-full lg:w-1/3">
                <x-carousel :images="['products/product1.jpg', 'products/product2.jpg', 'products/product3.jpg']"></x-carousel>
            </div>

            <div class="flex flex-col lg:flex-row w-full lg:w-2/3 p-0 lg:p-8">
                <x-product-info></x-product-info>
                <x-product-actions></x-product-actions>
            </div>

        </div>
    </div>
</x-layouts.base>
