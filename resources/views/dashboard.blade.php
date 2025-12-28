<x-app>
    <x-slot name="title">
        Home
    </x-slot>
    <div class="flex w-full min-h-screen gap-5 mt-26 border border-slate-900 rounded-2xl p-4">
        <div class="hidden md:block md:w-1/5 border border-slate-900 rounded-2xl p-4">
            <x-sidebar/>
        </div>
        <div class="w-full md:w-4/5 md:border border-slate-900 rounded-2xl md:p-4">
            <x-content/>
        </div>
    </div>
</x-app>
