<x-guest>
{{--    hero--}}
    <div>
        <x-hero :hero="$hero" />
    </div>
{{--    services--}}
    <div>
        <x-services :services="$services"/>
    </div>
{{--    forum--}}
    <div>
        <div class="mt-12">
            <x-forums :forums="$forums"/>
        </div>
    </div>
{{--    <!-- Testimonial section -->--}}
    <div>
        <x-testimonial/>
    </div>
{{--    news letter--}}
    <div>
        <x-news-letter/>
    </div>
</x-guest>
