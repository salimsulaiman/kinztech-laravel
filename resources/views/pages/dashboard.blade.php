<x-layout>
    <div class="max-w-5xl mx-auto p-4">
        {{-- home --}}
        <div class="bg-[url('/public/grid.jpeg')] bg-cover bg-center pt-20 md:pt-28 pb-12 md:pb-28 relative w-full">
            <div class="w-full flex flex-col md:flex-row gap-4">
                <div class="w-full md:w-1/2">
                    <div class="flex gap-2 items-center">
                        <div class="rounded-full w-4 h-4 bg-yellow-300"></div>
                        <div class="rounded-full w-4 h-4 bg-orange-300"></div>
                        <div class="rounded-full w-4 h-4 bg-curious-blue-300"></div>
                        <h4 class="text-base text-slate-800 font-semibold ms-2">Good Design in Invisible</h4>
                    </div>
                    <h1 class="text-4xl lg:text-5xl text-slate-800 font-bold mt-8 leading-tight">
                        Every object tells a story if you know how to read it
                    </h1>
                    <h4 class="text-base text-slate-700 mt-8 leading-loose">
                        Discover the art of storytelling through objects, where each piece reveals its unique history
                        and
                        significance, enriching our understanding and appreciation.
                    </h4>
                    <div class="flex gap-4 items-center mt-8">
                        <button
                            class="text-base text-white bg-curious-blue-600 hover:bg-curious-blue-700 cursor-pointer px-6 py-2 rounded-full flex items-center gap-2">
                            <FiSearch /> <span>|</span> <span>Find Service</span>
                        </button>
                        <button
                            class="text-base text-white bg-java-600 hover:bg-java-700 cursor-pointer px-6 py-2 rounded-full">
                            Let&#39;s Talk
                        </button>
                    </div>
                </div>
                <div class="w-full md:w-1/2 relative">
                    <img src="/assets/woman.png" alt=""
                        class="w-[300px] lg:w-[350px] relative md:absolute left-0 md:left-8 -bottom-12 md:-bottom-30 mx-auto md:mx-0" />
                </div>
            </div>
            <div
                class="w-full max-w-3xl left-1/2 -translate-x-1/2 h-[100px] md:h-[150px] rounded-2xl bg-curious-blue-600 absolute -bottom-24 grid grid-cols-3 divide-x divide-white divide py-4 z-30">
                <div class="flex flex-col justify-center items-center text-white">
                    <h3 class="text-lg font-bold">100+</h3>
                    <h4 class="text-xs md:text-base">Happy Clients</h4>
                </div>
                <div class="flex flex-col justify-center items-center text-white">
                    <h3 class="text-lg font-bold">5.0</h3>
                    <h4 class="text-xs md:text-base">Star Rating</h4>
                </div>
                <div class="flex flex-col justify-center items-center text-white">
                    <h3 class="text-lg font-bold">10+</h3>
                    <h4 class="text-xs md:text-base">Team Members</h4>
                </div>
            </div>
        </div>
        {{-- services --}}
        <div class="bg-white w-full pt-36 pb-16 min-h-[600px]" id="services">
            <div class="mx-auto text-center">
                <h4 class="text-slate-700 font-bold text-base">Services</h4>
                <h1 class="text-2xl mt-3 font-bold text-slate-800">Our Popular Services For You</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                <div
                    class="w-full overflow-hidden px-6 py-8 min-h-[350px] bg-slate-100 rounded-2xl hover:bg-curious-blue-500 transition-colors duration-150 ease-in-out flex flex-col justify-between group cursor-default">
                    <div class="flex flex-col gap-4">
                        <div
                            class="w-16 h-16 rounded-full bg-yellow-500 group-hover:bg-white transition-colors duration-150 ease-in-out overflow-hidden p-4 flex items-center justify-center">
                            <ion-icon name="color-palette-outline"
                                class="text-white text-4xl group-hover:text-curious-blue-500 transition-colors duration-150 ease-in-out"></ion-icon>
                        </div>
                        <h2
                            class="text-slate-700 font-extrabold text-2xl mt-2 group-hover:text-white transition-colors duration-150 ease-in-out">
                            UI UX Design
                        </h2>
                        <p
                            class="text-slate-600 line-clamp-3 group-hover:text-white transition-colors duration-150 ease-in-out">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora nobis deleniti
                            repudiandae quasi
                            adipisci.
                        </p>
                    </div>
                    <a href="#"
                        class="font-bold text-slate-700 group-hover:text-white transition-colors duration-150 ease-in-out">
                        Read More
                    </a>
                </div>
                <div
                    class="w-full overflow-hidden px-6 py-8 min-h-[350px] bg-slate-100 rounded-2xl hover:bg-curious-blue-500 transition-colors duration-150 ease-in-out flex flex-col justify-between group cursor-default">
                    <div class="flex flex-col gap-4">
                        <div
                            class="w-16 h-16 rounded-full bg-curious-blue-500 group-hover:bg-white transition-colors duration-150 ease-in-out p-4 flex items-center justify-center">
                            <ion-icon name="desktop-outline"
                                class="text-white text-4xl group-hover:text-curious-blue-500 transition-colors duration-150 ease-in-out"></ion-icon>

                        </div>
                        <h2
                            class="text-slate-700 font-extrabold text-2xl mt-2 group-hover:text-white transition-colors duration-150 ease-in-out">
                            Web Development
                        </h2>
                        <p
                            class="text-slate-600 line-clamp-3 group-hover:text-white transition-colors duration-150 ease-in-out">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora nobis deleniti
                            repudiandae quasi
                            adipisci.
                        </p>
                    </div>
                    <a href="#"
                        class="font-bold text-slate-700 group-hover:text-white transition-colors duration-150 ease-in-out">
                        Read More
                    </a>
                </div>
                <div
                    class="w-full overflow-hidden px-6 py-8 min-h-[350px] bg-slate-100 rounded-2xl hover:bg-curious-blue-500 transition-colors duration-150 ease-in-out flex flex-col justify-between group cursor-default">
                    <div class="flex flex-col gap-4">
                        <div
                            class="w-16 h-16 rounded-full bg-orange-500 group-hover:bg-white transition-colors duration-150 ease-in-out p-4 flex items-center justify-center">
                            <ion-icon name="camera-outline"
                                class="text-white text-4xl group-hover:text-curious-blue-500 transition-colors duration-150 ease-in-out"></ion-icon>
                        </div>
                        <h2
                            class="text-slate-700 font-extrabold text-2xl mt-2 group-hover:text-white transition-colors duration-150 ease-in-out">
                            Video Editing
                        </h2>
                        <p
                            class="text-slate-600 line-clamp-3 group-hover:text-white transition-colors duration-150 ease-in-out">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora nobis deleniti
                            repudiandae quasi
                            adipisci.
                        </p>
                    </div>
                    <a href="#"
                        class="font-bold text-slate-700 group-hover:text-white transition-colors duration-150 ease-in-out">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-b from-slate-50 to-white overflow-hidden ">
        {{-- about --}}
        <div class="max-w-5xl mx-auto p-4" id="about">
            <div class="w-full flex flex-col md:flex-row py-10 md:py-20">
                <div class="w-full md:w-1/2 relative">
                    <img src="/assets/woman-confuse.png" alt=""
                        class="w-[450px] md:w-[600px] max-w-none relative md:absolute left-1/2 -translate-x-1/2 md:translate-x-0 md:-left-30 bottom-8 md:-bottom-30" />
                </div>
                <div class="w-full md:w-1/2">
                    <h4 class="text-slate-700 font-bold text-base">About Us</h4>
                    <h1 class="text-2xl md:text-4xl mt-3 font-bold text-slate-800 leading-tight">
                        Build yours, create a better future today
                    </h1>
                    <div class="flex flex-col gap-4 mt-8">
                        <div class="w-full p-4 bg-white flex gap-4 items-center border border-slate-300 rounded-full">
                            <div class="h-8 w-8 rounded-full bg-curious-blue-500"></div>
                            <h4 class="text-slate-700 font-bold">After 24/7 VIP Support</h4>
                        </div>
                        <div class="w-full p-4 bg-white flex gap-4 items-center border border-slate-300 rounded-full">
                            <div class="h-8 w-8 rounded-full bg-curious-blue-500"></div>
                            <h4 class="text-slate-700 font-bold">100% Client Satisfactions</h4>
                        </div>
                        <div class="w-full p-4 bg-white flex gap-4 items-center border border-slate-300 rounded-full">
                            <div class="h-8 w-8 rounded-full bg-curious-blue-500"></div>
                            <h4 class="text-slate-700 font-bold">Best Designer and Developer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- plan --}}
        <div class="max-w-5xl mx-auto p-4" x-data="{ plan: 'uiux' }" id="pricing">
            <div class="w-full pt-10 md:pt-20 pb-10">
                <h2 class="text-slate-700 text-2xl font-bold text-center">
                    Choose the plan that's right for you
                </h2>

                <!-- Button Selection -->
                <div class="w-full justify-center flex gap-4 mt-8">
                    <button @click="plan = 'uiux'"
                        :class="plan === 'uiux' ? 'text-white bg-curious-blue-600' :
                            'text-slate-700 bg-transparent hover:bg-slate-200'"
                        class="text-[10px] font-semibold md:font-normal md:text-base cursor-pointer px-6 py-2 rounded-full transition-all">
                        UI/UX Design
                    </button>
                    <button @click="plan = 'webdev'"
                        :class="plan === 'webdev' ? 'text-white bg-curious-blue-600' :
                            'text-slate-700 bg-transparent hover:bg-slate-200'"
                        class="text-[10px] font-semibold md:font-normal md:text-base cursor-pointer px-6 py-2 rounded-full transition-all">
                        Web Development
                    </button>
                    <button @click="plan = 'videoedit'"
                        :class="plan === 'videoedit' ? 'text-white bg-curious-blue-600' :
                            'text-slate-700 bg-transparent hover:bg-slate-200'"
                        class="text-[10px] font-semibold md:font-normal md:text-base cursor-pointer px-6 py-2 rounded-full transition-all">
                        Video Editing
                    </button>
                </div>

                <!-- UI/UX Design -->
                <div x-show="plan === 'uiux'" class="mt-8">
                    @php
                        $plans = [
                            [
                                'name' => 'Basic',
                                'price' => '$199',
                                'features' => [
                                    'Wireframing for 1 Page',
                                    'Basic UI Style Guide',
                                    'Mobile-Responsive Design',
                                    'Color & Typography Selection',
                                    'Delivery in 3 Days',
                                ],
                            ],
                            [
                                'name' => 'Standard',
                                'price' => '$499',
                                'features' => [
                                    'Wireframing & Prototyping (Up to 5 Pages)',
                                    'Custom UI Components',
                                    'User-Centered Design',
                                    'Mobile & Tablet Optimization',
                                    'Basic UX Research',
                                    'Delivery in 7 Days',
                                ],
                            ],
                            [
                                'name' => 'Premium',
                                'price' => '$899',
                                'features' => [
                                    'End-to-End UI/UX Design (Unlimited Pages)',
                                    'Advanced Prototyping & Interactions',
                                    'Design System & Style Guide',
                                    'In-Depth UX Research & Testing',
                                    'User Persona & Journey Mapping',
                                    'High-Fidelity Design with Animations',
                                    'Delivery in 15 Days',
                                ],
                            ],
                        ];
                    @endphp
                    <x-plan-list :plans="$plans"></x-plan-list>
                </div>

                <!-- Web Development -->
                <div x-show="plan === 'webdev'" class="mt-8">
                    @php
                        $plans = [
                            [
                                'name' => 'Basic',
                                'price' => '$299',
                                'features' => [
                                    'Single Page Website',
                                    'Basic UI/UX Design',
                                    'Responsive Layout',
                                    'Basic SEO Setup',
                                    'Delivery in 5 Days',
                                ],
                            ],
                            [
                                'name' => 'Standard',
                                'price' => '$599',
                                'features' => [
                                    'Multi-Page Website',
                                    'Custom UI/UX Design',
                                    'Mobile Optimization',
                                    'SEO & Performance Optimization',
                                    'Basic CMS Integration',
                                    'Delivery in 10 Days',
                                ],
                            ],
                            [
                                'name' => 'Premium',
                                'price' => '$999',
                                'features' => [
                                    'Fully Custom Web Development',
                                    'Advanced UI/UX Animations',
                                    'E-commerce & Payment Integration',
                                    'High-Speed Performance Optimization',
                                    'API & Third-Party Integration',
                                    'Advanced SEO & Analytics',
                                    'Delivery in 20 Days',
                                ],
                            ],
                        ];
                    @endphp
                    <x-plan-list :plans="$plans"></x-plan-list>
                </div>

                <!-- Video Editing -->
                <div x-show="plan === 'videoedit'" class="mt-8">
                    @php
                        $plans = [
                            [
                                'name' => 'Basic',
                                'price' => '$199',
                                'features' => [
                                    'Basic Video Editing',
                                    'Up to 5 Minutes Video',
                                    'Standard Transitions & Effects',
                                    'Delivery in 3 Days',
                                ],
                            ],
                            [
                                'name' => 'Standard',
                                'price' => '$499',
                                'features' => [
                                    'Advanced Video Editing',
                                    'Up to 15 Minutes Video',
                                    'Color Correction & Grading',
                                    'Custom Transitions & Effects',
                                    'Delivery in 7 Days',
                                ],
                            ],
                            [
                                'name' => 'Premium',
                                'price' => '$899',
                                'features' => [
                                    'Professional Video Editing',
                                    'Unlimited Video Length',
                                    'Cinematic Effects & VFX',
                                    'Sound Design & Mixing',
                                    'Delivery in 14 Days',
                                ],
                            ],
                        ];
                    @endphp
                    <x-plan-list :plans="$plans"></x-plan-list>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-5xl mx-auto p-4">
        <div class="bg-[url('/public/magicpatern.jpeg')] bg-cover bg-center py-10 relative w-full">
            <div class="mx-auto text-center">
                <h1 class="text-2xl mt-3 font-bold text-slate-800">What Our Client Says</h1>
                <h4 class="max-w-[500px] mx-auto text-slate-700 mt-4">
                    Discover what our clients have to say about their experiences and how our services have made a
                    difference for
                    them.
                </h4>
            </div>
            <div class="w-full mt-20">
                <div class="w-full flex flex-col gap-2">
                    <div class="h-28 w-28 bg-slate-200 rounded-full mx-auto overflow-hidden relative">
                        <img src="/assets/profile.png" alt="" class="object-cover object-center" />
                    </div>
                    <h4 class="text-slate-700 text-xl text-center font-bold mt-2">Salim Sulaiman</h4>
                    <h5 class="text-slate-600 text-base text-center font-normal">PT Solusi Bersama</h5>
                    <div class="flex gap-1 justify-center text-yellow-500 w-full">
                        <ion-icon class="w-6" name="star"></ion-icon>
                        <ion-icon class="w-6" name="star"></ion-icon>
                        <ion-icon class="w-6" name="star"></ion-icon>
                        <ion-icon class="w-6" name="star"></ion-icon>
                        <ion-icon class="w-6" name="star"></ion-icon>
                    </div>
                    <p class="text-slate-700 text-center max-w-[650px] mx-auto mt-8">
                        Creating a website with KinzMedia is an excellent choice because they provide high-quality
                        design, fast
                        performance, user-friendly interfaces, and professional support, ensuring a seamless experience
                        for your
                        business or personal needs.
                    </p>
                </div>
            </div>
        </div>
        <div className="bg-white relative w-full">
            <div class="flex flex-col md:flex-row w-full relative items-center py-8 md:py-32">
                <div class="w-full md:w-7/12">
                    <div class="w-full p-8 md:pe-28 bg-curious-blue-600 text-white rounded-2xl">
                        <h3 class="text-2xl">Lets make it happen</h3>
                        <p class="text-base mt-4 leading-loose">
                            Have questions or need assistance? Our team is here to help you every step of the way. Reach
                            out to us
                            today and let's turn your vision into reality with a solution that fits your needs
                            perfectly!
                        </p>
                        <div class="flex flex-col gap-4 mt-8">
                            <div class="flex gap-2 items-center">
                                <ion-icon class="w-4" name="location"></ion-icon>
                                <h4>Tegal Regency, Central Java</h4>
                            </div>
                            <div class="flex gap-2 items-center">
                                <ion-icon class="w-4" name="mail"></ion-icon>
                                <h4>kinzmedia@gmail.com</h4>
                            </div>
                            <div class="flex gap-2 items-center">
                                <ion-icon class="w-4" name="call"></ion-icon>
                                <h4>087776421079</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full md:w-6/12 relative md:absolute right-auto md:right-0 md:bottom-auto top-8 md:top-auto">
                    <div class="min-h-[400px] w-full rounded-2xl bg-slate-500/50 backdrop-blur-lg p-8">
                        <h1 class="text-white text-2xl font-bold">Contact Us</h1>

                        <form class="mt-6 space-y-4">
                            <div>
                                <input type="text" placeholder="Enter your name"
                                    class="w-full mt-1 p-3 rounded-lg focus:ring-0 bg-white outline-none" />
                            </div>

                            <div>
                                <input type="email" placeholder="Enter your email"
                                    class="w-full mt-1 p-3 rounded-lg focus:ring-0 bg-white outline-none" />
                            </div>

                            <div>
                                <textarea placeholder="Write your message here..." rows={4}
                                    class="w-full mt-1 p-3 rounded-lg focus:ring-0 bg-white outline-none"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-curious-blue-600 text-white px-3 py-2 rounded-full hover:bg-curious-blue-700 transition cursor-pointer">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
