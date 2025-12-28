<x-guest>
    <div class="flex items-center justify-center min-h-screen">
        <div class="border border-slate-900 shadow-lg rounded-2xl p-8 w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Create Service</h2>

            <form action="{{ route('services.store') }}" method="POST" class="space-y-4">
                @csrf

                {{-- Heading --}}
                <div>
                    <label for="heading" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                    <input
                        type="text"
                        name="subtitle"
                        id="subtitle"
                        value=""
                        class="w-full border rounded-md px-3 py-2 @error('subtitle') border-red-500 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                    @error('subtitle')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="heading" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <input
                        type="text"
                        name="description"
                        id="description"
                        value=""
                        class="w-full border rounded-md px-3 py-2 @error('description') border-red-500 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                    @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>


                {{-- Submit Button --}}
                <div class="text-center">
                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                        Save Service
                    </button>
                </div>
            </form>
        </div>
    </div>

</x-guest>
