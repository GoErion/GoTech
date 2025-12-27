@props(['services'])

<div>
    <div class="mt-4 sm:mt-56">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl sm:text-center">
                <h2 class="text-base/7 text-indigo-600">Everything you need</h2>
                <p class="mt-2 text-4xl tracking-tight text-pretty sm:text-5xl sm:text-balance">Services We Offer!</p>
                <p class="mt-6 text-lg/8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis.</p>
            </div>
        </div>
        <div class="mx-auto mt-4 max-w-7xl px-6 sm:mt-20 md:mt-24 lg:px-8">
            <dl class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base/7sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16">
                @foreach($services as $service)
                <div class="relative pl-9 border border-slate-400 rounded-2xl p-8">
                    <dt class="inline text-slate-600">
                        {{ $service->subtitle }}.
                    </dt>
                    <dd class="inline">{{ $service->description }}</dd>
                </div>
                    @endforeach
            </dl>
        </div>
    </div>
</div>
