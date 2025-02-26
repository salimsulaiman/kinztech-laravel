<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    @foreach ($plans as $plan)
        <div
            class="w-full overflow-hidden px-8 py-8 min-h-[350px] bg-slate-100 rounded-2xl hover:bg-curious-blue-500 transition-colors duration-150 ease-in-out flex flex-col justify-between group cursor-default">
            <div class="flex flex-col gap-1">
                <h4
                    class="text-slate-700 font-extrabold text-lg mt-2 group-hover:text-white transition-colors duration-150 ease-in-out text-center">
                    {{ $plan['name'] }}
                </h4>
                <h3
                    class="text-slate-700 font-extrabold text-4xl group-hover:text-white transition-colors duration-150 ease-in-out text-center">
                    {{ $plan['price'] }}
                </h3>
                <ul
                    class="list-disc text-slate-600 group-hover:text-white transition-colors duration-150 ease-in-out font-medium flex flex-col gap-2 mt-4 text-left pl-5">
                    @foreach ($plan['features'] as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>
            </div>
            <a href="#"
                class="mt-8 font-bold text-slate-700 w-full text-center p-2 rounded-full border border-slate-400 group-hover:border-white group-hover:text-white hover:bg-white hover:text-curious-blue-600 transition-colors duration-150 ease-in-out">
                Get Started
            </a>
        </div>
    @endforeach
</div>
