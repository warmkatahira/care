<div class="CherryBombOne bg-theme-sub py-1 text-theme-third pl-5 text-base xl:text-xl">
    <p>{{ $label }}</p>
</div>
<div class="bg-theme-third px-2 xl:px-10 py-5">
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $id }}" class="text-xs xl:text-sm w-full xl:w-96" value="{{ old($id, $db) }}" autocomplete="off" placeholder="{{ $placeholder }}">
</div>