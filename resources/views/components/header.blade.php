<div class="px-12 flex flex-row items-center justify-between py-4 w-full border-b border-solid border-gray-300">
    <div class="">
        <img class="w-24" src="{{ Vite::images($logo) }}" alt="">
    </div>

    <div class="hidden md:flex flex-row items-center space-x-0.5">
        <x-form.input
            type="text"
            name="search"
            placeholder="Search"
            size="small"
            icon="search"
            icon-position="right"
        />
        <x-form.button
            type="button"
            variation="primary"
            size="small"
            icon="search"
            icon-position="left"
        />
    </div>

    <div class="flex flex-row items-center space-x-0.5">

        <x-form.button
            class="flex md:hidden"
            type="button"
            variation="primary"
            size="small"
            icon="search"
            icon-position="left"
        />
        <x-form.button
            type="button"
            variation="primary"
            size="small"
            icon="person"
            icon-position="left"
            text="Log in"
        />

        <x-form.button
            type="button"
            variation="outline"
            size="small"
            icon="shopping_cart"
            icon-position="left"
        />

    </div>
</div>
