<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Discover artists who sound just like the ones you love. Search any artist and instantly explore similar musicians with SimilArt.">
    <meta name="keywords" content="similar artists, music discovery, find new music, artist recommendations">

    <!-- Open Graph (for sharing on social media) -->
    <meta property="og:title" content="SimilArt — Discover Similar Artists">
    <meta property="og:description" content="Search any artist and instantly discover who sounds just like them.">
    <meta property="og:url" content="https://similart.vercel.app">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="SimilArt — Discover Similar Artists">
    <meta name="twitter:description" content="Search any artist and instantly discover who sounds just like them.">
    <meta name="google-site-verification" content="G83VNIJytUBO3AOXISgoK2tzsu76105cJV1-KaQ6pNE" />
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 -960 960 960'><path fill='%2343A047' d='M508.5-668.5Q520-657 520-640v480q0 17-11.5 28.5T480-120q-17 0-28.5-11.5T440-160v-480q0-17 11.5-28.5T480-680q17 0 28.5 11.5Zm-160 120Q360-537 360-520v240q0 17-11.5 28.5T320-240q-17 0-28.5-11.5T280-280v-240q0-17 11.5-28.5T320-560q17 0 28.5 11.5Zm320 0Q680-537 680-520v240q0 17-11.5 28.5T640-240q-17 0-28.5-11.5T600-280v-240q0-17 11.5-28.5T640-560q17 0 28.5 11.5ZM480-760q-45 0-84.5 22.5T333-676q-32 54-87.5 85T127-560h-7q-17 0-28.5-11.5T80-600q0-17 11.5-28.5T120-640h7q42 0 78.5-21t58.5-57q34-57 91.5-89.5T480-840q67 0 124.5 32.5T696-718q22 36 58.5 57t78.5 21h7q17 0 28.5 11.5T880-600q0 17-11.5 28.5T840-560h-6q-63 0-118.5-31T628-676q-23-39-62.5-61.5T480-760ZM131.5-371.5Q120-383 120-400t11.5-28.5Q143-440 160-440t28.5 11.5Q200-417 200-400t-11.5 28.5Q177-360 160-360t-28.5-11.5Zm640 0Q760-383 760-400t11.5-28.5Q783-440 800-440t28.5 11.5Q840-417 840-400t-11.5 28.5Q817-360 800-360t-28.5-11.5Z'/></svg>">
    @vite('resources/css/app.css')
    <title>
        SimilArt - Discover New Artists with Just a Click
    </title>
</head>

