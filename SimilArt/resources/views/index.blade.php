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
    <!-- ARTISTS -->
    <section class="w-full flex items-center justify-center">
        <div class="w-full rounded-lg py-20 bg-[#000A04] max-w-7xl relative overflow-hidden">

            {{-- Top border --}}
            <div class="absolute top-0 left-1/2 -translate-x-1/2 h-0.5 w-full bg-gradient-to-r from-transparent via-white/60 to-transparent"></div>

            {{-- Top glow --}}
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-30 pointer-events-none"
                style="background: radial-gradient(ellipse at top, rgba(200,255,220,0.35) 0%, rgba(16,185,80,0.2) 30%, rgba(16,185,80,0.06) 60%, transparent 75%); filter: blur(20px);">
            </div>

            {{-- Search Bar --}}
            <div class="relative z-10 flex justify-center mb-10 px-8">
                <form class="w-full max-w-xl" onsubmit="searchArtist(event)">
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

            {{-- Main content --}}
            <div class="relative flex flex-col md:flex-row items-start gap-8 px-8">

                {{-- Left: Artist Card --}}
                <div class="flex-shrink-0 w-full max-w-[300px] mx-auto md:mx-0">

                    {{-- Empty state --}}
                    <div id="artist-empty" class="relative bg-[rgba(102,102,102,0.1)] backdrop-blur-md w-full border-[0.1px] border-[#323232] rounded-3xl p-8 flex flex-col items-center justify-center min-h-[300px]">
                        <svg class="w-12 h-12 text-gray-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                        </svg>
                        <p class="text-gray-500 text-sm text-center">Search for an artist to see their info</p>
                    </div>

                    {{-- Loaded artist card --}}
                    <div id="artist-card" class="relative bg-[rgba(102,102,102,0.1)] backdrop-blur-md w-full border-[0.1px] border-[#323232] rounded-3xl hidden">
                        <button id="play-button"
                            class="absolute top-2 end-2 text-body hover:text-heading bg-green-600 box-border border border-transparent cursor-pointer hover:ring-4 hover:ring-green-300 transition-all duration-300 rounded-full mt-5 mr-5 p-1.5 focus:outline-none"
                            type="button" onclick="openLastFm()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-black" viewBox="0 -960 960 960">
                                <path d="M320-200v-560l440 280-440 280Z" />
                            </svg>
                        </button>
                        <div class="flex flex-col gap-1 items-center">
                            <div class="w-24 h-24 mb-4 mt-5 rounded-full overflow-hidden border-2 border-green-500 bg-gray-800">
                                <img id="artist-image" src="" class="w-full h-full object-cover" alt="artist" />
                            </div>
                            <h5 id="artist-name" class="mb-0.5 text-2xl font-regular tracking-tight text-white text-center px-4"></h5>
                            <span id="artist-tags" class="text-sm text-gray-300 text-center px-4"></span>
                            <span id="artist-listeners" class="text-sm text-green-400 font-medium mt-1"></span>
                            <p id="artist-bio" class="text-xs text-gray-400 text-center px-4 mt-2 line-clamp-3"></p>
                            <div class="flex overflow-hidden mt-4 md:mt-6 flex-col w-full">
                                <a id="lastfm-link" href="#" target="_blank"
                                    class="inline-flex justify-center items-center cursor-pointer text-white box-border border border-[#323232] hover:bg-[rgba(102,102,102,0.1)] transition-all duration-300 font-light text-md text-center p-4">
                                    View on Last.fm
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Loading state --}}
                    <div id="artist-loading" class="relative bg-[rgba(102,102,102,0.1)] backdrop-blur-md w-full border-[0.1px] border-[#323232] rounded-3xl p-8 hidden flex flex-col items-center justify-center min-h-[300px]">
                        <div class="w-8 h-8 border-2 border-green-500 border-t-transparent rounded-full animate-spin"></div>
                        <p class="text-gray-500 text-sm mt-3">Searching...</p>
                    </div>

                </div>

                {{-- Right: Similar Artists --}}
                <div class="relative flex-1 w-full">

                    {{-- Empty state --}}
                    <div id="similar-empty" class="flex items-center justify-center h-[300px] md:h-[400px]">
                        <p class="text-gray-600 text-sm">Similar artists will appear here</p>
                    </div>

                    {{-- Mobile grid --}}
                    <div id="similar-mobile" class="grid grid-cols-3 gap-6 place-items-center md:hidden py-4 hidden"></div>

                    {{-- Desktop absolute --}}
                    <div id="similar-desktop" class="hidden md:block relative h-[400px]"></div>

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

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>

    <script>
        const LASTFM_API_KEY = '9b63fe91f80052b4d121950664d7df8b'; // <-- replace with your Last.fm API key
        const LASTFM_BASE = 'https://ws.audioscrobbler.com/2.0/';
        let currentArtistUrl = '#';

        const floatAnims = ['float1', 'float2', 'float3'];
        const desktopPositions = [{
                top: '5%',
                left: '15%'
            }, {
                top: '10%',
                left: '50%'
            },
            {
                top: '5%',
                left: '75%'
            }, {
                top: '40%',
                left: '10%'
            },
            {
                top: '35%',
                left: '40%'
            }, {
                top: '30%',
                left: '70%'
            },
            {
                top: '65%',
                left: '20%'
            }, {
                top: '65%',
                left: '55%'
            },
            {
                top: '68%',
                left: '80%'
            }, {
                top: '50%',
                left: '30%'
            },
            {
                top: '20%',
                left: '85%'
            }, {
                top: '75%',
                left: '45%'
            },
        ];
        const sizes = ['w-12 h-12', 'w-14 h-14', 'w-16 h-16', 'w-20 h-20'];

        function searchArtist(e) {
            e.preventDefault();
            const query = document.getElementById('artist-search').value.trim();
            if (!query) return;
            loadArtist(query);
        }

        async function loadArtist(name) {
            showLoading();

            try {
                const [infoRes, similarRes] = await Promise.all([
                    fetch(`${LASTFM_BASE}?method=artist.getinfo&artist=${encodeURIComponent(name)}&api_key=${LASTFM_API_KEY}&format=json`),
                    fetch(`${LASTFM_BASE}?method=artist.getsimilar&artist=${encodeURIComponent(name)}&limit=12&api_key=${LASTFM_API_KEY}&format=json`)
                ]);

                const infoData = await infoRes.json();
                const similarData = await similarRes.json();

                if (infoData.error) {
                    showEmpty();
                    return;
                }

                renderArtistCard(infoData.artist);
                renderSimilarArtists(similarData.similarartists?.artist || []);

            } catch (err) {
                console.error(err);
                showEmpty();
            }
        }

        function renderArtistCard(artist) {
            // Image — Last.fm images can be empty, fallback to placeholder
            const images = artist.image || [];
            const imgUrl = images.find(i => i.size === 'extralarge')?.['#text'] ||
                images.find(i => i.size === 'large')?.['#text'] ||
                'https://i.pravatar.cc/96?img=1';

            const tags = artist.tags?.tag?.slice(0, 3).map(t => t.name).join(' | ') || '';
            const listeners = artist.stats?.listeners ?
                parseInt(artist.stats.listeners).toLocaleString() + ' monthly listeners' :
                '';
            const bio = artist.bio?.summary?.replace(/<a[^>]*>.*?<\/a>/g, '').trim() || '';

            document.getElementById('artist-image').src = imgUrl || 'https://i.pravatar.cc/96?img=1';
            document.getElementById('artist-name').textContent = artist.name;
            document.getElementById('artist-tags').textContent = tags;
            document.getElementById('artist-listeners').textContent = listeners;
            document.getElementById('artist-bio').textContent = bio;
            document.getElementById('lastfm-link').href = artist.url || '#';
            currentArtistUrl = artist.url || '#';

            document.getElementById('artist-loading').classList.add('hidden');
            document.getElementById('artist-empty').classList.add('hidden');
            document.getElementById('artist-card').classList.remove('hidden');
        }

        async function renderSimilarArtists(artists) {
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

                // Fetch artist image
                let imgUrl = `https://i.pravatar.cc/64?img=${10 + i}`;
                try {
                    const r = await fetch(`${LASTFM_BASE}?method=artist.getinfo&artist=${encodeURIComponent(a.name)}&api_key=${LASTFM_API_KEY}&format=json`);
                    const d = await r.json();
                    const imgs = d.artist?.image || [];
                    const fetched = imgs.find(x => x.size === 'large')?.['#text'];
                    if (fetched) imgUrl = fetched;
                } catch (_) {}

                // Mobile bubble
                const mobileBubble = document.createElement('div');
                mobileBubble.className = 'artist-float flex flex-col items-center gap-1';
                mobileBubble.style.animation = `${anim} ${dur}s ease-in-out infinite ${delay}s`;
                mobileBubble.innerHTML = `
                <div class="w-14 h-14 rounded-full border border-white/20 overflow-hidden bg-gray-800">
                    <img src="${imgUrl}" class="w-full h-full object-cover" alt="${a.name}" onerror="this.src='https://i.pravatar.cc/56?img=${10+i}'"/>
                </div>
                <span class="text-white text-xs font-medium text-center">${a.name}</span>
            `;
                mobileBubble.addEventListener('click', () => loadArtist(a.name));
                mobileContainer.appendChild(mobileBubble);

                // Desktop bubble
                const desktopBubble = document.createElement('div');
                desktopBubble.className = 'artist-float absolute flex flex-col items-center gap-1';
                desktopBubble.style.cssText = `top: ${pos.top}; left: ${pos.left}; animation: ${anim} ${dur}s ease-in-out infinite ${delay}s;`;
                desktopBubble.innerHTML = `
                <div class="${size} rounded-full border border-white/20 overflow-hidden bg-gray-800">
                    <img src="${imgUrl}" class="w-full h-full object-cover rounded-full" alt="${a.name}" onerror="this.src='https://i.pravatar.cc/56?img=${10+i}'"/>
                </div>
                <span class="text-white text-xs font-medium">${a.name}</span>
            `;
                desktopBubble.addEventListener('click', () => loadArtist(a.name));
                desktopContainer.appendChild(desktopBubble);
            }

            mobileContainer.classList.remove('hidden');
        }

        function showLoading() {
            document.getElementById('artist-card').classList.add('hidden');
            document.getElementById('artist-empty').classList.add('hidden');
            document.getElementById('artist-loading').classList.remove('hidden');
            document.getElementById('similar-empty').classList.remove('hidden');
            document.getElementById('similar-mobile').innerHTML = '';
            document.getElementById('similar-desktop').innerHTML = '';
        }

        function showEmpty() {
            document.getElementById('artist-loading').classList.add('hidden');
            document.getElementById('artist-card').classList.add('hidden');
            document.getElementById('artist-empty').classList.remove('hidden');
        }

        function openLastFm() {
            window.open(currentArtistUrl, '_blank');
        }
    </script>

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