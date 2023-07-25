@vite(['resources/js/meal/meal_create.js'])

<x-app-layout>
    <div class="mt-1 xl:mt-2 mb-5 px-0.5">
        <x-title text="ごはんのとうろく" />
        <x-validation-error-msg />
        <form method="POST" action="{{ route('meal_create.create') }}" id="meal_create_form" class="m-0 mt-2">
            @csrf
            <x-element.input type="date" label="ひづけ" id="meal_date" :db="null" placeholder="" />
            <x-element.input type="time" label="じかん" id="meal_time" :db="null" placeholder="" />
            <x-element.input type="text" label="めも" id="memo" :db="null" placeholder="" />
            <div class="CherryBombOne bg-theme-sub py-1 text-theme-third pl-5 text-base xl:text-xl">
                <p>ふーど</p>
            </div>
            <div class="bg-theme-third px-2 xl:px-10 py-5">
                @for($i = 0; $i < 5; $i++)
                    <div class="flex flex-row mb-1">
                        <select name="food_id[]" class="w-full text-xs xl:text-sm">
                            <option value=""></option>
                            @foreach($foods as $food)
                                <option value="{{ $food->food_id }}" @if($food->food_id == old('food_id', null)) selected @endif>{{ '['.$food->food_brand.']'.$food->food_name }}</option>
                            @endforeach
                        </select>
                        <input type="text" id="amount_of_food" name="amount_of_food[]" class="text-xs xl:text-sm w-14 xl:w-20 ml-2 text-right" value="{{ old('amount_of_food', null) }}" autocomplete="off" placeholder="g">
                    </div>
                @endfor
            </div>
            <button type="button" id="meal_create_enter" class="CherryBombOne text-xl xl:text-2xl text-theme-third px-5 py-2 bg-theme-sub mt-2 w-full xl:w-auto">とうろくする</button>
        </form>
    </div>
</x-app-layout>