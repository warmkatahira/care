@vite(['resources/js/poo/poo_create.js'])

<x-app-layout>
    <div class="mt-1 xl:mt-2 mb-5 px-0.5">
        <x-title text="うんちのとうろく" />
        <x-validation-error-msg />
        <form method="POST" action="{{ route('poo_create.create') }}" id="poo_create_form" class="m-0 mt-2">
            @csrf
            <x-element.input type="date" label="ひづけ" id="poo_date" :db="$poo_date" placeholder="" />
            <x-element.input type="time" label="じかん" id="poo_time" :db="null" placeholder="" />
            <x-element.input type="text" label="めも" id="memo" :db="null" placeholder="" />
            <x-element.select label="うんちのじょうたい" id="poo_status_id" :forValues="$poo_statuses" text="poo_status" :db="null" />
            <button type="button" id="poo_create_enter" class="CherryBombOne text-xl xl:text-2xl text-theme-third px-5 py-2 bg-theme-sub mt-2 w-full xl:w-auto">とうろくする</button>
        </form>
    </div>
</x-app-layout>