<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body class="bg-black">
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
  

</body>

</html>