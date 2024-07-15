<div class="relative z-10"
     aria-labelledby="slide-over-title"
     role="dialog"
     aria-modal="true"
     x-data="{open: false}"
     x-show="open"
     @open-cart.window="open=true"
     @click.outside="onpen=false"
     x-transition:enter="ease-in-out duration-500"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="oppacity-100"
     x-transition:leave="ease-in-out duration-500"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="oppacity-0"
>
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div
                x-show="open"
                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                <div class="pointer-events-auto w-screen max-w-md">
                    <div class="flex h-full flex-col overflow-y-hidden bg-white shadow-xl">
                        <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                            <div class="flex items-start justify-between">
                                <h2 class="text-lg font-medium text-gray-900">Carrinho</h2>
                                <div class="ml-3 flex h-7 item-center">
                                    <x-icon @click="open = false" name="close" class="cursor-pointer" size="large" />
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flow-root">
                                    <ul class="-my-6 divide-y divide-gray-200">
                                        <li class="flex py-6">
                                            <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-md border border-gray-300">
                                                <img src="{{ Vite::images('products/product1.jpg') }}" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="ml-4 flex flex-1 flex-col">
                                                <div>
                                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                                        <h3>
                                                            <a href="#">Throwback Hip Bag</a>
                                                        </h3>
                                                        <p class="ml-4">$90.00</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">Salmon</p>
                                                </div>
                                                <div class="flex-1 flex items-end justify-between text-sm">
                                                    <p class="text-gray-500">Qty 1</p>
                                                    <div class="flex">
                                                        <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                            Remover
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                            <div class="flex justify-between text-base font-medium text-gray-900">
                                <p>Subtotal</p>
                                <p>$90.00</p>
                            </div>
                            <p class="mt-0.5 text-sm text-gray-500">Entrega calculada do subtotal.</p>
                            <div class="mt-6">
                                <a href="#" class="w-full flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                    Checkout
                                </a>
                            </div>
                            <div class="mt-6 flex justify-center text-sm text-center text-gray-500">
                                <p>
                                    ou <a href="#" class="text-indigo-600 font-medium hover:text-indigo-500">Continue a compra<span aria-hidden="true"> &rarr;</span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
