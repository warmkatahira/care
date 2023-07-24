<x-app-layout>
    <div class="mt-1 xl:mt-2 mb-5 px-0.5">
        <x-title text="ごはんのかくにん" />
        <div class="grid grid-cols-12 mt-2">
            <p class="CherryBombOne text-center text-theme-third bg-theme-sub col-span-12 xl:col-span-1 py-1">ひづけ</p>
            <p class="text-theme-sub bg-theme-third col-span-12 xl:col-span-2 py-1 pl-2">{{ \Carbon\CarbonImmutable::parse($meal_history->meal_date)->isoFormat('YYYY年MM月DD日(ddd)') }}</p>
        </div>
        <div class="grid grid-cols-12 mt-2">
            <p class="CherryBombOne text-center text-theme-third bg-theme-sub col-span-12 xl:col-span-1 py-1">じかん</p>
            <p class="text-theme-sub bg-theme-third col-span-12 xl:col-span-2 py-1 pl-2">{{ \Carbon\CarbonImmutable::parse($meal_history->meal_time)->isoFormat('HH:mm') }}</p>
        </div>
        <div class="grid grid-cols-12 mt-2">
            <p class="CherryBombOne text-center text-theme-third bg-theme-sub col-span-12 xl:col-span-1 py-1">めも</p>
            <p class="text-theme-sub bg-theme-third col-span-12 xl:col-span-2 py-1 pl-2">{{ is_null($meal_history->memo) ? 'なし' : $meal_history->memo }}</p>
        </div>
        @foreach($meal_history_details as $meal_history_detail)
            <div class="grid grid-cols-12 mt-2 p-5 bg-theme-third">
                <div class="text-center">
                    <img src="{{ asset($meal_history_detail->food->food_image_path) }}" class="inline-block col-span-12 xl:col-span-1 w-20 h-20">
                </div>
                <p class="text-theme-sub col-span-12 xl:col-span-10 py-2 xl:py-7">{{ '['.$meal_history_detail->food->food_category->food_category_name.']'.'['.$meal_history_detail->food->food_brand.']'.$meal_history_detail->food->food_name }}</p>
                <p class="text-right pr-2 text-theme-sub col-span-12 xl:col-span-1 py-2 xl:py-7">{{ $meal_history_detail->amount_of_food.' g' }}</p>
            </div>
        @endforeach
    </div>
</x-app-layout>