<x-layout>
    <div class="max-w-5xl mx-auto p-4">
        <div class="w-full py-20 md:py-28">
            <h1 class="text-4xl font-bold text-center text-slate-700">Our Blogs</h1>
            <h4 class="text-slate-600 text-lg text-center mt-4">Learn how to grow your business with our expert advice.
            </h4>
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 gap-y-16 mt-12">
                @foreach ($posts as $post)
                    <div class="overflow-hidden">
                        <div class="aspect-3/2 rounded-lg overflow-hidden relative">
                            <img src="{{ $post->picture }}" alt="" class="object-cover w-full h-full object-center"
                                loading="lazy">
                        </div>
                        <div class="w-full flex gap-4 mt-4 items-center">
                            <h6 class="text-sm text-slate-600 font-medium"> {{ $post->created_at->format('M d, Y') }}
                            </h6>
                            <a href="#"
                                class="font-medium px-3 py-1 text-sm bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-full">{{ $post->category->name }}</a>
                        </div>
                        <a href="{{ route('blogs.show', $post->slug) }}"
                            class="title text-base font-semibold text-slate-700 hover:text-slate-500 mt-4 line-clamp-2">
                            {{ $post->title }}
                        </a>
                        <p class="content text-sm text-slate-600 mt-4 text-justify leading-relaxed">
                            {{ $post->content }}
                        </p>
                        {{-- <div class="flex gap-4 items-center mt-8">
                            <div class="h-12 w-12 bg-slate-200 rounded-full overflow-hidden relative flex-shrink-0">
                                <img src="{{ $post->user->picture }}" alt=""
                                    class="object-cover w-full h-full object-center">
                            </div>
                            <div class="flex flex-col gap-1 justify-center">
                                <h4 class="text-base font-semibold text-slate-700 line-clamp-1">
                                    {{ $post->user->name }}</h4>
                                <h5 class="text-sm font-medium text-slate-500 line-clamp-1">{{ $post->user->job }}</h5>
                            </div>
                        </div> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
