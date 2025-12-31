<x-dashboard>
    <x-content>
        <div>
            <div class="flex items-center justify-center min-h-screen">
                <div class="border border-slate-900 shadow-lg rounded-2xl p-8 w-full max-w-md mt-20">
                    <h2 class="text-2xl font-bold mb-6 text-center">Edit</h2>

                    <form action="{{ route('forum.update',$forum->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        @method('PUT')

                        {{-- Forum --}}
                        <div>
                            <label for="heading" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                            <input
                                type="text"
                                name="title"
                                id="title"
                                value="{{ old('title',$forum->title) }}"
                                class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('title') border-red-500 @enderror"
                            >
                            @error('title')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                            <textarea
                                type="text"
                                name="description"
                                id="description"
                                cols="30" rows="3"
                                class="w-full border rounded-2xl px-3 py-2 @error('description') border-red-500 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500"
                            >{{ old('description',$forum->description) }}
                            </textarea>
                            @error('description')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <select name="category" id="category" class="w-full border text-center rounded-lg px-3 py-2 @error('category') border-red-500 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option disabled>Select Category</option>
                            @foreach(\App\Enum\CategoryEnum::cases() as $category)
                                    <option value="{{ $category->value }}" @selected(old('category', $forum->category?->value) === $category->value)>
                                        {{ $category->labels() }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                            <div class="text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Image --}}
                        <div>
                            <div>
                                <img src="{{ asset('storage/'.$forum->image) }}"
                                     alt="{{ $forum->title }}"
                                     class="aspect-video w-full rounded-2xl object-cover sm:aspect-2/1 lg:aspect-3/2">
                            </div>
                            <label for="hero_image" class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                            <input
                                type="file"
                                name="image"
                                id="image"
                                class="w-full @error('image') border-red-500 @enderror"
                            >
                            @error('image')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Submit Button --}}
                        <div class="text-center">
                            <button
                                type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            >
                                Update Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-content>
</x-dashboard>
