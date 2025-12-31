@props(['forums'])

<div>
    <div class="">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <!-- Header -->
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-4xl font-semibold tracking-tight text-balance sm:text-5xl">News From the Forum</h2>
                <p class="mt-2 text-lg/8 text-slate-600">Learn how to grow your business with our expert advice.</p>
            </div>

            <!-- Forum Grid -->
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach($forums as $forum)
                    <article class="relative flex flex-col items-start justify-between group">
                        <a href="{{ route('forum.show', $forum->id) }}"
                           class="absolute inset-0 z-10"
                           aria-label="View forum {{ $forum->title }}">
                        </a>

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
                                <time datetime="{{ $forum->created_at->toDateString() }}" class="text-gray-500">
                                    {{ $forum->created_at->format('F d, Y') }}
                                </time>

                                <span class="relative z-20 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600">
                                    {{ $forum->category }}
                                </span>
                            </div>

                            <h3 class="mt-3 text-lg font-semibold text-slate-700 group-hover:text-gray-600">
                                {{ $forum->title }}
                            </h3>

                            <p class="mt-5 line-clamp-3 text-sm text-gray-600">
                                {{ $forum->description }}
                            </p>

                            <div class="relative mt-8 flex items-center gap-x-4 z-20">
                                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5"
                                     class="size-10 rounded-full bg-gray-100" alt="">
                                <div class="text-sm">
                                    <p class="font-semibold text-slate-700">{{ $forum->user->name }}</p>
                                    <p class="text-gray-600">Co-Founder / {{ config('app.name') }}</p>
                                </div>
                            </div>
                        </div>
                    </article>

                @endforeach
            </div>
        </div>
    </div>
</div>
