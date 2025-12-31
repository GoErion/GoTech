@props(['services'])

<div>
    <div class="">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl sm:text-center">
                <h2 class="text-base/7 text-indigo-600">Everything you need</h2>
                <p class="mt-2 text-4xl tracking-tight text-pretty sm:text-5xl sm:text-balance">Services We Offer!</p>
                <p class="mt-6 text-lg/8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis.</p>
            </div>
        </div>
        <div class="mx-auto mt-4 max-w-7xl px-6 sm:mt-20 md:mt-24 lg:px-8">
            <dl class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 text-base/7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-8 lg:gap-y-8">
                @foreach($services as $service)
                <div class="relative min-h-47.25 pl-9 border border-slate-900 rounded-2xl p-4">
                    <dt class="block text-slate-500">
                        {{ $service->subtitle }}.
                    </dt>
                    <dd class="block text-2xl wrap-anywhere text-pretty">{{ $service->description }}</dd>
                    <a href="{{ route('services') }}" class="inline-flex items-center bg-slate-800 border border-transparent leading-5 rounded-lg text-sm px-4 py-2 mt-4">Read more</a>
                </div>
                    @endforeach
            </dl>
        </div>
    </div>
</div>
