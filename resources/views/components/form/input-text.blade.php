<div class="flex flex-col gap-1">
    <div>
        <label>{{ $label ? $label : '' }}</label>
    </div>
    <div>
        <input id="{{ $id }}" value="{{ $value }}" type="{{ $type }}" name="{{ $name }}" placeholder="{{ $ph }}" class="border-1 p-1 rounded-md max-w-80 flex flex-wrap">
    </div>
</div>