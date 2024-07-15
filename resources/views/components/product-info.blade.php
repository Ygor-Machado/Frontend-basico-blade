<div class="flex flex-col w-full lg:w-1/2 px-0 lg:px-12 mt-8 lg:mt-0">
    <h2 class="text-title-4 font-bold">
        Nome do produto
    </h2>

    <span class="text-xs font-thin">No.777</span>

    <div class="flex flex-row items-center justify-between w-full mt-4">
        <div class="flex flex-row items-start">
            <x-icon name="star" size="large" class="text-yellow-400" />
            <x-icon name="star" size="large" class="text-yellow-400" />
            <x-icon name="star" size="large" class="text-yellow-400" />
            <x-icon name="star" size="large" class="text-yellow-400" />
            <x-icon name="star" size="large" class="text-yellow-400" />
        </div>

        <span class="text-xs text-success-600">Em estoque</span>
    </div>

    <div class="flex flex-row items-start my-4 space-x-2" x-data="{size: 'S'}">
        @foreach(["S", "M", "L", "XL"] as $size)
            <span
                @click="size = '{{ $size }}'"
                class="cursor-pointer text-[8px] w-7 h-7 flex items-center justify-center p-1 border border-solid border-blue-300 rounded-md"
                :class="{'bg-blue-300': size == '{{ $size }}'}"
            >
                {{ $size }}
            </span>
        @endforeach
    </div>

    <span class="text-sm font-bold">Colors: </span>

    <div class="flex flex-row flex-shrink-0 items-start mt-2 space-x-2" x-data="{color: 'bg-red-500'}">
        <div @click="color = 'bg-red-500'" :class="{'ring-2 ring-blue-400' : color === 'bg-red-500'}" class="cursor-pointer rounded-full bg-red-500 h-4 w-4"></div>
        <div @click="color = 'bg-red-400'" :class="{'ring-2 ring-blue-400' : color === 'bg-red-400'}" class="cursor-pointer rounded-full bg-red-400 h-4 w-4"></div>
        <div @click="color = 'bg-red-300'" :class="{'ring-2 ring-blue-400' : color === 'bg-red-300'}" class="cursor-pointer rounded-full bg-red-300 h-4 w-4"></div>
        <div @click="color = 'bg-blue-500'" :class="{'ring-2 ring-blue-400' : color === 'bg-blue-500'}" class="cursor-pointer rounded-full bg-blue-500 h-4 w-4"></div>
        <div @click="color = 'bg-blue-600'" :class="{'ring-2 ring-blue-400' : color === 'bg-blue-600'}" class="cursor-pointer rounded-full bg-blue-600 h-4 w-4"></div>
        <div @click="color = 'bg-blue-700'" :class="{'ring-2 ring-blue-400' : color === 'bg-blue-700'}" class="cursor-pointer rounded-full bg-blue-700 h-4 w-4"></div>
    </div>

    <span class="text-sm font-bold mt-8">Description: </span>
    <div class="flex flex-col items-start mt-2 space-y-1">
        @foreach([1,2,3,4,5,6,7,8] as $item)
            <div class="flex flex-row justify-between w-full">
                <span class="text-xs text-gray-400">Detalhe {{ $item }}</span>
                <span class="text-xs text-gray-400">Informações</span>
            </div>
        @endforeach

    </div>


</div>
