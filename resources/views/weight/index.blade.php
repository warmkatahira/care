<x-app-layout>
    <div class="mt-1 xl:mt-2 mb-5 px-0.5">
        <div class="flex flex-row">
            <a href="{{ route('weight.index', ['month' => $month_change['prev']]) }}" class="text-sm xl:text-xl text-theme-third px-5 bg-theme-sub py-0.5"><i class="las la-caret-square-left la-lg"></i>{{ \Carbon\CarbonImmutable::parse($month_change['prev'])->isoFormat('YYYY年MM月') }}</a>
            <a href="{{ route('weight.index', ['month' => $month_change['next']]) }}" class="text-sm xl:text-xl text-theme-third px-5 bg-theme-sub py-0.5 ml-auto">{{ \Carbon\CarbonImmutable::parse($month_change['next'])->isoFormat('YYYY年MM月') }}<i class="las la-caret-square-right la-lg"></i></a>
        </div>
        <div class="grid grid-cols-7 gap-x-0.5 mb-0.5 mt-1 xl:mt-2">
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center">日</p>
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center">月</p>
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center">火</p>
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center">水</p>
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center">木</p>
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center">金</p>
            <p class="col-span-1 bg-theme-third border border-theme-sub text-center">土</p>
        </div>
        <div class="grid grid-cols-7 gap-x-0.5">
            @foreach($date_arr as $key => $date)
                <div class="col-span-1 px-1 pt-1 bg-theme-third border border-theme-sub mb-0.5 h-20">
                    <p class="text-10px xl:text-sm">{{ \Carbon\CarbonImmutable::parse($key)->isoFormat('MM月DD日') }}</p>
                    @if(!empty($date))
                        @foreach($date as $item)
                            <div class="flex flex-col">
                                <a href="{{ route('weight_detail.index', ['weight_history_id' => $item['weight_history_id']]) }}" class="text-center text-10px xl:text-sm bg-rose-200 mb-1 xl:mb-2">{{ $item['weight'].' kg' }}</a>
                            </div>
                        @endforeach
                    @else
                        <a href="{{ route('weight_create.index', ['weight_date' => $key]) }}" class="text-center text-10px xl:text-sm"><i class="las la-plus la-lg"></i></a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>