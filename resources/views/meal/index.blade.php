<x-app-layout>
    <div class="mt-1 xl:mt-2 mb-5">
        <div class="flex flex-row">
            <a href="{{ route('meal_create.index') }}" class="CherryBombOne text-sm xl:text-2xl text-theme-third px-5 bg-theme-sub"><i class="las la-plus-square mr-1"></i>とうろく</a>
            <a href="{{ route('meal.index', ['month' => $month_change['prev']]) }}" class="text-sm xl:text-xl text-theme-third px-5 bg-theme-sub py-0.5 ml-auto"><i class="las la-caret-square-left la-lg"></i>{{ \Carbon\CarbonImmutable::parse($month_change['prev'])->isoFormat('YYYY年MM月') }}</a>
            <a href="{{ route('meal.index', ['month' => $month_change['next']]) }}" class="text-sm xl:text-xl text-theme-third px-5 bg-theme-sub py-0.5 ml-5 mr-0.5">{{ \Carbon\CarbonImmutable::parse($month_change['next'])->isoFormat('YYYY年MM月') }}<i class="las la-caret-square-right la-lg"></i></a>
        </div>
        <div class="grid grid-cols-7 mb-0.5 mt-1 xl:mt-2">
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center mr-0.5">日</p>
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center mr-0.5">月</p>
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center mr-0.5">火</p>
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center mr-0.5">水</p>
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center mr-0.5">木</p>
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center mr-0.5">金</p>
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center mr-0.5">土</p>
        </div>
        <div class="grid grid-cols-7">
            @foreach($date_arr as $key => $date)
                <div class="col-span-1 px-1 pt-1 bg-theme-third border border-theme-sub mr-0.5 mb-0.5 h-20">
                    <p class="text-1px xl:text-sm">{{ $key }}</p>
                    @if(!empty($date))
                        @foreach($date as $item)
                            <div class="flex flex-col">
                                <a href="{{ route('meal_detail.index', ['meal_history_id' => $item['meal_history_id']]) }}" class="text-center text-1px xl:text-sm bg-rose-200 mb-1 xl:mb-2">{{ \Carbon\CarbonImmutable::parse($item['meal_time'])->isoFormat('HH時mm分') }}</a>
                            </div>
                        @endforeach
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>