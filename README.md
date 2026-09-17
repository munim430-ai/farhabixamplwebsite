# Hangeul Website (Static Clone)

This repository contains a full static clone of [www.hangeul.com.bd](https://www.hangeul.com.bd) generated with [goclone](https://github.com/goclone-dev/goclone) and optimized for manual or automated deployment to [Vercel](https://vercel.com).

## 🚀 Overview

- **Source URL**: `https://www.hangeul.com.bd`
- **Tool used**: `goclone` (`v1.2.2`)
- **Deployment Platform**: Vercel (Static Hosting)
- **Asset Fixes & Optimizations**:
  - Downloaded high-resolution hero posters and hero section background images
  - Downloaded all dynamic event gallery images and embedded the events feed
  - Integrated local Font Awesome 6 webfonts (`webfonts/`) and Google Fonts CDN
  - Downloaded and configured static versions of subpages (`/request_consultation`, `/b2b-partnership`, `/blog`, `/login`, etc.)
  - Added `vercel.json` with clean URL rewrites, cache-control headers, and security headers

## 📁 Project Structure

```
.
├── index.html                   # Main landing page
├── request_consultation.html    # Consultation request page (and .php alias)
├── b2b-partnership.html         # B2B partnership page
├── blog.html                    # Guides & Blog page (and .php alias)
├── blog/
│   ├── korean-language-course-in-dhaka.html
│   └── study-in-korea-requirements-bangladesh.html
├── login.html                   # Student portal login (and .php alias)
├── partner/
│   └── login.html               # Partner login (and .php alias)
├── uni/
│   └── login.html               # University portal login (and .php alias)
├── events_widget.html           # Pre-rendered events widget (and .php alias)
├── imgs/                        # All logos, university badges, hero & event photos
├── css/                         # Stylesheets
├── js/                          # Client-side scripts
├── webfonts/                    # Font Awesome font files (woff2, ttf)
├── vercel.json                  # Vercel deployment & routing configuration
└── package.json                 # Node package manifest with dev/build scripts
```

## 🛠️ Local Development & Testing

You can preview the site locally using any static web server:

### Option 1: Python
```bash
python3 -m http.server 3000
```
Open `http://localhost:3000` in your browser.

### Option 2: Node.js (npx serve)
```bash
npm run dev
# or
npx serve .
```

## 🌐 Deploying to Vercel (Manual Deployment)

### Method A: Deploy via Vercel CLI (Fastest)

1. Install Vercel CLI globally (if not already installed):
   ```bash
   npm i -g vercel
   ```

2. Login to your Vercel account:
   ```bash
   vercel login
   ```

3. Run deployment command in this repository:
   ```bash
   vercel deploy --prod
   ```

### Method B: Deploy via Vercel Web Dashboard

1. Push your changes to GitHub:
   ```bash
   git push origin main
   ```
2. Go to [https://vercel.com/new](https://vercel.com/new).
3. Connect your GitHub account and select the repository `munim430-ai/farhabixamplwebsite`.
4. Leave Framework Preset as **Other** (Root Directory `./`).
5. Click **Deploy**.