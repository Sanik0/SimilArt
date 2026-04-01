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
    const res = await fetch(`/app/deezer/search?q=${encodeURIComponent(name)}`);
    const data = await res.json();
    return data.data?.[0] || null;
}

async function getDeezerTopTrack(artistId) {
    const res = await fetch(`/app/deezer/top-track?id=${artistId}`);
    const data = await res.json();
    return data.data?.find(t => t.preview) || null;
}

async function getDeezerSimilar(artistId) {
    const res = await fetch(`/app/deezer/similar?id=${artistId}`);
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
            fetch(`/app/lastfm/artist?artist=${encodeURIComponent(name)}`),
            searchDeezerArtist(name)
        ]);

        const infoData = await infoRes.json();
        if (infoData.error) { showEmpty(); return; }

        let similarArtists = [];
        if (deezerArtist?.id) {
            similarArtists = await getDeezerSimilar(deezerArtist.id);
        } else {
            const similarRes = await fetch(`/app/lastfm/similar?artist=${encodeURIComponent(name)}`);
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
    const spotifyUrl = `https://open.spotify.com/search/${encodeURIComponent(artist.name)}/artists`;
    document.getElementById('spotify-link').href = spotifyUrl;
    document.getElementById('spotify-link').classList.remove('hidden');

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
        emptyState.classList.add('flex');
        mobileContainer.classList.add('hidden');
        document.getElementById('similar-desktop').innerHTML = '';
        return;
    }

    emptyState.classList.add('hidden');
    emptyState.classList.remove('flex');

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
            } catch (_) { }
        }

        const bubbleHTML = `
                <div class="${size} rounded-full border border-white/20 overflow-hidden bg-gray-800">
                    <img src="${imgUrl}" class="w-full h-full object-cover rounded-full" alt="${a.name}" onerror="this.src='https://i.pravatar.cc/56?img=${10 + i}'"/>
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

window.loadArtist = loadArtist;
window.searchArtist = searchArtist;
window.toggleAudio = toggleAudio;
window.stopAudio = stopAudio;
window.renderSimilarArtists = renderSimilarArtists;
window.nextTestimonial = nextTestimonial;
window.prevTestimonial = prevTestimonial;
window.toggleFaq = toggleFaq;