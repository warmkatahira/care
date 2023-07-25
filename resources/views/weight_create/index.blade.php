@vite(['resources/js/weight/weight_create.js'])

<x-app-layout>
    <div class="mt-1 xl:mt-2 mb-5 px-0.5">
        <x-title text="たいじゅうのとうろく" />
        <x-validation-error-msg />
        <form method="POST" action="{{ route('weight_create.create') }}" id="weight_create_form" class="m-0 mt-2">
            @csrf
            <x-element.input type="date" label="ひづけ" id="weight_date" :db="$weight_date" placeholder="" />
            <x-element.input type="text" label="たいじゅう" id="weight" :db="null" placeholder="kg" />
            <x-element.input type="text" label="めも" id="memo" :db="null" placeholder="" />
            <button type="button" id="weight_create_enter" class="CherryBombOne text-xl xl:text-2xl text-theme-third px-5 py-2 bg-theme-sub mt-2 w-full xl:w-auto">とうろくする</button>
        </form>
    </div>
</x-app-layout>