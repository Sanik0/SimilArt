# 🎵 SimilArt

**Discover your next favorite artist — instantly.**

SimilArt is a music artist discovery web app that lets you search for any artist and instantly see who sounds just like them. Powered by Last.fm and Deezer APIs, SimilArt maps out an artist's sonic neighbors so you can explore endlessly, one click at a time.

🔗 **Live Site:** [similart.vercel.app](https://similart.vercel.app)
---

## Screenshots

### Home 
![Homepage](SimilArt/screenshots/home.png)

### Home mobile
![Article Page](SimilArt/screenshots/homemobile.png)

### Search Section
![Quiz Page](SimilArt/screenshots/search.png)

## ✨ Features

- 🔍 **Artist Search** — Search any artist from any genre worldwide
- 🎧 **30-Second Previews** — Listen to a top track preview directly in the app
- 🌐 **Multi-Platform Links** — Jump to Deezer, Apple Music, Spotify, and Last.fm with one click
- 👥 **Similar Artists** — Floating artist bubbles showing artists who sound just like your search
- 🖱️ **Click to Explore** — Click any similar artist to load their profile and keep discovering
- 📊 **Artist Info** — Genre tags, monthly listeners, fan count, and bio
- 💀 **Skeleton Loaders** — Smooth loading states while data fetches
- 📱 **Responsive** — Works on mobile and desktop

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Framework | Laravel 12 |
| Frontend | Blade, Tailwind CSS, Flowbite |
| JS Bundler | Vite |
| Music Data | Last.fm API, Deezer API |
| Deployment | Vercel (vercel-php runtime) |

---

## 📦 Installation

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & npm
- A [Last.fm API key](https://www.last.fm/api/account/create)

### Setup

```bash
# Clone the repo
git clone https://github.com/Sanik0/SimilArt.git
cd SimilArt

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate
```

### Environment Variables

Add these to your `.env` file:

```env
APP_NAME=SimilArt
APP_ENV=local
APP_KEY=base64:your_generated_key
APP_DEBUG=true
APP_URL=http://localhost:8000

SESSION_DRIVER=file

LASTFM_API_KEY=your_lastfm_api_key_here
```

### Run Locally

```bash
# Start Laravel server
php artisan serve

# In a separate terminal, start Vite
npm run dev
```

Visit `http://localhost:8000`

---

## 🚀 Deployment (Vercel)

SimilArt is deployed on Vercel using the community `vercel-php` runtime.

### Key files for deployment:

**`vercel.json`** — Vercel configuration with routes and environment variables

**`api/index.php`** — Entry point that forwards requests to Laravel

### Deploy steps:

```bash
# Build frontend assets
npm run build

# Remove hot file if it exists
rm public/hot

# Commit and push
git add .
git commit -m "deploy"
git push

# Deploy to Vercel
vercel --prod
```

> ⚠️ **Important:** Vercel reserves the `/api/` path. All Laravel API routes use `/app/` prefix instead (e.g. `/app/deezer/search`).

For a detailed deployment guide, see [laravel-vercel-guide.docx](./laravel-vercel-guide.docx).

---

## 🔌 API Routes

| Method | Route | Description |
|--------|-------|-------------|
| GET | `/app/deezer/search?q=` | Search artist on Deezer |
| GET | `/app/deezer/artist?id=` | Get artist info from Deezer |
| GET | `/app/deezer/top-track?id=` | Get top track with preview |
| GET | `/app/deezer/similar?id=` | Get similar artists |
| GET | `/app/lastfm/artist?artist=` | Get artist info from Last.fm |
| GET | `/app/lastfm/similar?artist=` | Get similar artists from Last.fm |

---

## 📁 Project Structure

```
SimilArt/
├── api/
│   └── index.php              # Vercel PHP entry point
├── app/                       # Laravel app logic
├── public/
│   ├── artists/               # Hardcoded default artist images
│   └── build/                 # Vite compiled assets
├── resources/
│   ├── js/
│   │   └── app.js             # All frontend JS logic
│   ├── css/
│   │   └── app.css            # Custom styles & animations
│   └── views/
│       └── index.blade.php    # Main page
├── routes/
│   └── web.php                # All routes
├── vercel.json                # Vercel deployment config
└── .env                       # Environment variables (not committed)
```

---

## 🎨 Design

- Dark theme with green (`#10b954`) accents
- Grid-based section layout inspired by modern SaaS landing pages
- Floating artist bubbles with organic animation
- Skeleton loaders for smooth UX
- Responsive across mobile, tablet, and desktop

---

## ⚠️ Known Limitations

- **Spotify previews** — Spotify API requires Premium subscription for developers. SimilArt links to Spotify search instead.
- **Deezer previews** — 30-second previews are not available for all tracks depending on region and label.
- **Vercel filesystem** — Sessions, cache, and file storage don't persist between requests on Vercel's serverless environment.

---

## 📄 License

This project is for personal/educational use. Music data is provided by [Last.fm](https://www.last.fm) and [Deezer](https://www.deezer.com).

---

Made by [R. Sanico](https://github.com/Sanik0)