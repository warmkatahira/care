<div class="CherryBombOne bg-theme-sub py-1 text-theme-third pl-5 text-base xl:text-xl">
    <p>{{ $label }}</p>
</div>
<div class="bg-theme-third px-2 xl:px-10 py-5">
    <select name="{{ $id }}" class="text-xs xl:text-sm w-full xl:w-96">
        <option value=""></option>
        @foreach($forValues as $value)
            <option value="{{ $value->$id }}" @if($value->$id == old($id, $db)) selected @endif>{{ $value->$text }}</option>
        @endforeach
    </select>
</div>