<x-guest>
    <div class="flex items-center justify-center min-h-screen">
        <div class="border border-slate-900 shadow-lg rounded-2xl p-8 w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Create / Update Hero</h2>

            <form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                {{-- Heading --}}
                <div>
                    <label for="heading" class="block text-sm font-medium text-gray-700 mb-1">Heading</label>
                    <input
                        type="text"
                        name="heading"
                        id="heading"
                        value="{{ old('heading', $hero->heading ?? '') }}"
                        class="w-full border rounded-md px-3 py-2 @error('heading') border-red-500 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                    @error('heading')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Hero Image --}}
                <div>
                    <label for="hero_image" class="block text-sm font-medium text-gray-700 mb-1">Hero Image</label>
                    <input
                        type="file"
                        name="hero_image"
                        id="hero_image"
                        class="w-full @error('hero_image') border-red-500 @enderror"
                    >
                    @if(!empty($hero?->hero_image))
                        <p class="mt-2 text-sm text-gray-500">Current Image:</p>
                        <img src="{{ asset('storage/' . $hero->hero_image) }}" alt="Hero Image" class="mt-1 w-full h-48 object-cover rounded-md">
                    @endif
                    @error('hero_image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <div class="text-center">
                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                        Save Hero
                    </button>
                </div>
            </form>
        </div>
    </div>

</x-guest>
