<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body class="bg-[#000A04]">
    <!-- NAVIGATION -->
    <nav class="fixed w-full z-50 py-3 top-0 start-0 border-b border-white/5"
        style="background: rgba(0,0,0,0.75); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px);">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto px-6 py-3">

            {{-- Logo --}}
            <a href="/" class="flex items-center space-x-2.5">
                {{-- Play icon badge --}}
                <div class="w-8 h-8 rounded-full flex items-center justify-center"
                    style="background: linear-gradient(135deg, #3b82f6, #1d4ed8);">
                    <svg class="w-3.5 h-3.5 text-white ml-0.5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z" />
                    </svg>
                </div>
                <span class="text-white font-medium text-2xl tracking-tight">
                    SimilArt
                </span>
            </a>

            {{-- Desktop Nav Links --}}
            <ul class="hidden md:flex items-center space-x-8">
                <li>
                    <a href="#quickstart"
                        class="text-gray-400 text-sm hover:text-white transition-colors duration-200">
                        Quickstart
                    </a>
                </li>
                <li>
                    <a href="#why"
                        class="text-gray-400 text-sm hover:text-white transition-colors duration-200">
                        Why Choose us
                    </a>
                </li>
                <li>
                    <a href="#testimonials"
                        class="text-gray-400 text-sm hover:text-white transition-colors duration-200">
                        Testimonials
                    </a>
                </li>
                <li>
                    <a href="#how"
                        class="text-gray-400 text-sm hover:text-white transition-colors duration-200">
                        How it Works
                    </a>
                </li>
                <li>
                    <a href="#faq"
                        class="text-gray-400 text-sm hover:text-white transition-colors duration-200">
                        FAQ
                    </a>
                </li>
            </ul>

            {{-- Right Side Actions --}}
            <div class="flex items-center space-x-4">

                {{-- Dark mode toggle --}}
                <button class="text-gray-400 hover:text-white transition-colors duration-200 hidden md:block"
                    title="Toggle theme">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M21 12.79A9 9 0 1 1 11.21 3a7 7 0 0 0 9.79 9.79z" />
                    </svg>
                </button>

                {{-- CTA Button --}}
                <a href="#explore"
                    class="text-base bg-green-600 font-medium transition-all duration-300 hover:shadow-[0px_0px_20px_rgba(0,255,0,0.5)] px-4 py-2 rounded-full">
                    Start Exploring
                </a>

                {{-- Mobile hamburger --}}
                <button data-collapse-toggle="similart-mobile-menu" type="button"
                    class="inline-flex items-center p-2 w-9 h-9 justify-center text-gray-400 rounded-lg md:hidden hover:text-white hover:bg-white/5 focus:outline-none transition-colors"
                    aria-controls="similart-mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                    </svg>
                </button>

            </div>
        </div>

        {{-- Mobile Menu --}}
        <div class="hidden md:hidden px-6 pb-4" id="similart-mobile-menu"
            style="background: rgba(0,0,0,0.95); border-top: 1px solid rgba(255,255,255,0.06);">
            <ul class="flex flex-col space-y-1 pt-3">
                <li><a href="#quickstart" class="block text-gray-400 hover:text-white text-sm py-2 px-3 rounded-lg hover:bg-white/5 transition-all">Quickstart</a></li>
                <li><a href="#why" class="block text-gray-400 hover:text-white text-sm py-2 px-3 rounded-lg hover:bg-white/5 transition-all">Why Choose us</a></li>
                <li><a href="#testimonials" class="block text-gray-400 hover:text-white text-sm py-2 px-3 rounded-lg hover:bg-white/5 transition-all">Testimonials</a></li>
                <li><a href="#how" class="block text-gray-400 hover:text-white text-sm py-2 px-3 rounded-lg hover:bg-white/5 transition-all">How it Works</a></li>
                <li><a href="#faq" class="block text-gray-400 hover:text-white text-sm py-2 px-3 rounded-lg hover:bg-white/5 transition-all">FAQ</a></li>
            </ul>
            <a href="#explore"
                class="mt-4 w-full inline-flex justify-center items-center px-5 py-2.5 rounded-full text-base font-semibold text-black bg-green-600">
                Start Exploring
            </a>
        </div>
    </nav>
    <!-- JUMBOTRON -->
    <section class="bg-[#000A04] mt-30 relative overflow-hidden pb-10 md:pb-15">
        <div class="py-8 px-4 mx-auto max-w-screen-2xl text-center lg:py-16">
            <h1 class="mb-6 text-4xl font-medium tracking-tighter text-white md:text-5xl lg:text-6xl">We invest in the <br> world’s potential</h1>
            <p class="mb-8 text-base font-normal text-gray-300 md:text-xl">Here at Flowbite we focus on markets where technology, innovation, <br> and capital can unlock long-term value and drive economic growth.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 md:space-x-4">


                <form class="w-full max-w-xl">
                    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="search" class="block backdrop-blur-4xl w-full p-3 ps-9 bg-transparent border border-gray-500 text-gray text-sm rounded-full focus:ring-green-600 focus:border-green-600 focus:shadow-[0_0_20px_rgba(16,185,80,0.4)] shadow-xs placeholder:text-gray-400 transition-shadow duration-300" placeholder="Search for an artist" required />
                        <!-- <button type="button" class="absolute end-1.5 bottom-1.5 text-black bg-green-600 hover:bg-green-600 transition-all duration-300 border border-transparent focus:ring-4 focus:ring-green-300 shadow-xs font-medium leading-5 rounded-full text-xs px-3 py-1.5 focus:outline-none">Go</button> -->
                    </div>
                </form>


            </div>
        </div>
        {{-- Bottom glow --}}
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full h-30 pointer-events-none"
            style="background: radial-gradient(ellipse at bottom, rgba(200,255,220,0.35) 0%, rgba(16,185,80,0.2) 30%, rgba(16,185,80,0.06) 60%, transparent 75%); filter: blur(20px);">
        </div>
    </section>
    <!-- ARTISTS -->
    <section class="w-full flex items-center justify-center">
        <div class="w-full rounded-lg py-20 bg-[#000A04] max-w-7xl relative overflow-hidden">

            {{-- Top border --}}
            <div class="absolute top-0 left-1/2 -translate-x-1/2 h-0.5 w-full bg-gradient-to-r from-transparent via-white/60 to-transparent"></div>

            {{-- Top glow --}}
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-30 pointer-events-none"
                style="background: radial-gradient(ellipse at top, rgba(200,255,220,0.35) 0%, rgba(16,185,80,0.2) 30%, rgba(16,185,80,0.06) 60%, transparent 75%); filter: blur(20px);">
            </div>

            <div class="relative flex flex-col md:flex-row items-center md:items-start gap-8 px-8">

                {{-- Left: Artist Card --}}
                <div class="flex-shrink-0 w-full max-w-[300px]">
                    <div class="relative bg-[rgba(102,102,102,0.1)] backdrop-blur-md w-full border-[0.1px] border-[#323232] rounded-3xl">
                        <button id="dropdownButton" data-dropdown-toggle="dropdown"
                            class="absolute top-2 end-2 text-body hover:text-heading bg-green-600 box-border border border-transparent cursor-pointer hover:ring-4 hover:ring-green-300 transition-all duration-300 rounded-full mt-5 mr-5 p-1.5 focus:outline-none"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-black" viewBox="0 -960 960 960">
                                <path d="M320-200v-560l440 280-440 280Z" />
                            </svg>
                        </button>
                        <div class="flex flex-col gap-1 items-center">
                            <div class="w-24 h-24 mb-6 mt-5 bg-white rounded-full overflow-hidden">
                                <img src="https://i.pravatar.cc/96?img=47" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <h5 class="mb-0.5 text-2xl font-regular tracking-tight text-white">Bonnie Green</h5>
                            <span class="text-sm text-gray-300">RnB | Hip Hop | Rap</span>
                            <span class="text-sm text-gray-300">#10 in the world</span>
                            <span class="text-sm text-gray-300">20,000,456 monthly listeners</span>
                            <div class="flex overflow-hidden mt-4 md:mt-6 flex-col w-full">
                                <a type="button" class="inline-flex justify-center items-center cursor-pointer text-white box-border border border-[#323232] hover:bg-[rgba(102,102,102,0.1)] transition-all duration-300 font-light text-md text-center p-4">
                                    Listen on Spotify
                                </a>
                                <a type="button" class="inline-flex overflow-hidden justify-center cursor-pointer items-center text-white box-border border border-[#323232] hover:bg-[rgba(102,102,102,0.1)] transition-all duration-300 font-light text-md text-center p-4">
                                    Listen on Apple Music
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right: Floating Artists --}}
                <div class="relative flex-1 w-full">

                    {{-- Mobile: grid layout --}}
                    <div class="grid grid-cols-3 gap-6 place-items-center md:hidden py-4">
                        <div class="artist-float flex flex-col items-center gap-1" style="animation: float1 6s ease-in-out infinite;">
                            <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/56?img=11" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Drake</span>
                        </div>
                        <div class="artist-float flex flex-col items-center gap-1" style="animation: float2 7s ease-in-out infinite;">
                            <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/64?img=12" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Kendrick</span>
                        </div>
                        <div class="artist-float flex flex-col items-center gap-1" style="animation: float3 5.5s ease-in-out infinite;">
                            <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/48?img=13" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Travis</span>
                        </div>
                        <div class="artist-float flex flex-col items-center gap-1" style="animation: float2 8s ease-in-out infinite 1s;">
                            <div class="w-14 h-14 rounded-full border border-green-500/40 overflow-hidden">
                                <img src="https://i.pravatar.cc/64?img=14" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">The Weeknd</span>
                        </div>
                        <div class="artist-float flex flex-col items-center gap-1" style="animation: float1 6.5s ease-in-out infinite 0.5s;">
                            <div class="w-14 h-14 rounded-full border-2 border-green-500/60 overflow-hidden">
                                <img src="https://i.pravatar.cc/80?img=15" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">J. Cole</span>
                        </div>
                        <div class="artist-float flex flex-col items-center gap-1" style="animation: float3 7.5s ease-in-out infinite 1.5s;">
                            <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/56?img=16" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Future</span>
                        </div>
                        <div class="artist-float flex flex-col items-center gap-1" style="animation: float1 7s ease-in-out infinite 2s;">
                            <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/48?img=17" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Lil Baby</span>
                        </div>
                        <div class="artist-float flex flex-col items-center gap-1" style="animation: float2 6s ease-in-out infinite 0.8s;">
                            <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/64?img=18" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">21 Savage</span>
                        </div>
                        <div class="artist-float flex flex-col items-center gap-1" style="animation: float3 5s ease-in-out infinite 1.2s;">
                            <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/48?img=19" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Gunna</span>
                        </div>
                        <div class="artist-float flex flex-col items-center gap-1" style="animation: float1 7s ease-in-out infinite 2s;">
                            <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/48?img=17" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Lil Baby</span>
                        </div>
                        <div class="artist-float flex flex-col items-center gap-1" style="animation: float2 6s ease-in-out infinite 0.8s;">
                            <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/64?img=18" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">21 Savage</span>
                        </div>
                        <div class="artist-float flex flex-col items-center gap-1" style="animation: float3 5s ease-in-out infinite 1.2s;">
                            <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/48?img=19" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Gunna</span>
                        </div>
                    </div>

                    {{-- Desktop: absolute floating --}}
                    <div class="hidden md:block relative h-[400px]">
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 5%; left: 15%; animation: float1 6s ease-in-out infinite;">
                            <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/56?img=11" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Drake</span>
                        </div>
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 10%; left: 50%; animation: float2 7s ease-in-out infinite;">
                            <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/64?img=12" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Kendrick</span>
                        </div>
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 5%; left: 75%; animation: float3 5.5s ease-in-out infinite;">
                            <div class="w-12 h-12 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/48?img=13" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Travis</span>
                        </div>
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 40%; left: 10%; animation: float2 8s ease-in-out infinite 1s;">
                            <div class="w-16 h-16 rounded-full border border-green-500/40 overflow-hidden">
                                <img src="https://i.pravatar.cc/64?img=14" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">The Weeknd</span>
                        </div>
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 35%; left: 40%; animation: float1 6.5s ease-in-out infinite 0.5s;">
                            <div class="w-20 h-20 rounded-full border-2 border-green-500/60 overflow-hidden">
                                <img src="https://i.pravatar.cc/80?img=15" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">J. Cole</span>
                        </div>
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 30%; left: 70%; animation: float3 7.5s ease-in-out infinite 1.5s;">
                            <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/56?img=16" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Future</span>
                        </div>
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 65%; left: 20%; animation: float1 7s ease-in-out infinite 2s;">
                            <div class="w-12 h-12 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/48?img=17" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Lil Baby</span>
                        </div>
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 75%; left: 35%; animation: float1 7s ease-in-out infinite 2s;">
                            <div class="w-12 h-12 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/48?img=17" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Lil Baby</span>
                        </div>
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 65%; left: 55%; animation: float2 6s ease-in-out infinite 0.8s;">
                            <div class="w-16 h-16 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/64?img=18" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">21 Savage</span>
                        </div>
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 68%; left: 80%; animation: float3 5s ease-in-out infinite 1.2s;">
                            <div class="w-12 h-12 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/48?img=19" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Gunna</span>
                        </div>
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 65%; left: 55%; animation: float2 6s ease-in-out infinite 0.8s;">
                            <div class="w-16 h-16 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/64?img=18" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">21 Savage</span>
                        </div>
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 68%; left: 80%; animation: float3 5s ease-in-out infinite 1.2s;">
                            <div class="w-12 h-12 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/48?img=19" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Gunna</span>
                        </div>
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 25%; left: 25%; animation: float2 6s ease-in-out infinite 0.8s;">
                            <div class="w-16 h-16 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/64?img=18" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">21 Savage</span>
                        </div>
                        <div class="artist-float absolute flex flex-col items-center gap-1" style="top: 47%; left: 60%; animation: float3 5s ease-in-out infinite 1.2s;">
                            <div class="w-12 h-12 rounded-full border border-white/20 overflow-hidden">
                                <img src="https://i.pravatar.cc/48?img=19" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <span class="text-white text-xs font-medium">Gunna</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes float1 {

            0%,
            100% {
                transform: translateY(0) translateX(0);
            }

            33% {
                transform: translateY(-10px) translateX(4px);
            }

            66% {
                transform: translateY(6px) translateX(-4px);
            }
        }

        @keyframes float2 {

            0%,
            100% {
                transform: translateY(0) translateX(0);
            }

            33% {
                transform: translateY(8px) translateX(-5px);
            }

            66% {
                transform: translateY(-8px) translateX(5px);
            }
        }

        @keyframes float3 {

            0%,
            100% {
                transform: translateY(0) translateX(0);
            }

            25% {
                transform: translateY(-8px) translateX(6px);
            }

            75% {
                transform: translateY(8px) translateX(-3px);
            }
        }

        .artist-float {
            transition: transform 0.2s ease;
            will-change: transform;
            cursor: pointer;
        }

        .artist-float:hover {
            transform: scale(1.12) !important;
            animation-play-state: paused;
        }

        .artist-float:hover img {
            box-shadow: 0 0 16px rgba(16, 185, 80, 0.5);
        }
    </style>

</body>

</html>