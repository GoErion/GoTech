<x-dashboard>
    <x-content>
        <div>
            <div class="flex justify-end me-26 mb-4 space-x-4">
              @can('update', $forum)
                    <div class="border border-slate-800 py-2 px-3 rounded-lg">
                        <a href="{{ route('forum.edit',$forum->id) }}" class="inline-flex">
                            Edit
                        </a>
                    </div>
              @endcan
                @can('delete', $forum)
                      <div class="border border-slate-800 py-2 px-3 rounded-lg">
                          <form action="{{ route('forum.destroy',$forum->id) }}" method="post" class="inline-flex">
                              @csrf
                              @method('DELETE')
                              <button type="submit">
                                  Delete
                              </button>
                          </form>
                      </div>
                @endcan
            </div>
            <div class="flex justify-center">
                <article class="relative flex flex-col items-start justify-between group">
                    <!-- Image -->
                    <div class="relative w-full">
                        <img src="{{ asset('storage/'.$forum->image) }}"
                             alt="{{ $forum->title }}"
                             class="aspect-video w-full rounded-2xl object-cover sm:aspect-2/1 lg:aspect-3/2">
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-gray-900/10 ring-inset"></div>
                    </div>

                    <!-- Content -->
                    <div class="max-w-xl">
                        <div class="mt-8 flex items-center gap-x-4 text-xs">
                            <time datetime="{{ $forum->created_at->toDateString() }}" class="text-slate-500">
                                {{ $forum->created_at->format('F d, Y') }}
                            </time>

                            <span class="relative z-20 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600">
                                    {{ $forum->category }}
                                </span>
                        </div>

                        <h3 class="mt-3 text-lg text-slate-700 group-hover:text-gray-600">
                            {{ $forum->title }}
                        </h3>

                        <p class="mt-5 line-clamp-3 text-sm text-gray-600">
                            {{ $forum->description }}
                        </p>
                        <div class="flex justify-between">
                            <div class="relative mt-8 flex items-center justify-start gap-x-4 z-20">
                                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5"
                                     class="size-10 rounded-full bg-gray-100" alt="">
                                <div class="text-sm">
                                    <p class="font-semibold text-slate-700">GoErion</p>
                                    <p class="text-gray-600">Co-Founder / CTO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </x-content>
</x-dashboard>
