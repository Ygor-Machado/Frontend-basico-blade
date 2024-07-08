<nav class="border-b border-gray-200 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <div class="flex flex-shrink-0 items-center">
                    <img class="block h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                    <img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                </div>
                <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">



                    <x-layouts.nav-link
                        :active-="true"
                        name="home"
                        url="#"
                    />

                    <x-layouts.nav-link
                        :active-="false"
                        name="projects"
                        url="#"
                    />

                </div>
            </div>
        </div>
    </div>
</nav>
