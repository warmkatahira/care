<x-app-layout>
    <div class="mt-1 xl:mt-2 mb-5 px-0.5">
        <x-title text="うんちのかくにん" />
        <div class="grid grid-cols-12 mt-2">
            <p class="CherryBombOne text-center text-theme-third bg-theme-sub col-span-12 xl:col-span-1 py-1">ひづけ</p>
            <p class="text-theme-sub bg-theme-third col-span-12 xl:col-span-2 py-1 pl-2">{{ \Carbon\CarbonImmutable::parse($poo_history->poo_date)->isoFormat('YYYY年MM月DD日(ddd)') }}</p>
        </div>
        <div class="grid grid-cols-12 mt-2">
            <p class="CherryBombOne text-center text-theme-third bg-theme-sub col-span-12 xl:col-span-1 py-1">じかん</p>
            <p class="text-theme-sub bg-theme-third col-span-12 xl:col-span-2 py-1 pl-2">{{ \Carbon\CarbonImmutable::parse($poo_history->poo_time)->isoFormat('HH:mm') }}</p>
        </div>
        <div class="grid grid-cols-12 mt-2">
            <p class="CherryBombOne text-center text-theme-third bg-theme-sub col-span-12 xl:col-span-1 py-1">めも</p>
            <p class="text-theme-sub bg-theme-third col-span-12 xl:col-span-2 py-1 pl-2">{{ is_null($poo_history->memo) ? 'なし' : $poo_history->memo }}</p>
        </div>
        <div class="grid grid-cols-12 mt-2">
            <p class="CherryBombOne text-center text-theme-third bg-theme-sub col-span-12 xl:col-span-1 py-1">うんちのじょうたい</p>
            <p class="text-theme-sub bg-theme-third col-span-12 xl:col-span-2 py-1 pl-2">{{ $poo_history->poo_status->poo_status }}</p>
        </div>
    </div>
</x-app-layout>