<div class="text-sm bg-gray-600 py-1 text-white pl-5">
    <p>{{ $label }}</p>
</div>
<div class="border px-10 py-5">
    <select name="{{ $id }}" class="w-96 text-sm">
        <option value=""></option>
        @foreach($forValues as $value)
            <option value="{{ $value->$id }}" @if($value->$id == old($id, $db)) selected @endif>{{ $value->text }}</option>
        @endforeach
    </select>
</div>