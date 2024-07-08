<div {{ $attributes->class(["rounded-md p-4", $getBgClass]) }}>
    <div class="flex">
        <div>
            <div class="flex flex-row items-center space-x-2">
                {{ $icon }}
                <h3 @class(["text-sm font-medium", $getTitleClass])>{{ $title }}</h3>

                <p @class(["text-xs font-thin"])>{{ $now }}</p>
            </div>

            <div @class(["mt-2 text-sm", $getMessageClass])>
                <span>{{ $message }}</span>
            </div>

            {{ $slot }}
        </div>
    </div>
</div>