<body class="bg-black">
    {{-- NAVIGATION --}}
    <nav class="fixed w-full z-50 py-3 top-0 start-0 border-b border-white/5"
        style="background: rgba(0,0,0,0.75); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px);">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto px-6 py-3">

            {{-- Logo --}}
            <a href="#" class="flex items-center space-x-2.5">
                {{-- Play icon badge --}}
                <svg class="h-6.5 w-6.5" fill="#43A047" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                    <path d="M508.5-668.5Q520-657 520-640v480q0 17-11.5 28.5T480-120q-17 0-28.5-11.5T440-160v-480q0-17 11.5-28.5T480-680q17 0 28.5 11.5Zm-160 120Q360-537 360-520v240q0 17-11.5 28.5T320-240q-17 0-28.5-11.5T280-280v-240q0-17 11.5-28.5T320-560q17 0 28.5 11.5Zm320 0Q680-537 680-520v240q0 17-11.5 28.5T640-240q-17 0-28.5-11.5T600-280v-240q0-17 11.5-28.5T640-560q17 0 28.5 11.5ZM480-760q-45 0-84.5 22.5T333-676q-32 54-87.5 85T127-560h-7q-17 0-28.5-11.5T80-600q0-17 11.5-28.5T120-640h7q42 0 78.5-21t58.5-57q34-57 91.5-89.5T480-840q67 0 124.5 32.5T696-718q22 36 58.5 57t78.5 21h7q17 0 28.5 11.5T880-600q0 17-11.5 28.5T840-560h-6q-63 0-118.5-31T628-676q-23-39-62.5-61.5T480-760ZM131.5-371.5Q120-383 120-400t11.5-28.5Q143-440 160-440t28.5 11.5Q200-417 200-400t-11.5 28.5Q177-360 160-360t-28.5-11.5Zm640 0Q760-383 760-400t11.5-28.5Q783-440 800-440t28.5 11.5Q840-417 840-400t-11.5 28.5Q817-360 800-360t-28.5-11.5Z" />
                </svg>
                <span class="text-green-600 font-bold text-2xl tracking-tight">
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


                {{-- CTA Button --}}
                <a href="#quickstart"
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
            style="background: rgba(0,0,0,0.1); border-top: 1px solid rgba(255,255,255,0.06);">
            <ul class="flex flex-col space-y-1 pt-3">
                <li><a href="#quickstart" class="block text-gray-400 hover:text-white text-sm py-2 px-3 rounded-lg hover:bg-white/5 transition-all">Quickstart</a></li>
                <li><a href="#why" class="block text-gray-400 hover:text-white text-sm py-2 px-3 rounded-lg hover:bg-white/5 transition-all">Why Choose us</a></li>
                <li><a href="#testimonials" class="block text-gray-400 hover:text-white text-sm py-2 px-3 rounded-lg hover:bg-white/5 transition-all">Testimonials</a></li>
                <li><a href="#how" class="block text-gray-400 hover:text-white text-sm py-2 px-3 rounded-lg hover:bg-white/5 transition-all">How it Works</a></li>
                <li><a href="#faq" class="block text-gray-400 hover:text-white text-sm py-2 px-3 rounded-lg hover:bg-white/5 transition-all">FAQ</a></li>
            </ul>
        </div>
    </nav>
    {{-- JUMBOTRON --}}
    <section id="quickstart" style="background: linear-gradient(to top, #000A04, #000000);" class=" mt-30 relative overflow-hidden pb-10 md:pb-15">
        <div class="py-8 px-4 mx-auto max-w-screen-2xl text-center lg:py-16">
            <h1 class="mb-6 text-4xl font-medium tracking-tighter text-white md:text-5xl lg:text-6xl">Discover New Artists <br>With Just a Click</h1>
            <p class="mb-8 text-base inline-flex justify-center font-normal text-gray-300 md:text-xl max-w-2xl text-center">Search any artist you love and SimilArt instantly maps out who sounds just like them — explore endlessly, one click at a time.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 md:space-x-4">


                <div class="relative z-10 w-full max-w-xl flex justify-center mb-10 px-3">
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
    {{-- ARTISTS --}}
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
                                <div class="grid grid-cols-2 overflow-hidden mt-4 md:mt-6 w-full border-t border-[#323232]">

                                    <a id="deezer-link" href="https://www.deezer.com/artist/246791" target="_blank"
                                        class="inline-flex justify-center items-center gap-2 cursor-pointer text-white hover:bg-[rgba(102,102,102,0.1)] transition-all duration-300 font-light text-sm text-center p-4 border-b border-r border-[#323232]">
                                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M18.81 11.282H24v1.474h-5.19zm0 3.21H24v1.474h-5.19zm0-6.418H24v1.473h-5.19zM0 17.906h5.19v-1.474H0zm6.462 0h5.19v-1.474h-5.19zm6.463 0h5.19v-1.474h-5.19zm6.462 0H24v-1.474h-5.19zM0 14.492h5.19v-1.474H0zm6.462 0h5.19v-1.474h-5.19zm6.463 0h5.19v-1.474h-5.19zM6.462 11.08h5.19V9.606h-5.19zm6.463 0h5.19V9.606h-5.19z" />
                                        </svg>
                                        Deezer
                                    </a>

                                    <a id="apple-music-link" href="https://music.apple.com/search?term=Drake" target="_blank"
                                        class="inline-flex justify-center items-center gap-2 cursor-pointer text-white hover:bg-[rgba(102,102,102,0.1)] transition-all duration-300 font-light text-sm text-center p-4 border-b border-r border-[#323232]">
                                        {{-- Apple Music note icon --}}
                                        <svg class="w-4 h-4" fill="#ffffff" width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">

                                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                            <g id="SVGRepo_iconCarrier">

                                                <path d="m24 6.124c0-.029.001-.063.001-.097 0-.743-.088-1.465-.253-2.156l.013.063c-.312-1.291-1.1-2.359-2.163-3.031l-.02-.012c-.536-.35-1.168-.604-1.847-.723l-.03-.004c-.463-.084-1.003-.138-1.553-.15h-.011c-.04 0-.083-.01-.124-.013h-12.025c-.152.01-.3.017-.455.026-.791.016-1.542.161-2.242.415l.049-.015c-1.306.501-2.327 1.495-2.853 2.748l-.012.033c-.17.409-.297.885-.36 1.38l-.003.028c-.051.343-.087.751-.1 1.165v.016c0 .032-.007.062-.01.093v12.224c.01.14.017.283.027.424.02.861.202 1.673.516 2.416l-.016-.043c.609 1.364 1.774 2.387 3.199 2.792l.035.009c.377.111.817.192 1.271.227l.022.001c.555.053 1.11.06 1.667.06h11.028c.554 0 1.099-.037 1.633-.107l-.063.007c.864-.096 1.645-.385 2.321-.823l-.021.013c.825-.539 1.47-1.29 1.867-2.176l.013-.032c.166-.383.295-.829.366-1.293l.004-.031c.084-.539.132-1.161.132-1.794 0-.086-.001-.171-.003-.256v.013q0-5.7 0-11.394zm-6.424 3.99v5.712c.001.025.001.054.001.083 0 .407-.09.794-.252 1.14l.007-.017c-.273.562-.771.979-1.373 1.137l-.015.003c-.316.094-.682.156-1.06.173h-.01c-.029.002-.062.002-.096.002-1.033 0-1.871-.838-1.871-1.871 0-.741.431-1.382 1.056-1.685l.011-.005c.293-.14.635-.252.991-.32l.027-.004c.378-.082.758-.153 1.134-.24.264-.045.468-.252.51-.513v-.003c.013-.057.02-.122.02-.189 0-.002 0-.003 0-.005q0-2.723 0-5.443c-.001-.066-.01-.13-.027-.19l.001.005c-.026-.134-.143-.235-.283-.235-.006 0-.012 0-.018.001h.001c-.178.013-.34.036-.499.07l.024-.004q-1.14.225-2.28.456l-3.7.748c-.016 0-.032.01-.048.013-.222.03-.392.219-.392.447 0 .015.001.03.002.045v-.002.13q0 3.9 0 7.801c.001.028.001.062.001.095 0 .408-.079.797-.224 1.152l.007-.021c-.264.614-.792 1.072-1.436 1.235l-.015.003c-.319.096-.687.158-1.067.172h-.008c-.031.002-.067.003-.104.003-.913 0-1.67-.665-1.815-1.536l-.001-.011c-.02-.102-.031-.218-.031-.338 0-.785.485-1.458 1.172-1.733l.013-.004c.315-.127.687-.234 1.072-.305l.036-.005c.287-.06.575-.116.86-.177.341-.05.6-.341.6-.693 0-.007 0-.015 0-.022v.001-.15q0-4.44 0-8.883c0-.002 0-.004 0-.007 0-.129.015-.254.044-.374l-.002.011c.066-.264.277-.466.542-.517l.004-.001c.255-.066.515-.112.774-.165.733-.15 1.466-.3 2.2-.444l2.27-.46c.67-.134 1.34-.27 2.01-.4.181-.042.407-.079.637-.104l.027-.002c.018-.002.04-.004.061-.004.27 0 .489.217.493.485.008.067.012.144.012.222v.001q0 2.865 0 5.732z" />

                                            </g>

                                        </svg>
                                        Apple Music
                                    </a>

                                    <a id="spotify-link" href="https://open.spotify.com/search/Drake/artists" target="_blank"
                                        class="hidden inline-flex justify-center items-center gap-2 cursor-pointer text-white box-border border-r border-[#323232] hover:bg-[rgba(102,102,102,0.1)] transition-all duration-300 font-light text-sm text-center p-4">
                                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z" />
                                        </svg>
                                        Spotify
                                    </a>

                                    <a id="lastfm-link" href="https://www.last.fm/music/Drake" target="_blank"
                                        class="inline-flex justify-center items-center gap-2 cursor-pointer text-white hover:bg-[rgba(102,102,102,0.1)] transition-all duration-300 font-light text-sm text-center p-4">
                                        {{-- Last.fm soundwave icon --}}
                                        <svg class="w-4 h-4" fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 512 512" xml:space="preserve" stroke="#ffffff" stroke-width="0.00512">

                                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                            <g id="SVGRepo_iconCarrier">
                                                <g id="7935ec95c421cee6d86eb22ecd125006">
                                                    <path style="display: inline;" d="M308.214,337.861l-5.663-13.064L253.93,209.107c-16.056-40.931-56.085-68.601-101.198-68.601 c-61.043,0-110.576,51.706-110.576,115.524c0,63.756,49.533,115.493,110.576,115.493c42.618,0,79.604-25.164,98.062-62.007 l19.668,47.329c-27.876,35.526-70.298,58.155-117.729,58.155C68.645,415.002,0.5,343.886,0.5,256.031 c0-87.834,68.145-159.033,152.231-159.033c63.446,0,114.696,35.361,140.741,98.093c1.946,4.865,27.516,67.255,49.834,120.369 c13.788,32.856,25.537,54.678,63.776,56.023c37.441,1.325,63.249-22.484,63.249-52.648c0-29.45-19.7-36.542-52.825-48.042 c-59.543-20.486-90.308-41.065-90.308-90.401c0-48.115,31.303-80.205,82.295-80.205c33.137,0,57.162,15.424,73.756,46.169 l-32.618,17.37c-12.235-17.909-25.765-25-42.97-25c-23.934,0-40.94,17.381-40.94,40.465c0,32.805,28.095,37.742,67.348,51.179 c52.866,17.981,77.431,38.529,77.431,89.801c0,53.86-44.232,93.093-102.006,93.01C356.256,412.942,327.861,385.769,308.214,337.861 z"> </path>
                                                </g>
                                            </g>

                                        </svg>
                                        Last.fm
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
                    <div class="relative flex-1 w-full h-[300px] md:h-auto">

                        {{-- Empty state - hidden by default --}}
                        <div id="similar-empty" class="hidden absolute inset-0 items-center justify-center flex-col gap-3">
                            <svg class="w-10 h-10 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                            </svg>
                            <p class="text-gray-600 text-sm">No similar artists found</p>
                            <p class="text-gray-700 text-xs">Try searching for a more popular artist</p>
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
                                <div class="w-18 h-18 rounded-full border-2 overflow-hidden bg-gray-800">
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
                                <div class="w-20 h-20 rounded-full border-2  overflow-hidden bg-gray-800">
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
    <section id="why" class="w-full flex flex-col items-center justify-center py-24 px-4 bg-black relative overflow-hidden">

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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
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
                    <a href="#quickstart" class="inline-flex items-center gap-2 text-green-400 text-sm font-medium hover:text-green-300 transition-colors duration-200 w-fit">
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
    <section id="how" class="w-full flex flex-col items-start justify-center py-16 px-4 bg-black relative overflow-hidden">

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
                                <span class="text-gray-500 text-xs">Laufey</span>
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
                                <p class="text-white text-xs font-semibold">Laufey</p>
                                <p class="text-gray-500 text-[10px]">Bossa Nova | Jazz Pop</p>
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
                                <span class="text-white text-[9px]">Phoebe Bridgers</span>
                            </div>
                            <div class="absolute top-4 left-1/3 flex flex-col items-center gap-1">
                                <div class="w-11 h-11 rounded-full border-2 border-green-500/60 overflow-hidden bg-gray-700">
                                    <img src="https://i.pravatar.cc/44?img=12" class="w-full h-full object-cover" alt="" />
                                </div>
                                <span class="text-white text-[9px]">Beabadobee</span>
                            </div>
                            <div class="absolute top-1 right-6 flex flex-col items-center gap-1">
                                <div class="w-9 h-9 rounded-full border border-white/20 overflow-hidden bg-gray-700">
                                    <img src="https://i.pravatar.cc/36?img=13" class="w-full h-full object-cover" alt="" />
                                </div>
                                <span class="text-white text-[9px]">Clairo</span>
                            </div>
                            <div class="absolute bottom-0 left-1/2 flex flex-col items-center gap-1">
                                <div class="w-8 h-8 rounded-full border border-white/20 overflow-hidden bg-gray-700">
                                    <img src="https://i.pravatar.cc/32?img=14" class="w-full h-full object-cover" alt="" />
                                </div>
                                <span class="text-white text-[9px]">Faye Webster</span>
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
    <section id="testimonials" class="w-full flex flex-col items-center justify-center bg-black px-4 py-0">
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
                        <p id="testimonial-name" class="text-white text-sm font-semibold">Jacob H</p>
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
    <section id="faq" class="w-full flex flex-col items-center justify-center bg-black px-4 py-0">
        <div class="w-full max-w-6xl mx-auto">

            <div class="w-full h-px bg-white/10"></div>

            {{-- Header row --}}
            <div class="grid grid-cols-1 md:grid-cols-2 border-b border-white/10">
                <div class="p-10 border-r border-white/10">
                    <h2 class="text-white text-3xl md:text-4xl font-bold mb-2">Your Questions,<br>Answered</h2>
                    <p class="text-gray-500 text-sm leading-relaxed mt-3">Everything you need to know about SimilArt.</p>
                </div>
                <div class="flex items-end justify-end">
                    <a href="#quickstart"
                        class="flex-1 w-full flex items-center gap-3 px-10 py-8 border-t border-white/10 text-green-600 hover:text-green-500 hover:bg-white/[0.02] transition-all duration-200 text-sm group">
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
    {{-- CTA SECTION --}}
    <section class="w-full flex flex-col items-center justify-center bg-black px-4 py-0">
        <div class="w-full max-w-6xl mx-auto">

            <div class="w-full h-px bg-white/10"></div>

            <div class="flex flex-col items-center justify-center text-center py-24 px-4 relative overflow-hidden">

                {{-- glow --}}
                <div class="absolute inset-0 pointer-events-none"
                    style="background: radial-gradient(ellipse at center, rgba(16,185,80,0.1) 0%, transparent 65%); filter: blur(20px);">
                </div>

                <h2 class="relative z-10 text-white text-4xl md:text-5xl font-bold leading-tight mb-5">
                    Ready to discover<br>your next favorite artist?
                </h2>
                <p class="relative z-10 text-gray-400 text-sm md:text-base leading-relaxed mb-8 max-w-md">
                    Search any artist and instantly explore who sounds just like them — no account needed, completely free.
                </p>
                <a href="#quickstart"
                    class="relative z-10 inline-flex items-center px-7 py-3 rounded-full text-black text-sm font-semibold transition-all duration-200"
                    style="background: #10b954; box-shadow: 0 0 24px rgba(16,185,80,0.45);"
                    onmouseover="this.style.boxShadow='0 0 40px rgba(16,185,80,0.65)'"
                    onmouseout="this.style.boxShadow='0 0 24px rgba(16,185,80,0.45)'">
                    Start Exploring Now
                </a>
            </div>

            <div class="w-full h-px bg-white/10"></div>

        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="w-full bg-black px-4 py-0">
        <div class="w-full max-w-6xl mx-auto">

            <div class="w-full h-px bg-white/10"></div>

            <div class="grid grid-cols-1 md:grid-cols-4 border-b border-white/10">

                {{-- Brand col --}}
                <div class="p-10 border-r border-b md:border-b-0 border-white/10 flex flex-col gap-5">
                    <a href="#" class="flex items-center gap-2.5">
                        <svg class="h-5.5 w-5.5" fill="#43A047" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                            <path d="M508.5-668.5Q520-657 520-640v480q0 17-11.5 28.5T480-120q-17 0-28.5-11.5T440-160v-480q0-17 11.5-28.5T480-680q17 0 28.5 11.5Zm-160 120Q360-537 360-520v240q0 17-11.5 28.5T320-240q-17 0-28.5-11.5T280-280v-240q0-17 11.5-28.5T320-560q17 0 28.5 11.5Zm320 0Q680-537 680-520v240q0 17-11.5 28.5T640-240q-17 0-28.5-11.5T600-280v-240q0-17 11.5-28.5T640-560q17 0 28.5 11.5ZM480-760q-45 0-84.5 22.5T333-676q-32 54-87.5 85T127-560h-7q-17 0-28.5-11.5T80-600q0-17 11.5-28.5T120-640h7q42 0 78.5-21t58.5-57q34-57 91.5-89.5T480-840q67 0 124.5 32.5T696-718q22 36 58.5 57t78.5 21h7q17 0 28.5 11.5T880-600q0 17-11.5 28.5T840-560h-6q-63 0-118.5-31T628-676q-23-39-62.5-61.5T480-760ZM131.5-371.5Q120-383 120-400t11.5-28.5Q143-440 160-440t28.5 11.5Q200-417 200-400t-11.5 28.5Q177-360 160-360t-28.5-11.5Zm640 0Q760-383 760-400t11.5-28.5Q783-440 800-440t28.5 11.5Q840-417 840-400t-11.5 28.5Q817-360 800-360t-28.5-11.5Z" />
                        </svg>
                        <span class="text-green-600 font-bold text-lg tracking-tight">SimilArt</span>
                    </a>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Discover artists who sound just like the ones you love.
                    </p>
                </div>

                {{-- Navigation --}}
                <div class="p-10 border-r border-b md:border-b-0 border-white/10 flex flex-col gap-5">
                    <p class="text-white text-xs font-semibold tracking-wide uppercase">Navigation</p>
                    <ul class="flex flex-col gap-3">
                        <li><a href="#quickstart" class="text-gray-500 text-sm hover:text-white transition-colors duration-200">Search Artist</a></li>
                        <li><a href="#why" class="text-gray-500 text-sm hover:text-white transition-colors duration-200">Why SimilArt</a></li>
                        <li><a href="#quickstart" class="text-gray-500 text-sm hover:text-white transition-colors duration-200">Quick Start</a></li>
                        <li><a href="#how" class="text-gray-500 text-sm hover:text-white transition-colors duration-200">How it Works</a></li>
                        <li><a href="#testimonials" class="text-gray-500 text-sm hover:text-white transition-colors duration-200">Testimonials</a></li>
                        <li><a href="#faq" class="text-gray-500 text-sm hover:text-white transition-colors duration-200">FAQ</a></li>
                    </ul>
                </div>

                {{-- Introduction --}}
                <div class="p-10 border-r border-b md:border-b-0 border-white/10 flex flex-col gap-5">
                    <p class="text-white text-xs font-semibold tracking-wide uppercase">Music Platforms</p>
                    <ul class="flex flex-col gap-3">
                        <li><a href="https://last.fm" class="text-gray-500 text-sm hover:text-white transition-colors duration-200">Last.fm</a></li>
                        <li><a href="https://music.apple.com" class="text-gray-500 text-sm hover:text-white transition-colors duration-200">Apple Music</a></li>
                        <li><a href="https://deezer.com" class="text-gray-500 text-sm hover:text-white transition-colors duration-200">Deezer</a></li>
                        <li><a href="https://spotify.com" class="text-gray-500 text-sm hover:text-white transition-colors duration-200">Spotify</a></li>
                    </ul>
                </div>

                {{-- Socials / extra --}}
                <div class="p-10 border-b md:border-b-0 border-white/10 flex flex-col gap-5">
                    <p class="text-white text-xs font-semibold tracking-wide uppercase">Other Tools</p>
                    <ul class="flex flex-col gap-3">
                        <li><a href="https://wikiquiz-oac9s0kfq-ronan-sanicos-projects.vercel.app/" class="text-gray-500 text-sm hover:text-white transition-colors duration-200">WikiQuiz</a></li>
                    </ul>
                </div>

            </div>

            {{-- Bottom bar --}}
            <div class="py-6 px-10 flex flex-col md:flex-row items-center justify-between gap-3 border-b border-white/10">
                <p class="text-gray-600 text-xs">
                    © 2026 <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">R. Sanico</a> SimilArt. All Rights Reserved.
                </p>
                <div class="flex items-center gap-6">
                    <a href="#" class="text-gray-600 text-xs hover:text-gray-400 transition-colors duration-200">Privacy Policy</a>
                    <a href="#" class="text-gray-600 text-xs hover:text-gray-400 transition-colors duration-200">Terms of Service</a>
                </div>
            </div>

        </div>
    </footer>

    @vite(['resources/js/app.js'])

</body>

</html>