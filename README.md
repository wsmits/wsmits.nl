# wsmits.nl

Persoonlijke website van Wesley Smits. Gebouwd met Laravel 13, Inertia.js, Vue 3 en Tailwind CSS.

---

## Code update uitrollen

### 1. Maak je wijzigingen

Werk de code bij zoals gewenst.

### 2. Build de frontend assets (verplicht bij frontend wijzigingen)

> **Let op:** de gebouwde assets zitten in git (`public/build/`). Vergeet je de build, dan komen je frontend wijzigingen niet op de server.

```bash
npm run build
```

### 3. Commit alles inclusief de build

```bash
git add .
git commit -m "Omschrijving van je wijziging"
git push
```

### 4. Deploy via GitHub Actions

Ga naar GitHub → **Actions** → **Deploy to Production** → **Run workflow**.

---

## Lokale ontwikkeling

```bash
# PHP dependencies
composer install

# Node dependencies
npm install

# Frontend dev server (hot reload)
npm run dev

# Of een eenmalige build
npm run build
```

Zorg dat je een `.env` hebt (kopieer van `.env.example`) en draai `php artisan key:generate`.

---

## CV pagina (`/about-me`)

De CV pagina is beveiligd met een token. Stel `CV_TOKEN` in je `.env` in.

Deelbare link: `https://wsmits.nl/about-me?token=<CV_TOKEN>`

Na het eerste bezoek met het token wordt een sessie gezet — het token hoeft daarna niet meer in de URL te staan.
