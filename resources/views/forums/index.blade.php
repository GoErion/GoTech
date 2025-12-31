<x-dashboard>
    <x-content>
        <div>
           <div class="flex items-center justify-center">
               @if(session('success'))
                   <div class="bg-green-500 text-slate-200 rounded-lg mb-4 py-2 px-32">
                       {{ session('success') }}
                   </div>
               @endif
           </div>
            <div class="flex items-center justify-center">
                <div class="border bg-linear-to-r from-purple-500 via-purple-600 to-purple-700 border-slate-900 py-2 px-4 rounded-lg mb-4">
                    <a href="{{ route('forum.create') }}" class="">
                        Create Thread <span class="p-2">+</span>
                    </a>
                </div>
            </div>
        </div>
        <div>
            <x-forums :forums="$forums"/>
        </div>
    </x-content>
</x-dashboard>
