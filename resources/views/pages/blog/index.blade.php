<x-layout>
    <div class="max-w-5xl mx-auto p-4">
        <div class="w-full py-20 md:py-28 flex gap-16">
            <div class="w-9/12">
                <h1 class="text-4xl font-bold text-start text-slate-700 my-8">{{ $post->title }}</h1>
                <h6 class="text-sm text-slate-600 font-medium mb-8 italic"> {{ $post->created_at->format('M d, Y') }}
                </h6>
                <img src="{{ $post->picture }}" alt="" class="w-full" loading="lazy">
                <p class="text-slate-600 text-lg text-start mt-8">{{ $post->content }}</p>
            </div>
            <div class="w-3/12">
                <h4 class="w-full font-semibold text-xl my-8">Similar posts</h4>
                @foreach ($posts as $postByCategory)
                    <div class="w-full mb-8">
                        <div class="flex flex-col gap-1 w-full">
                            <img src="{{ $postByCategory->picture }}" alt="" class="w-full rounded-lg"
                                loading="lazy">
                            <a href="{{ route('blogs.show', $postByCategory->slug) }}"
                                class="text-slate-700 hover:text-slate-500 font-bold line-clamp-2">{{ $postByCategory->title }}</a>
                            <p class="line-clamp-1 text-slate-600">{{ $postByCategory->content }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</x-layout>
