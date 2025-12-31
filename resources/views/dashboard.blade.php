<x-app>
    <x-slot name="title">
        Home
    </x-slot>
    <div class="flex w-full gap-5 mt-26">

{{--        sidebar--}}
        <div class="hidden md:block md:w-1/5">
            <x-sidebar/>
        </div>

{{--        main content--}}
        <div class="w-full md:w-4/5 md:p-4">
            {{ $slot }}
        </div>
    </div>
</x-app>
