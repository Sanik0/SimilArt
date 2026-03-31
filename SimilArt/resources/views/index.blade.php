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
                    class="text-base bg-green-600 hidden md:block font-medium transition-all duration-300 hover:shadow-[0px_0px_20px_rgba(0,255,0,0.5)] px-4 py-2 rounded-full">
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
    <section style="background: linear-gradient(to top, #000A04, #000000);" class=" mt-30 relative overflow-hidden pb-10 md:pb-15">
        <div class="py-8 px-4 mx-auto max-w-screen-2xl text-center lg:py-16">
            <h1 class="mb-6 text-4xl font-medium tracking-tighter text-white md:text-5xl lg:text-6xl">Disover New Artists <br>With Just a Click</h1>
            <p class="mb-8 text-base font-normal text-gray-300 md:text-xl">Here at Flowbite we focus on markets where technology, innovation, <br> and capital can unlock long-term value and drive economic growth.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 md:space-x-4">


                <div class="relative z-10 w-full max-w-2xl flex justify-center mb-10 px-8">
                    <form class="w-full" onsubmit="searchArtist(event)">
                        <label for="artist-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="artist-search"
                                class="block w-full p-3 ps-9 bg-transparent border border-gray-500 text-white text-sm rounded-full focus:ring-green-600 focus:border-green-600 focus:shadow-[0_0_20px_rgba(16,185,80,0.4)] shadow-xs placeholder:text-gray-400 transition-shadow duration-300"
                                placeholder="Search for an artist" />
                            <button type="submit"
                                class="absolute end-1.5 top-1/2 -translate-y-1/2 text-black bg-green-600 hover:bg-green-500 transition-all duration-300 font-medium rounded-full text-xs px-4 py-1.5">
                                Search
                            </button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
        {{-- Bottom glow --}}
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full h-30 pointer-events-none"
            style="background: radial-gradient(ellipse at bottom, rgba(200,255,220,0.35) 0%, rgba(16,185,80,0.2) 30%, rgba(16,185,80,0.06) 60%, transparent 75%); filter: blur(20px);">
        </div>
    </section>
    <!-- ARTISTS -->
    <section class="w-full flex items-center justify-center">
        <div class="w-full flex items-center justify-center rounded-lg py-20 relative overflow-hidden" style="background: linear-gradient(to bottom, #000A04, #000000);">
            <div class="w-full max-w-screen-xl">
                {{-- Top border --}}
                <div class="absolute top-0 left-1/2 -translate-x-1/2 h-0.5 w-full bg-gradient-to-r from-transparent via-white/60 to-transparent"></div>

                {{-- Top glow --}}
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-30 pointer-events-none"
                    style="background: radial-gradient(ellipse at top, rgba(200,255,220,0.35) 0%, rgba(16,185,80,0.2) 30%, rgba(16,185,80,0.06) 60%, transparent 75%); filter: blur(20px);">
                </div>

                {{-- Main content --}}
                <div class="relative flex mt-5 md:mt-25  flex-col md:flex-row items-start gap-8 px-8">

                    {{-- Left: Artist Card --}}
                    <div class="flex-shrink-0 w-full max-w-[300px] mx-auto md:mx-0">

                        {{-- Empty state - hidden by default --}}
                        <div id="artist-empty" class="relative bg-[rgba(102,102,102,0.1)] backdrop-blur-md w-full border-[0.1px] border-[#323232] rounded-3xl p-8 flex-col items-center justify-center min-h-[300px] hidden">
                            <svg class="w-12 h-12 text-gray-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                            </svg>
                            <p class="text-gray-500 text-sm text-center">Search for an artist to see their info</p>
                        </div>

                        {{-- Loaded artist card - visible by default with Drake --}}
                        <div id="artist-card" class="relative bg-[rgba(102,102,102,0.1)] backdrop-blur-md w-full border-[0.1px] border-[#323232] rounded-3xl">
                            <button id="play-button"
                                class="absolute top-2 end-2 bg-green-600 box-border border border-transparent cursor-pointer hover:ring-4 hover:ring-green-300 transition-all duration-300 rounded-full mt-5 mr-5 p-1.5 focus:outline-none"
                                type="button" title="Preview top track">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-black" viewBox="0 -960 960 960">
                                    <path d="M320-200v-560l440 280-440 280Z" />
                                </svg>
                            </button>
                            <div class="flex flex-col gap-1 items-center">
                                <div class="w-24 h-24 mb-4 mt-5 rounded-full overflow-hidden border-2 border-green-500 bg-gray-800">
                                    <img id="artist-image"
                                        src="https://cdn-images.dzcdn.net/images/artist/5d2fa7f140a6bdc2c864c3465a61fc71/500x500-000000-80-0-0.jpg"
                                        class="w-full h-full object-cover" alt="artist" />
                                </div>
                                <h5 id="artist-name" class="mb-0.5 text-2xl font-regular tracking-tight text-white text-center px-4">Drake</h5>
                                <span id="artist-tags" class="text-sm text-gray-300 text-center px-4">Hip-Hop | Rap | Pop</span>
                                <span id="artist-popularity" class="text-xs text-gray-400 mt-0.5">23,906,313 fans on Deezer</span>
                                <span id="artist-listeners" class="text-sm text-green-400 font-medium mt-1">55,441,858 monthly listeners</span>
                                <p id="artist-bio" class="text-xs text-gray-400 text-center px-4 mt-2 line-clamp-3">Aubrey Drake Graham is a Canadian rapper, singer, songwriter, and actor. He is one of the world's best-selling music artists with over 170 million records sold worldwide.</p>
                                <div class="flex overflow-hidden mt-4 md:mt-6 flex-col w-full">
                                    <a id="deezer-link" href="https://www.deezer.com/artist/246791" target="_blank"
                                        class="inline-flex justify-center items-center gap-2 cursor-pointer text-white box-border border border-[#323232] hover:bg-[rgba(102,102,102,0.1)] transition-all duration-300 font-light text-sm text-center p-4">
                                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M18.81 11.282H24v1.474h-5.19zm0 3.21H24v1.474h-5.19zm0-6.418H24v1.473h-5.19zM0 17.906h5.19v-1.474H0zm6.462 0h5.19v-1.474h-5.19zm6.463 0h5.19v-1.474h-5.19zm6.462 0H24v-1.474h-5.19zM0 14.492h5.19v-1.474H0zm6.462 0h5.19v-1.474h-5.19zm6.463 0h5.19v-1.474h-5.19zM6.462 11.08h5.19V9.606h-5.19zm6.463 0h5.19V9.606h-5.19z" />
                                        </svg>
                                        Listen on Deezer
                                    </a>
                                    <a id="apple-music-link" href="https://music.apple.com/search?term=Drake" target="_blank"
                                        class="inline-flex justify-center items-center gap-2 cursor-pointer text-white box-border border border-[#323232] hover:bg-[rgba(102,102,102,0.1)] transition-all duration-300 font-light text-sm text-center p-4">
                                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M23.994 6.124a9.23 9.23 0 00-.24-2.19c-.317-1.31-1.048-2.31-2.1-3.123a5.022 5.022 0 00-1.515-.94c-.938-.332-1.894-.519-2.876-.548C16.67.305 16.076.3 15.482.296H8.518C7.924.3 7.33.305 6.737.323c-.982.029-1.938.216-2.876.548a5.014 5.014 0 00-1.515.94C1.294 2.624.563 3.624.246 4.934a9.23 9.23 0 00-.24 2.19C-.006 7.738 0 8.343 0 8.938v6.124c0 .595.006 1.2.03 1.794a9.23 9.23 0 00.24 2.19c.317 1.31 1.048 2.31 2.1 3.123a5.014 5.014 0 001.515.94c.938.332 1.894.519 2.876.548.593.018 1.187.024 1.781.02h6.964c.594.004 1.188-.002 1.781-.02.982-.029 1.938-.216 2.876-.548a5.014 5.014 0 001.515-.94c1.052-.813 1.783-1.813 2.1-3.123a9.23 9.23 0 00.24-2.19c.024-.594.03-1.199.03-1.794V8.938c0-.595-.006-1.2-.006-1.814zM12 18.404a6.404 6.404 0 110-12.808 6.404 6.404 0 010 12.808zm6.61-11.56a1.5 1.5 0 110-3 1.5 1.5 0 010 3zM12 7.01a4.99 4.99 0 100 9.98A4.99 4.99 0 0012 7.01z" />
                                        </svg>
                                        Listen on Apple Music
                                    </a>
                                    <a id="lastfm-link" href="https://www.last.fm/music/Drake" target="_blank"
                                        class="inline-flex justify-center items-center gap-2 cursor-pointer text-white box-border border-[#323232] hover:bg-[rgba(102,102,102,0.1)] transition-all duration-300 font-light text-sm text-center p-4">
                                        View on Last.fm
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Loading state --}}
                        <div id="artist-loading" class="relative bg-[rgba(102,102,102,0.1)] backdrop-blur-md w-full border-[0.1px] border-[#323232] rounded-3xl hidden p-5">
                            <div class="flex justify-center mt-5 mb-4">
                                <div class="w-24 h-24 rounded-full skeleton"></div>
                            </div>
                            <div class="skeleton h-5 w-3/4 mx-auto rounded-full mb-2"></div>
                            <div class="skeleton h-3 w-2/3 mx-auto rounded-full mb-1"></div>
                            <div class="skeleton h-3 w-1/2 mx-auto rounded-full mb-4"></div>
                            <div class="skeleton h-2.5 w-full rounded-full mb-1.5"></div>
                            <div class="skeleton h-2.5 w-5/6 rounded-full mb-1.5"></div>
                            <div class="skeleton h-2.5 w-4/6 rounded-full mb-6"></div>
                            <div class="skeleton h-10 w-full rounded-none mb-0"></div>
                            <div class="skeleton h-10 w-full rounded-none"></div>
                        </div>

                    </div>

                    {{-- Right: Similar Artists --}}
                    <div class="relative flex-1 w-full">

                        {{-- Empty state - hidden by default --}}
                        <div id="similar-empty" class="hidden items-center justify-center h-[300px] md:h-[400px]">
                            <p class="text-gray-600 text-sm">Similar artists will appear here</p>
                        </div>

                        {{-- Mobile grid - visible by default with Drake's similar artists --}}
                        <div id="similar-mobile" class="grid grid-cols-3 gap-6 place-items-center md:hidden py-4">
                            <div onclick="loadArtist('The Weeknd')" class="artist-default flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; animation: float1 6s ease-in-out infinite;">
                                <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/theweeknd.jpg" class="w-full h-full object-cover rounded-full" alt="The Weeknd" />
                                </div>
                                <span class="text-white text-xs font-medium">The Weeknd</span>
                            </div>
                            <div onclick="loadArtist('Kendrick Lamar')" class="artist-default flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; animation: float2 7s ease-in-out infinite 0.3s;">
                                <div class="w-16 h-16 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/kendricklamar.jpg" class="w-full h-full object-cover rounded-full" alt="Kendrick Lamar" />
                                </div>
                                <span class="text-white text-xs font-medium">Kendrick Lamar</span>
                            </div>
                            <div onclick="loadArtist('J. Cole')" class="artist-default flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; animation: float3 5.5s ease-in-out infinite 0.6s;">
                                <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/jcole.jpg" class="w-full h-full object-cover rounded-full" alt="J. Cole" />
                                </div>
                                <span class="text-white text-xs font-medium">J. Cole</span>
                            </div>
                            <div onclick="loadArtist('Future')" class="artist-default flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; animation: float1 8s ease-in-out infinite 1s;">
                                <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/future.jpg" class="w-full h-full object-cover rounded-full" alt="Future" />
                                </div>
                                <span class="text-white text-xs font-medium">Future</span>
                            </div>
                            <div onclick="loadArtist('Travis Scott')" class="artist-default flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; animation: float2 6.5s ease-in-out infinite 0.5s;">
                                <div class="w-18 h-18 rounded-full border-2 border-green-500/60 overflow-hidden bg-gray-800">
                                    <img src="/artists/travisscott.jpg" class="w-full h-full object-cover rounded-full" alt="Travis Scott" />
                                </div>
                                <span class="text-white text-xs font-medium">Travis Scott</span>
                            </div>
                            <div onclick="loadArtist('21 Savage')" class="artist-default flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; animation: float3 7.5s ease-in-out infinite 1.5s;">
                                <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/21savage.jpg" class="w-full h-full object-cover rounded-full" alt="21 Savage" />
                                </div>
                                <span class="text-white text-xs font-medium">21 Savage</span>
                            </div>
                            <div onclick="loadArtist('Lil Baby')" class="artist-default flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; animation: float1 7s ease-in-out infinite 2s;">
                                <div class="w-20 h-20 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/lilbaby.jpg" class="w-full h-full object-cover rounded-full" alt="Lil Baby" />
                                </div>
                                <span class="text-white text-xs font-medium">Lil Baby</span>
                            </div>
                            <div onclick="loadArtist('Gunna')" class="artist-default flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; animation: float2 6s ease-in-out infinite 0.8s;">
                                <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/gunna.jpg" class="w-full h-full object-cover rounded-full" alt="Gunna" />
                                </div>
                                <span class="text-white text-xs font-medium">Gunna</span>
                            </div>
                            <div onclick="loadArtist('Young Thug')" class="artist-default flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; animation: float3 5s ease-in-out infinite 1.2s;">
                                <div class="w-16 h-16 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/youngthug.jpg" class="w-full h-full object-cover rounded-full" alt="Young Thug" />
                                </div>
                                <span class="text-white text-xs font-medium">Young Thug</span>
                            </div>
                            <div onclick="loadArtist('Eminem')" class="artist-default flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; animation: float1 8s ease-in-out infinite 0.4s;">
                                <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/eminem.jpg" class="w-full h-full object-cover rounded-full" alt="Eminem" />
                                </div>
                                <span class="text-white text-xs font-medium">Eminem</span>
                            </div>
                            <div onclick="loadArtist('Jay-Z')" class="artist-default flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; animation: float2 6.5s ease-in-out infinite 1.8s;">
                                <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/jayz.jpg" class="w-full h-full object-cover rounded-full" alt="Jay-Z" />
                                </div>
                                <span class="text-white text-xs font-medium">Jay-Z</span>
                            </div>
                            <div onclick="loadArtist('Nicki Minaj')" class="artist-default flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; animation: float3 7s ease-in-out infinite 0.9s;">
                                <div class="w-19 h-19 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/nickiminaj.jpg" class="w-full h-full object-cover rounded-full" alt="Nicki Minaj" />
                                </div>
                                <span class="text-white text-xs font-medium">Nicki Minaj</span>
                            </div>
                        </div>

                        {{-- Desktop absolute - visible by default with Drake's similar artists --}}
                        <div id="similar-desktop" class="hidden md:block relative h-[400px]">
                            <div onclick="loadArtist('The Weeknd')" class="artist-default absolute flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; top: 5%; left: 15%; animation: float1 6s ease-in-out infinite;">
                                <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/theweeknd.jpg" class="w-full h-full object-cover rounded-full" alt="The Weeknd" onerror="this.src='https://i.pravatar.cc/56?img=11'" />
                                </div>
                                <span class="text-white text-xs font-medium">The Weeknd</span>
                            </div>
                            <div onclick="loadArtist('Kendrick Lamar')" class="artist-default absolute flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; top: 10%; left: 50%; animation: float2 7s ease-in-out infinite 0.3s;">
                                <div class="w-16 h-16 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/kendricklamar.jpg" class="w-full h-full object-cover rounded-full" alt="Kendrick Lamar" />
                                </div>
                                <span class="text-white text-xs font-medium">Kendrick Lamar</span>
                            </div>
                            <div onclick="loadArtist('J. Cole')" class="artist-default absolute flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; top: 5%; left: 75%; animation: float3 5.5s ease-in-out infinite 0.6s;">
                                <div class="w-17 h-17 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/jcole.jpg" class="w-full h-full object-cover rounded-full" alt="J. Cole" />
                                </div>
                                <span class="text-white text-xs font-medium">J. Cole</span>
                            </div>
                            <div onclick="loadArtist('Future')" class="artist-default absolute flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; top: 40%; left: 10%; animation: float2 8s ease-in-out infinite 1s;">
                                <div class="w-16 h-16 rounded-full border border-green-500/40 overflow-hidden bg-gray-800">
                                    <img src="/artists/future.jpg" class="w-full h-full object-cover rounded-full" alt="Future" />
                                </div>
                                <span class="text-white text-xs font-medium">Future</span>
                            </div>
                            <div onclick="loadArtist('Travis Scott')" class="artist-default absolute flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; top: 35%; left: 40%; animation: float1 6.5s ease-in-out infinite 0.5s;">
                                <div class="w-20 h-20 rounded-full border-2 border-green-500/60 overflow-hidden bg-gray-800">
                                    <img src="/artists/travisscott.jpg" class="w-full h-full object-cover rounded-full" alt="Travis Scott" />
                                </div>
                                <span class="text-white text-xs font-medium">Travis Scott</span>
                            </div>
                            <div onclick="loadArtist('21 Savage')" class="artist-default absolute flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; top: 30%; left: 70%; animation: float3 7.5s ease-in-out infinite 1.5s;">
                                <div class="w-16 h-16 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/21savage.jpg" class="w-full h-full object-cover rounded-full" alt="21 Savage" />
                                </div>
                                <span class="text-white text-xs font-medium">21 Savage</span>
                            </div>
                            <div onclick="loadArtist('Lil Baby')" class="artist-default absolute flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; top: 65%; left: 20%; animation: float1 7s ease-in-out infinite 2s;">
                                <div class="w-12 h-12 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/lilbaby.jpg" class="w-full h-full object-cover rounded-full" alt="Lil Baby" />
                                </div>
                                <span class="text-white text-xs font-medium">Lil Baby</span>
                            </div>
                            <div onclick="loadArtist('Gunna')" class="artist-default absolute flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; top: 65%; left: 55%; animation: float2 6s ease-in-out infinite 0.8s;">
                                <div class="w-16 h-16 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/gunna.jpg" class="w-full h-full object-cover rounded-full" alt="Gunna" />
                                </div>
                                <span class="text-white text-xs font-medium">Gunna</span>
                            </div>
                            <div onclick="loadArtist('Young Thug')" class="artist-default absolute flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; top: 68%; left: 80%; animation: float3 5s ease-in-out infinite 1.2s;">
                                <div class="w-12 h-12 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/youngthug.jpg" class="w-full h-full object-cover rounded-full" alt="Young Thug" />
                                </div>
                                <span class="text-white text-xs font-medium">Young Thug</span>
                            </div>
                            <div onclick="loadArtist('Eminem')" class="artist-default absolute flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; top: 20%; left: 85%; animation: float1 8s ease-in-out infinite 0.4s;">
                                <div class="w-18 h-18 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/eminem.jpg" class="w-full h-full object-cover rounded-full" alt="Eminem" />
                                </div>
                                <span class="text-white text-xs font-medium">Eminem</span>
                            </div>
                            <div onclick="loadArtist('Jay-Z')" class="artist-default absolute flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; top: 75%; left: 35%; animation: float2 6.5s ease-in-out infinite 1.8s;">
                                <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/jayz.jpg" class="w-full h-full object-cover rounded-full" alt="Jay-Z" />
                                </div>
                                <span class="text-white text-xs font-medium">Jay-Z</span>
                            </div>
                            <div onclick="loadArtist('Nicki Minaj')" class="artist-default absolute flex flex-col items-center gap-1 cursor-pointer" style="opacity: 1; top: 75%; left: 65%; animation: float3 7s ease-in-out infinite 0.9s;">
                                <div class="w-15 h-15 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                                    <img src="/artists/nickiminaj.jpg" class="w-full h-full object-cover rounded-full" alt="Nicki Minaj" />
                                </div>
                                <span class="text-white text-xs font-medium">Nicki Minaj</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- WHY CHOOSE SIMILART --}}
    <section class="w-full flex flex-col items-center justify-center py-24 px-4 bg-black relative overflow-hidden">

        {{-- subtle grid bg --}}
        <div class="absolute inset-0 pointer-events-none"
            style="background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 60px 60px;">
        </div>

        {{-- heading --}}
        <div class="relative z-10 text-center max-w-2xl mb-16">
            <h2 class="text-white text-4xl md:text-5xl font-bold mb-4">Why Choose SimilArt?</h2>
            <p class="text-gray-400 text-base md:text-lg leading-relaxed">
                SimilArt uses music intelligence to map the DNA of any artist —
                so you always find your next obsession.
            </p>
        </div>

        {{-- feature cards with grid borders --}}
        <div class="relative z-10 w-full max-w-6xl">

            {{-- top horizontal border --}}
            <div class="w-full h-px bg-white/10"></div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">

                {{-- Card 1 --}}
                <div class="group p-8 flex flex-col gap-4 border-r border-b border-white/10 lg:border-b-0 hover:bg-white/[0.02] transition-colors duration-300">
                    <div class="w-9 h-9 rounded-full border border-green-500/40 flex items-center justify-center bg-green-500/10">
                        <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-sm">Instant Artist Discovery</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Search any artist and instantly see who sounds like them — powered by real music data.</p>
                </div>

                {{-- Card 2 --}}
                <div class="group p-8 flex flex-col gap-4 border-r border-b border-white/10 lg:border-b-0 hover:bg-white/[0.02] transition-colors duration-300">
                    <div class="w-9 h-9 rounded-full border border-green-500/40 flex items-center justify-center bg-green-500/10">
                        <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2z" />
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-sm">30-Second Previews</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Preview the top track of any artist directly in the app before committing to a full listen.</p>
                </div>

                {{-- Card 3 --}}
                <div class="group p-8 flex flex-col gap-4 border-r border-b border-white/10 sm:border-b-0 hover:bg-white/[0.02] transition-colors duration-300">
                    <div class="w-9 h-9 rounded-full border border-green-500/40 flex items-center justify-center bg-green-500/10">
                        <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-sm">Multi-Platform Links</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Jump straight to Deezer, Apple Music, or Last.fm with one click — no extra searching needed.</p>
                </div>

                {{-- Card 4 --}}
                <div class="group p-8 flex flex-col gap-4 border-b border-white/10 sm:border-b-0 hover:bg-white/[0.02] transition-colors duration-300">
                    <div class="w-9 h-9 rounded-full border border-green-500/40 flex items-center justify-center bg-green-500/10">
                        <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-sm">Endless Rabbit Holes</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Click any similar artist to explore their world — the discovery never ends.</p>
                </div>

            </div>

            {{-- bottom horizontal border --}}
            <div class="w-full h-px bg-white/10"></div>

            {{-- close the why section grid --}}
        </div>
        {{-- bottom border --}}
        <div class="w-full h-px bg-white/10"></div>

        </div>
    </section>
    {{-- FEATURE / CTA SECTION --}}
    <section class="w-full flex items-center justify-center bg-black px-4 py-0">
        <div class="w-full max-w-6xl">

            <div class="w-full h-px bg-white/10"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 border-b border-white/10">

                {{-- Left text --}}
                <div class="p-10 flex flex-col justify-center gap-5 border-r border-white/10">
                    <div class="w-9 h-9 rounded-full border border-green-500/40 flex items-center justify-center bg-green-500/10">
                        <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                    <h3 class="text-white text-xl font-bold leading-snug">Discover Similar Artists Instantly</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Type in any artist you love and SimilArt maps out their sonic neighbours —
                        artists with the same energy, style, and sound. Each result is clickable,
                        letting you explore endlessly without ever leaving the page.
                    </p>
                    <a href="#explore" class="inline-flex items-center gap-2 text-green-400 text-sm font-medium hover:text-green-300 transition-colors duration-200 w-fit">
                        Start exploring now
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                {{-- Right: scrolling marquee --}}
                <div class="relative overflow-hidden flex flex-col gap-3 py-8 bg-[#010801]"
                    style="mask-image: linear-gradient(to right, transparent, black 8%, black 92%, transparent);">
                    {{-- Row 1 --}}
                    <div class="flex gap-3" style="animation: marquee 30s linear infinite; width: max-content;">
                        @foreach (array_merge(['Drake','The Weeknd','Kendrick Lamar','Travis Scott','J. Cole','21 Savage','Future','Lil Baby'],['Drake','The Weeknd','Kendrick Lamar','Travis Scott','J. Cole','21 Savage','Future','Lil Baby']) as $i => $artist)
                        <div class="flex-shrink-0 flex items-center gap-2 px-3 py-2 rounded-full bg-[#0f1912]/80 border border-white/10">
                            <div class="w-7 h-7 rounded-full bg-gray-700 overflow-hidden border border-green-500/30">
                                <img src="https://i.pravatar.cc/28?img={{ $i + 1 }}" class="w-full h-full object-cover" alt="{{ $artist }}" />
                            </div>
                            <div class="leading-tight">
                                <p class="text-white text-xs font-semibold whitespace-nowrap">{{ $artist }}</p>
                                <p class="text-gray-500 text-[10px] whitespace-nowrap">Hip Hop</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Row 2 reverse --}}
                    <div class="flex gap-3" style="animation: marquee-reverse 35s linear infinite; width: max-content;">
                        @foreach (array_merge(['Gunna','Young Thug','Eminem','Jay-Z','Nicki Minaj','Post Malone','Cardi B','Juice WRLD'],['Gunna','Young Thug','Eminem','Jay-Z','Nicki Minaj','Post Malone','Cardi B','Juice WRLD']) as $i => $artist)
                        <div class="flex-shrink-0 flex items-center gap-2 px-3 py-2 rounded-full bg-[#0f1912]/80 border border-white/10">
                            <div class="w-7 h-7 rounded-full bg-gray-700 overflow-hidden border border-green-500/30">
                                <img src="https://i.pravatar.cc/28?img={{ $i + 20 }}" class="w-full h-full object-cover" alt="{{ $artist }}" />
                            </div>
                            <div class="leading-tight">
                                <p class="text-white text-xs font-semibold whitespace-nowrap">{{ $artist }}</p>
                                <p class="text-gray-500 text-[10px] whitespace-nowrap">Hip Hop</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Row 3 --}}
                    <div class="flex gap-3" style="animation: marquee 28s linear infinite; width: max-content;">
                        @foreach (array_merge(['SZA','Frank Ocean','Tyler the Creator','Childish Gambino','Mac Miller','ASAP Rocky','Lil Uzi Vert','Playboi Carti'],['SZA','Frank Ocean','Tyler the Creator','Childish Gambino','Mac Miller','ASAP Rocky','Lil Uzi Vert','Playboi Carti']) as $i => $artist)
                        <div class="flex-shrink-0 flex items-center gap-2 px-3 py-2 rounded-full bg-[#0f1912]/80 border border-white/10">
                            <div class="w-7 h-7 rounded-full bg-gray-700 overflow-hidden border border-green-500/30">
                                <img src="https://i.pravatar.cc/28?img={{ $i + 40 }}" class="w-full h-full object-cover" alt="{{ $artist }}" />
                            </div>
                            <div class="leading-tight">
                                <p class="text-white text-xs font-semibold whitespace-nowrap">{{ $artist }}</p>
                                <p class="text-gray-500 text-[10px] whitespace-nowrap">R&B / Alt</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Row 4 reverse --}}
                    <div class="flex gap-3" style="animation: marquee-reverse 32s linear infinite; width: max-content;">
                        @foreach (array_merge(['Billie Eilish','Ariana Grande','Doja Cat','Olivia Rodrigo','Harry Styles','Taylor Swift','Bad Bunny','The Kid LAROI'],['Billie Eilish','Ariana Grande','Doja Cat','Olivia Rodrigo','Harry Styles','Taylor Swift','Bad Bunny','The Kid LAROI']) as $i => $artist)
                        <div class="flex-shrink-0 flex items-center gap-2 px-3 py-2 rounded-full bg-[#0f1912]/80 border border-white/10">
                            <div class="w-7 h-7 rounded-full bg-gray-700 overflow-hidden border border-green-500/30">
                                <img src="https://i.pravatar.cc/28?img={{ $i + 5 }}" class="w-full h-full object-cover" alt="{{ $artist }}" />
                            </div>
                            <div class="leading-tight">
                                <p class="text-white text-xs font-semibold whitespace-nowrap">{{ $artist }}</p>
                                <p class="text-gray-500 text-[10px] whitespace-nowrap">Pop</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <div class="w-full h-px bg-white/10"></div>

        </div>
    </section>

    {{-- HOW DOES IT WORK --}}
    <section class="w-full flex flex-col items-start justify-center py-16 px-4 bg-black relative overflow-hidden">

        <div class="absolute inset-0 pointer-events-none"
            style="background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 60px 60px;">
        </div>

        <div class="relative z-10 w-full max-w-6xl mx-auto">

            {{-- heading --}}
            <div class="mb-12 px-2">
                <h2 class="text-white text-3xl md:text-4xl font-bold mb-3">How does it Work?</h2>
                <p class="text-gray-500 text-sm md:text-base max-w-lg leading-relaxed">
                    Getting started with SimilArt takes seconds. No account needed — just search and explore.
                </p>
            </div>

            {{-- top border --}}
            <div class="w-full h-px bg-white/10"></div>

            {{-- steps grid --}}
            <div class="grid grid-cols-1 md:grid-cols-3">

                {{-- Step 1 --}}
                <div class="relative p-8 border-r border-b md:border-b-0 border-white/10 hover:bg-white/[0.02] transition-colors duration-300">
                    <span class="absolute top-6 left-6 w-6 h-6 rounded-full border border-white/20 flex items-center justify-center text-white/40 text-xs">1</span>
                    <div class="mt-8 mb-6 w-full rounded-xl overflow-hidden border border-white/10 bg-[#060f08]">
                        {{-- mock search UI --}}
                        <div class="p-4 border-b border-white/10">
                            <p class="text-white/60 text-xs mb-3">Search for an artist</p>
                            <div class="flex items-center gap-2 bg-black/40 border border-white/10 rounded-full px-3 py-2">
                                <svg class="w-3 h-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="text-gray-500 text-xs">Drake</span>
                                <span class="ml-auto w-1.5 h-3.5 bg-green-400 rounded-sm animate-pulse"></span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="h-2 bg-white/5 rounded-full w-3/4 mb-2"></div>
                            <div class="h-2 bg-white/5 rounded-full w-1/2"></div>
                        </div>
                    </div>
                    <h3 class="text-white font-semibold text-sm mb-2">Search any artist</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Type the name of any artist you love into the search bar.</p>
                </div>

                {{-- Step 2 --}}
                <div class="relative p-8 border-r border-b md:border-b-0 border-white/10 hover:bg-white/[0.02] transition-colors duration-300">
                    <span class="absolute top-6 left-6 w-6 h-6 rounded-full border border-white/20 flex items-center justify-center text-white/40 text-xs">2</span>
                    <div class="mt-8 mb-6 w-full rounded-xl overflow-hidden border border-white/10 bg-[#060f08]">
                        {{-- mock artist card --}}
                        <div class="p-4 flex items-center gap-3 border-b border-white/10">
                            <div class="w-10 h-10 rounded-full bg-gray-700 border-2 border-green-500 overflow-hidden flex-shrink-0">
                                <img src="https://i.pravatar.cc/40?img=3" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <div>
                                <p class="text-white text-xs font-semibold">Drake</p>
                                <p class="text-gray-500 text-[10px]">Hip Hop | Rap</p>
                                <p class="text-green-400 text-[10px]">55M monthly listeners</p>
                            </div>
                            <div class="ml-auto w-6 h-6 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0">
                                <svg class="w-2.5 h-2.5 fill-black ml-0.5" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                        <div class="p-3 space-y-1.5">
                            <div class="h-7 bg-white/5 rounded-lg w-full"></div>
                            <div class="h-7 bg-white/5 rounded-lg w-full"></div>
                        </div>
                    </div>
                    <h3 class="text-white font-semibold text-sm mb-2">Explore their profile</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">See their info, genre, listener count, and preview their top track.</p>
                </div>

                {{-- Step 3 --}}
                <div class="relative p-8 border-b md:border-b-0 border-white/10 hover:bg-white/[0.02] transition-colors duration-300">
                    <span class="absolute top-6 left-6 w-6 h-6 rounded-full border border-white/20 flex items-center justify-center text-white/40 text-xs">3</span>
                    <div class="mt-8 mb-6 w-full rounded-xl overflow-hidden border border-white/10 bg-[#060f08] p-4">
                        {{-- mock floating bubbles --}}
                        <div class="relative h-24">
                            <div class="absolute top-0 left-4 flex flex-col items-center gap-1">
                                <div class="w-9 h-9 rounded-full border border-green-500/40 overflow-hidden bg-gray-700">
                                    <img src="https://i.pravatar.cc/36?img=11" class="w-full h-full object-cover" alt="" />
                                </div>
                                <span class="text-white text-[9px]">The Weeknd</span>
                            </div>
                            <div class="absolute top-4 left-1/3 flex flex-col items-center gap-1">
                                <div class="w-11 h-11 rounded-full border-2 border-green-500/60 overflow-hidden bg-gray-700">
                                    <img src="https://i.pravatar.cc/44?img=12" class="w-full h-full object-cover" alt="" />
                                </div>
                                <span class="text-white text-[9px]">J. Cole</span>
                            </div>
                            <div class="absolute top-1 right-6 flex flex-col items-center gap-1">
                                <div class="w-9 h-9 rounded-full border border-white/20 overflow-hidden bg-gray-700">
                                    <img src="https://i.pravatar.cc/36?img=13" class="w-full h-full object-cover" alt="" />
                                </div>
                                <span class="text-white text-[9px]">Kendrick</span>
                            </div>
                            <div class="absolute bottom-0 left-1/2 flex flex-col items-center gap-1">
                                <div class="w-8 h-8 rounded-full border border-white/20 overflow-hidden bg-gray-700">
                                    <img src="https://i.pravatar.cc/32?img=14" class="w-full h-full object-cover" alt="" />
                                </div>
                                <span class="text-white text-[9px]">Future</span>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-white font-semibold text-sm mb-2">Click & keep exploring</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Click any similar artist to load their profile and discover even more connections.</p>
                </div>

            </div>

            {{-- bottom border --}}
            <div class="w-full h-px bg-white/10"></div>

        </div>
    </section>
    {{-- TESTIMONIALS --}}
    <section class="w-full flex flex-col items-center justify-center bg-black px-4 py-0">
        <div class="w-full max-w-6xl mx-auto">

            <div class="w-full h-px bg-white/10"></div>

            {{-- Header row --}}
            <div class="grid grid-cols-1 md:grid-cols-2 border-b border-white/10">
                <div class="p-10 border-r border-white/10">
                    <h2 class="text-white text-3xl md:text-4xl font-bold leading-tight">Some kind insights<br>from our users</h2>
                </div>
                <div class="p-10 flex items-center">
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Real music lovers sharing how SimilArt helped them discover artists they never would have found on their own.
                    </p>
                </div>
            </div>

            {{-- Testimonial + nav row --}}
            <div class="grid grid-cols-1 md:grid-cols-2 border-b border-white/10">

                {{-- Active testimonial --}}
                <div id="testimonial-card" class="p-10 border-r border-white/10 flex flex-col justify-between gap-8 min-h-[220px]">
                    <div class="flex flex-col gap-6">
                        <div class="w-9 h-9 rounded-full bg-white flex items-center justify-center">
                            <span id="testimonial-initials" class="text-black text-xs font-bold">JD</span>
                        </div>
                        <p id="testimonial-quote" class="text-gray-300 text-sm leading-relaxed">
                            "SimilArt is genuinely the best way to explore music. I searched for one artist and ended up discovering 10 more I love."
                        </p>
                    </div>
                    <div>
                        <p id="testimonial-name" class="text-white text-sm font-semibold">John Doe</p>
                        <p id="testimonial-role" class="text-gray-500 text-xs mt-0.5">Music Listener and Enthusiast</p>
                    </div>
                </div>

                {{-- Nav buttons --}}
                <div class="flex flex-col">
                    <button onclick="prevTestimonial()"
                        class="flex-1 flex items-center gap-3 px-10 py-8 border-b border-white/10 text-gray-400 hover:text-white hover:bg-white/[0.02] transition-all duration-200 text-sm group">
                        <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        Previous
                    </button>
                    <button onclick="nextTestimonial()"
                        class="flex-1 flex items-center justify-end gap-3 px-10 py-8 text-gray-400 hover:text-white hover:bg-white/[0.02] transition-all duration-200 text-sm group">
                        Next
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </div>

            </div>

            <div class="w-full h-px bg-white/10"></div>

        </div>
    </section>

    {{-- FAQ --}}
    <section class="w-full flex flex-col items-center justify-center bg-black px-4 py-0">
        <div class="w-full max-w-6xl mx-auto">

            <div class="w-full h-px bg-white/10"></div>

            {{-- Header row --}}
            <div class="grid grid-cols-1 md:grid-cols-2 border-b border-white/10">
                <div class="p-10 border-r border-white/10">
                    <h2 class="text-white text-3xl md:text-4xl font-bold mb-2">Your Questions,<br>Answered</h2>
                    <p class="text-gray-500 text-sm leading-relaxed mt-3">Everything you need to know about SimilArt.</p>
                </div>
                <div class="p-10 flex items-center justify-end">
                    <a href="#explore" class="inline-flex items-center gap-2 text-green-400 text-sm font-medium hover:text-green-300 transition-colors duration-200">
                        Start exploring now
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- FAQ grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2">

                {{-- Col 1 --}}
                <div class="border-r border-white/10">
                    <div class="faq-item border-b border-white/10 px-10 py-6 flex items-center justify-between gap-4 cursor-pointer hover:bg-white/[0.02] transition-colors duration-200 group" onclick="toggleFaq(this)">
                        <p class="text-gray-300 text-sm group-hover:text-white transition-colors">Do I need an account to use SimilArt?</p>
                        <span class="text-gray-500 text-lg flex-shrink-0 faq-icon">+</span>
                    </div>
                    <div class="faq-answer hidden px-10 py-5 border-b border-white/10 bg-white/[0.01]">
                        <p class="text-gray-500 text-sm leading-relaxed">No account needed. Just search for any artist and start exploring instantly.</p>
                    </div>

                    <div class="faq-item border-b border-white/10 px-10 py-6 flex items-center justify-between gap-4 cursor-pointer hover:bg-white/[0.02] transition-colors duration-200 group" onclick="toggleFaq(this)">
                        <p class="text-gray-300 text-sm group-hover:text-white transition-colors">Where does the music data come from?</p>
                        <span class="text-gray-500 text-lg flex-shrink-0 faq-icon">+</span>
                    </div>
                    <div class="faq-answer hidden px-10 py-5 border-b border-white/10 bg-white/[0.01]">
                        <p class="text-gray-500 text-sm leading-relaxed">We pull data from Last.fm and Deezer — two of the largest music intelligence databases in the world.</p>
                    </div>

                    <div class="faq-item border-b border-white/10 px-10 py-6 flex items-center justify-between gap-4 cursor-pointer hover:bg-white/[0.02] transition-colors duration-200 group" onclick="toggleFaq(this)">
                        <p class="text-gray-300 text-sm group-hover:text-white transition-colors">Can I listen to full songs on SimilArt?</p>
                        <span class="text-gray-500 text-lg flex-shrink-0 faq-icon">+</span>
                    </div>
                    <div class="faq-answer hidden px-10 py-5 border-b border-white/10 bg-white/[0.01]">
                        <p class="text-gray-500 text-sm leading-relaxed">SimilArt provides 30-second previews via Deezer. For full songs, we link you directly to Deezer, Apple Music, and Last.fm.</p>
                    </div>

                    <div class="faq-item border-b md:border-b-0 border-white/10 px-10 py-6 flex items-center justify-between gap-4 cursor-pointer hover:bg-white/[0.02] transition-colors duration-200 group" onclick="toggleFaq(this)">
                        <p class="text-gray-300 text-sm group-hover:text-white transition-colors">Is SimilArt free to use?</p>
                        <span class="text-gray-500 text-lg flex-shrink-0 faq-icon">+</span>
                    </div>
                    <div class="faq-answer hidden px-10 py-5 border-b md:border-b-0 border-white/10 bg-white/[0.01]">
                        <p class="text-gray-500 text-sm leading-relaxed">Yes, completely free. No subscriptions, no hidden fees.</p>
                    </div>
                </div>

                {{-- Col 2 --}}
                <div>
                    <div class="faq-item border-b border-white/10 px-10 py-6 flex items-center justify-between gap-4 cursor-pointer hover:bg-white/[0.02] transition-colors duration-200 group" onclick="toggleFaq(this)">
                        <p class="text-gray-300 text-sm group-hover:text-white transition-colors">How accurate are the similar artist suggestions?</p>
                        <span class="text-gray-500 text-lg flex-shrink-0 faq-icon">+</span>
                    </div>
                    <div class="faq-answer hidden px-10 py-5 border-b border-white/10 bg-white/[0.01]">
                        <p class="text-gray-500 text-sm leading-relaxed">Very accurate. We use Deezer's music graph which analyzes listening patterns, genre, and sound characteristics across millions of users.</p>
                    </div>

                    <div class="faq-item border-b border-white/10 px-10 py-6 flex items-center justify-between gap-4 cursor-pointer hover:bg-white/[0.02] transition-colors duration-200 group" onclick="toggleFaq(this)">
                        <p class="text-gray-300 text-sm group-hover:text-white transition-colors">What genres does SimilArt support?</p>
                        <span class="text-gray-500 text-lg flex-shrink-0 faq-icon">+</span>
                    </div>
                    <div class="faq-answer hidden px-10 py-5 border-b border-white/10 bg-white/[0.01]">
                        <p class="text-gray-500 text-sm leading-relaxed">All genres — Hip Hop, Pop, Rock, R&B, Electronic, Classical, Jazz, and everything in between.</p>
                    </div>

                    <div class="faq-item border-b border-white/10 px-10 py-6 flex items-center justify-between gap-4 cursor-pointer hover:bg-white/[0.02] transition-colors duration-200 group" onclick="toggleFaq(this)">
                        <p class="text-gray-300 text-sm group-hover:text-white transition-colors">Can I search for any artist in the world?</p>
                        <span class="text-gray-500 text-lg flex-shrink-0 faq-icon">+</span>
                    </div>
                    <div class="faq-answer hidden px-10 py-5 border-b border-white/10 bg-white/[0.01]">
                        <p class="text-gray-500 text-sm leading-relaxed">Yes. As long as the artist is on Deezer or Last.fm, SimilArt can find them — from global superstars to underground indie acts.</p>
                    </div>

                    <div class="faq-item border-b border-white/10 px-10 py-6 flex items-center justify-between gap-4 cursor-pointer hover:bg-white/[0.02] transition-colors duration-200 group" onclick="toggleFaq(this)">
                        <p class="text-gray-300 text-sm group-hover:text-white transition-colors">How many similar artists will I see per search?</p>
                        <span class="text-gray-500 text-lg flex-shrink-0 faq-icon">+</span>
                    </div>
                    <div class="faq-answer hidden px-10 py-5 border-b border-white/10 bg-white/[0.01]">
                        <p class="text-gray-500 text-sm leading-relaxed">Up to 12 similar artists per search, displayed as floating bubbles you can click to keep exploring.</p>
                    </div>
                </div>

            </div>

            <div class="w-full h-px bg-white/10"></div>

        </div>
    </section>

    <script>
        // --- Testimonials ---
        const testimonials = [{
                initials: 'JD',
                quote: '"SimilArt is genuinely the best way to explore music. I searched for one artist and ended up discovering 10 more I love."',
                name: 'John Doe',
                role: 'Music Listener and Enthusiast'
            },
            {
                initials: 'SR',
                quote: '"I found my new favorite artist in under a minute. The floating bubbles make it so fun to explore — I can\'t stop clicking."',
                name: 'Sofia R.',
                role: 'Independent Music Blogger'
            },
            {
                initials: 'MK',
                quote: '"Finally a tool that actually understands music similarity. The previews are a great touch — I know exactly what I\'m getting into."',
                name: 'Marcus K.',
                role: 'Playlist Curator'
            },
            {
                initials: 'AL',
                quote: '"SimilArt helped me get out of my music bubble. I went from only listening to Drake to discovering a whole world of artists."',
                name: 'Aisha L.',
                role: 'Casual Listener'
            },
        ];

        let currentTestimonial = 0;

        function renderTestimonial() {
            const t = testimonials[currentTestimonial];
            const card = document.getElementById('testimonial-card');
            card.style.opacity = '0';
            card.style.transition = 'opacity 0.2s ease';
            setTimeout(() => {
                document.getElementById('testimonial-initials').textContent = t.initials;
                document.getElementById('testimonial-quote').textContent = t.quote;
                document.getElementById('testimonial-name').textContent = t.name;
                document.getElementById('testimonial-role').textContent = t.role;
                card.style.opacity = '1';
            }, 200);
        }

        function nextTestimonial() {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            renderTestimonial();
        }

        function prevTestimonial() {
            currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
            renderTestimonial();
        }

        // --- FAQ ---
        function toggleFaq(el) {
            const answer = el.nextElementSibling;
            const icon = el.querySelector('.faq-icon');
            const isOpen = !answer.classList.contains('hidden');

            // Close all
            document.querySelectorAll('.faq-answer').forEach(a => a.classList.add('hidden'));
            document.querySelectorAll('.faq-icon').forEach(i => i.textContent = '+');

            if (!isOpen) {
                answer.classList.remove('hidden');
                icon.textContent = '−';
            }
        }
    </script>

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes marquee-reverse {
            0% {
                transform: translateX(-50%);
            }

            100% {
                transform: translateX(0);
            }
        }
    </style>
    <style>
        .artist-default {
            cursor: pointer;
            opacity: 1;
        }

        .artist-default:hover img {
            box-shadow: 0 0 20px rgba(16, 185, 80, 0.7), 0 0 40px rgba(16, 185, 80, 0.3);
        }

        .artist-default span {
            transition: color 0.3s ease;
        }

        .artist-default:hover span {
            color: #4ade80;
        }

        .artist-float {
            cursor: pointer;
            opacity: 1;
        }

        .artist-float:hover img {
            box-shadow: 0 0 20px rgba(16, 185, 80, 0.7), 0 0 40px rgba(16, 185, 80, 0.3);
        }

        .artist-float span {
            transition: color 0.3s ease;
        }

        .artist-float:hover span {
            color: #4ade80;
        }

        .skeleton {
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.04) 25%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.04) 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }

        /* Artist bubble pop in */
        @keyframes popIn {
            0% {
                transform: scale(0) translateY(10px);
                opacity: 0;
            }

            70% {
                transform: scale(1.1) translateY(-3px);
                opacity: 1;
            }

            100% {
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }


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


        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    <script>
        const LASTFM_API_KEY = '9b63fe91f80052b4d121950664d7df8b';
        const LASTFM_BASE = 'https://ws.audioscrobbler.com/2.0/';

        let currentArtistUrl = '#';
        let audioPlayer = null;

        const floatAnims = ['float1', 'float2', 'float3'];
        const desktopPositions = [{
                top: '3%',
                left: '8%'
            },
            {
                top: '8%',
                left: '38%'
            },
            {
                top: '2%',
                left: '62%'
            },
            {
                top: '12%',
                left: '82%'
            },
            {
                top: '32%',
                left: '22%'
            },
            {
                top: '42%',
                left: '55%'
            },
            {
                top: '38%',
                left: '78%'
            },
            {
                top: '58%',
                left: '12%'
            },
            {
                top: '62%',
                left: '42%'
            },
            {
                top: '55%',
                left: '68%'
            },
            {
                top: '70%',
                left: '88%'
            },
            {
                top: '72%',
                left: '28%'
            },
        ];
        const sizes = ['w-12 h-12', 'w-14 h-14', 'w-16 h-16', 'w-20 h-20'];

        // --- Deezer ---
        async function searchDeezerArtist(name) {
            const res = await fetch(`/api/deezer/search?q=${encodeURIComponent(name)}`);
            const data = await res.json();
            return data.data?.[0] || null;
        }

        async function getDeezerTopTrack(artistId) {
            const res = await fetch(`/api/deezer/top-track?id=${artistId}`);
            const data = await res.json();
            return data.data?.find(t => t.preview) || null;
        }

        async function getDeezerSimilar(artistId) {
            const res = await fetch(`/api/deezer/similar?id=${artistId}`);
            const data = await res.json();
            return data.data || [];
        }

        // --- Search ---
        function searchArtist(e) {
            e.preventDefault();
            const query = document.getElementById('artist-search').value.trim();
            if (!query) return;
            loadArtist(query);
        }

        async function loadArtist(name) {
            showLoading();
            stopAudio();

            try {
                const [infoRes, deezerArtist] = await Promise.all([
                    fetch(`${LASTFM_BASE}?method=artist.getinfo&artist=${encodeURIComponent(name)}&api_key=${LASTFM_API_KEY}&format=json`),
                    searchDeezerArtist(name)
                ]);

                const infoData = await infoRes.json();
                if (infoData.error) {
                    showEmpty();
                    return;
                }

                // Get similar artists from Deezer if we have an ID
                let similarArtists = [];
                if (deezerArtist?.id) {
                    similarArtists = await getDeezerSimilar(deezerArtist.id);
                } else {
                    // Fallback to Last.fm similar
                    const similarRes = await fetch(`${LASTFM_BASE}?method=artist.getsimilar&artist=${encodeURIComponent(name)}&limit=12&api_key=${LASTFM_API_KEY}&format=json`);
                    const similarData = await similarRes.json();
                    similarArtists = (similarData.similarartists?.artist || []).map(a => ({
                        name: a.name,
                        id: null,
                        picture_medium: null
                    }));
                }

                await renderArtistCard(infoData.artist, deezerArtist);
                await renderSimilarArtists(similarArtists, !!deezerArtist?.id);

            } catch (err) {
                console.error(err);
                showEmpty();
            }
        }

        async function renderArtistCard(artist, deezerArtist) {
            // Image from Deezer (high quality)
            const imgUrl = deezerArtist?.picture_xl ||
                deezerArtist?.picture_big ||
                deezerArtist?.picture_medium ||
                'https://i.pravatar.cc/96?img=1';

            // Tags from Last.fm
            const tags = artist.tags?.tag?.slice(0, 3).map(t => t.name).join(' | ') || '';

            // Listeners from Last.fm
            const listeners = artist.stats?.listeners ?
                parseInt(artist.stats.listeners).toLocaleString() + ' monthly listeners' :
                '';

            // Fans from Deezer as world rank approximation
            const fans = deezerArtist?.nb_fan ?
                parseInt(deezerArtist.nb_fan).toLocaleString() + ' fans on Deezer' :
                '';

            // Bio from Last.fm
            const bio = artist.bio?.summary?.replace(/<a[^>]*>.*?<\/a>/g, '').trim() || '';

            // Links
            const deezerUrl = deezerArtist?.link || null;
            const appleMusicUrl = `https://music.apple.com/search?term=${encodeURIComponent(artist.name)}`;

            // Preview track from Deezer
            let previewUrl = null;
            let trackName = null;
            if (deezerArtist?.id) {
                const topTrack = await getDeezerTopTrack(deezerArtist.id);
                previewUrl = topTrack?.preview || null;
                trackName = topTrack?.title || null;
            }

            // Render
            document.getElementById('artist-image').src = imgUrl;
            document.getElementById('artist-name').textContent = artist.name;
            document.getElementById('artist-tags').textContent = tags;
            document.getElementById('artist-listeners').textContent = listeners;
            document.getElementById('artist-popularity').textContent = fans;
            document.getElementById('artist-bio').textContent = bio;
            currentArtistUrl = deezerUrl || artist.url || '#';

            // Deezer link
            const deezerBtn = document.getElementById('deezer-link');
            if (deezerUrl) {
                deezerBtn.href = deezerUrl;
                deezerBtn.classList.remove('hidden');
            } else {
                deezerBtn.classList.add('hidden');
            }

            // Apple Music link
            document.getElementById('apple-music-link').href = appleMusicUrl;
            document.getElementById('apple-music-link').classList.remove('hidden');

            // Last.fm link
            document.getElementById('lastfm-link').href = artist.url || '#';

            // Play button
            const playBtn = document.getElementById('play-button');
            if (previewUrl) {
                playBtn.onclick = () => toggleAudio(previewUrl, trackName);
                playBtn.classList.remove('opacity-30', 'cursor-not-allowed');
                playBtn.title = `Preview: ${trackName}`;
            } else {
                playBtn.onclick = null;
                playBtn.classList.add('opacity-30', 'cursor-not-allowed');
                playBtn.title = 'No preview available';
            }

            document.getElementById('artist-loading').classList.add('hidden');
            document.getElementById('artist-empty').classList.add('hidden');
            document.getElementById('artist-card').classList.remove('hidden');
        }

        // --- Audio ---
        function toggleAudio(url, trackName) {
            if (audioPlayer && !audioPlayer.paused) {
                stopAudio();
                return;
            }
            if (audioPlayer) audioPlayer.pause();
            audioPlayer = new Audio(url);
            audioPlayer.volume = 0.7;
            audioPlayer.play();

            document.getElementById('play-button').innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-black" viewBox="0 -960 960 960">
                <path d="M560-200v-560h160v560H560Zm-320 0v-560h160v560H240Z"/>
            </svg>`;

            audioPlayer.onended = () => resetPlayButton();
        }

        function stopAudio() {
            if (audioPlayer) {
                audioPlayer.pause();
                audioPlayer = null;
            }
            resetPlayButton();
        }

        function resetPlayButton() {
            const btn = document.getElementById('play-button');
            if (btn) btn.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-black" viewBox="0 -960 960 960">
                <path d="M320-200v-560l440 280-440 280Z"/>
            </svg>`;
        }

        // --- Similar Artists ---
        async function renderSimilarArtists(artists, isDeezer = true) {
            const mobileContainer = document.getElementById('similar-mobile');
            const desktopContainer = document.getElementById('similar-desktop');
            const emptyState = document.getElementById('similar-empty');

            mobileContainer.innerHTML = '';
            desktopContainer.innerHTML = '';

            if (!artists.length) {
                emptyState.classList.remove('hidden');
                mobileContainer.classList.add('hidden');
                return;
            }

            emptyState.classList.add('hidden');

            for (let i = 0; i < Math.min(artists.length, 12); i++) {
                const a = artists[i];
                const anim = floatAnims[i % 3];
                const dur = (5.5 + (i * 0.4)).toFixed(1);
                const delay = (i * 0.3).toFixed(1);
                const pos = desktopPositions[i] || {
                    top: `${10 + (i * 8)}%`,
                    left: `${10 + (i * 7)}%`
                };
                const size = sizes[i % sizes.length];

                // Image
                let imgUrl = a.picture_medium || a.picture || `https://i.pravatar.cc/64?img=${10 + i}`;
                if (!isDeezer && a.name) {
                    try {
                        const sp = await searchDeezerArtist(a.name);
                        if (sp?.picture_medium) imgUrl = sp.picture_medium;
                    } catch (_) {}
                }

                const bubbleHTML = `
                <div class="${size} rounded-full border border-white/20 overflow-hidden bg-gray-800">
                    <img src="${imgUrl}" class="w-full h-full object-cover rounded-full" alt="${a.name}" onerror="this.src='https://i.pravatar.cc/56?img=${10+i}'"/>
                </div>
                <span class="text-white text-xs font-medium text-center">${a.name}</span>
            `;

                // Mobile bubble
                const mobileBubble = document.createElement('div');
                mobileBubble.className = 'artist-float flex flex-col items-center gap-1';
                mobileBubble.innerHTML = bubbleHTML;
                const mobileDelay = (i * 0.12 + Math.random() * 0.15).toFixed(2);
                mobileBubble.style.cssText = `opacity: 0; animation: popIn 0.5s cubic-bezier(0.34, 1.56, 0.64, 1) ${mobileDelay}s forwards;`;
                mobileBubble.addEventListener('animationend', () => {
                    mobileBubble.style.cssText = `opacity: 1; animation: ${anim} ${dur}s ease-in-out infinite ${delay}s;`;
                });
                mobileBubble.addEventListener('click', () => loadArtist(a.name));
                mobileContainer.appendChild(mobileBubble);

                // Desktop bubble
                const desktopBubble = document.createElement('div');
                desktopBubble.className = 'artist-float absolute flex flex-col items-center gap-1';
                desktopBubble.innerHTML = bubbleHTML;
                const desktopDelay = (i * 0.1 + Math.random() * 0.2).toFixed(2);
                desktopBubble.style.cssText = `top: ${pos.top}; left: ${pos.left}; opacity: 0; animation: popIn 0.5s cubic-bezier(0.34, 1.56, 0.64, 1) ${desktopDelay}s forwards;`;
                desktopBubble.addEventListener('animationend', () => {
                    desktopBubble.style.cssText = `top: ${pos.top}; left: ${pos.left}; opacity: 1; animation: ${anim} ${dur}s ease-in-out infinite ${delay}s;`;
                });
                desktopBubble.addEventListener('click', () => loadArtist(a.name));
                desktopContainer.appendChild(desktopBubble);
            }

            mobileContainer.classList.remove('hidden');
        }

        function showLoading() {
            document.getElementById('artist-card').classList.add('hidden');
            document.getElementById('artist-empty').classList.add('hidden');
            document.getElementById('artist-loading').classList.remove('hidden');
            document.getElementById('similar-empty').classList.add('hidden');

            // Clear both
            document.getElementById('similar-mobile').innerHTML = '';
            document.getElementById('similar-desktop').innerHTML = '';

            // Show both containers
            document.getElementById('similar-desktop').style.display = window.innerWidth >= 768 ? 'block' : 'none';
            document.getElementById('similar-mobile').style.display = window.innerWidth < 768 ? 'grid' : 'none';

            const positions = [{
                    top: '3%',
                    left: '8%'
                },
                {
                    top: '8%',
                    left: '38%'
                },
                {
                    top: '2%',
                    left: '62%'
                },
                {
                    top: '12%',
                    left: '82%'
                },
                {
                    top: '32%',
                    left: '22%'
                },
                {
                    top: '42%',
                    left: '55%'
                },
                {
                    top: '38%',
                    left: '78%'
                },
                {
                    top: '58%',
                    left: '12%'
                },
                {
                    top: '62%',
                    left: '42%'
                },
                {
                    top: '55%',
                    left: '68%'
                },
                {
                    top: '70%',
                    left: '88%'
                },
                {
                    top: '72%',
                    left: '28%'
                },
            ];
            positions.forEach(pos => {
                const el = document.createElement('div');
                el.className = 'absolute flex flex-col items-center gap-1';
                el.style.cssText = `top: ${pos.top}; left: ${pos.left};`;
                el.innerHTML = `
                <div class="skeleton w-14 h-14 rounded-full"></div>
                <div class="skeleton h-2.5 w-12 rounded-full mt-1"></div>
            `;
                document.getElementById('similar-desktop').appendChild(el);
            });
            // Mobile skeletons
            document.getElementById('similar-mobile').className = 'grid grid-cols-3 gap-6 place-items-center py-4 md:hidden';
            for (let i = 0; i < 12; i++) {
                const el = document.createElement('div');
                el.className = 'flex flex-col items-center gap-1';
                el.innerHTML = `
                <div class="skeleton w-14 h-14 rounded-full"></div>
                <div class="skeleton h-2.5 w-12 rounded-full mt-1"></div>
            `;
                document.getElementById('similar-mobile').appendChild(el);
            }
        }

        function showEmpty() {
            document.getElementById('artist-loading').classList.add('hidden');
            document.getElementById('artist-card').classList.add('hidden');
            document.getElementById('artist-empty').classList.remove('hidden');
        }
    </script>

</body>

</html>