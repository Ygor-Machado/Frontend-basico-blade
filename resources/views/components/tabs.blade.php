<div class="flex flex-col w-full" x-data="{ visible: 'description' }">

    <div class="border-b border-gray-200">
        <nav class="-mb-px flex space-x-8" aria-label="Tabs">
            <a
                @click="visible = 'description'"
                :class="{'border-blue-500 text-blue-600': visible === 'description', 'border-transparent text-gray-800': visible !== 'description'}"
                class="cursor-pointer whitespace-nowrap py-4 px-1 border-b-2 font-bold text-sm">
                Características
            </a>

            <a
                @click="visible = 'reviews'"
                :class="{'border-blue-500 text-blue-600': visible === 'reviews', 'border-transparent text-gray-800': visible !== 'reviews'}"
                class="cursor-pointer hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                Reviews
            </a>

        </nav>
    </div>

    <x-description
        x-show="visible === 'description'"
    ></x-description>
    <x-reviews
        x-show="visible === 'reviews'"
    ></x-reviews>

</div>
