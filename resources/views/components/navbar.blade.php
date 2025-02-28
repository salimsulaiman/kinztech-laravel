<nav x-data="{ scrolling: false, menuOpen: false }" x-init="window.addEventListener('scroll', () => scrolling = window.scrollY > 30)"
    :class="scrolling ? 'bg-white shadow-xs' : 'bg-white md:bg-transparent'"
    class="w-full font-urbanist fixed top-0 z-50 transition-all duration-200 ease-in-out">
    <div :class="scrolling ? 'py-4 md:py-6' : 'py-4 md:py-12'"
        class="max-w-5xl mx-auto px-4 flex justify-between items-center transition-all duration-200 ease-in-out z-50">
        <a href="#" class="text-2xl font-bold text-curious-blue-700">kinztech</a>

        <div class="md:hidden flex items-center">
            <button @click="menuOpen = !menuOpen"
                class="cursor-pointer transform transition duration-300 ease-in-out flex items-center text-2xl"
                :class="menuOpen ? 'rotate-180' : 'rotate-0'">
                <template x-if="menuOpen">
                    <ion-icon name="close"></ion-icon>
                </template>
                <template x-if="!menuOpen">
                    <ion-icon name="menu"></ion-icon>
                </template>
            </button>
        </div>

        <ul x-show="menuOpen" x-transition:enter="transition ease-in-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-10" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in-out duration-300"
            x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-10"
            class="md:hidden absolute top-12 right-0 bg-white shadow-md w-full p-6 rounded-b-2xl space-y-4 z-30">
            <li><a href="#"
                    class="text-base text-slate-500 hover:text-curious-blue-800 font-semibold transition-colors duration-100 ease-in-out">Home</a>
            </li>
            <li><a href="#"
                    class="text-base text-slate-500 hover:text-curious-blue-800 font-semibold transition-colors duration-100 ease-in-out">About</a>
            </li>
            <li><a href="#"
                    class="text-base text-slate-500 hover:text-curious-blue-800 font-semibold transition-colors duration-100 ease-in-out">Services</a>
            </li>
            <li><a href="#"
                    class="text-base text-slate-500 hover:text-curious-blue-800 font-semibold transition-colors duration-100 ease-in-out">Pricing</a>
            </li>
            <li><button
                    class="block md:hidden w-full text-base text-white bg-curious-blue-600 hover:bg-curious-blue-700 cursor-pointer px-6 py-2 rounded-full">Let's
                    Talk</button></li>
        </ul>

        <ul class="hidden md:flex gap-12">
            <li><a href="/#"
                    class="text-base text-slate-500 hover:text-curious-blue-800 font-semibold transition-colors duration-100 ease-in-out">Home</a>
            </li>
            <li><a href="/#about"
                    class="text-base text-slate-500 hover:text-curious-blue-800 font-semibold transition-colors duration-100 ease-in-out">About</a>
            </li>
            <li><a href="/#services"
                    class="text-base text-slate-500 hover:text-curious-blue-800 font-semibold transition-colors duration-100 ease-in-out">Services</a>
            </li>
            <li><a href="/#pricing"
                    class="text-base text-slate-500 hover:text-curious-blue-800 font-semibold transition-colors duration-100 ease-in-out">Pricing</a>
            </li>
        </ul>

        <button
            class="hidden md:block text-base text-white bg-curious-blue-600 hover:bg-curious-blue-700 cursor-pointer px-6 py-2 rounded-full">Let's
            Talk</button>
    </div>
</nav>
