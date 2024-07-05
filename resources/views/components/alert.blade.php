<div @class(["rounded-md p-4", $getBgClass])>
    <div class="flex">
        <h3 @class(["text-sm font-medium", $getTitleClass])>{{ $title }}</h3>
        <div @class(["mt-2 text-sm", $getMessageClass])>
            <span>{{ $message }}</span>
        </div>
    </div>
</div>
