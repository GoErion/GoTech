<x-dashboard>
    <x-content>
        <div>
            <div class="flex items-center justify-center">
                <div class="border bg-linear-to-r from-purple-500 via-purple-600 to-purple-700 border-slate-900 py-2 px-4 rounded-lg mb-4">
                    <a href="{{ route('services.create') }}" class="">
                        Create Service<span class="p-2">+</span>
                    </a>
                </div>
            </div>
        </div>
        <div>
           <x-services :services="$services"/>
        </div>
    </x-content>
</x-dashboard>
