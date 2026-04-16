# Scholvia Drafts — Project Context

## Deployment

- **Site:** https://scholvia.com
- **Host:** 103.153.2.106 (TechArea — srx1.techarea.co.id)
- **Panel:** CyberPanel with OpenLiteSpeed
- **SSH User:** schol8217
- **SSH Password:** m2gXUFpbCjcymNQ3CE8kqjaknjQmY8i9
- **SSH Command:** `sshpass -p 'm2gXUFpbCjcymNQ3CE8kqjaknjQmY8i9' ssh -o StrictHostKeyChecking=no -o PreferredAuthentications=password -o PubkeyAuthentication=no schol8217@103.153.2.106`
- **Document Root:** /home/scholvia.com/public_html
- **Theme Path:** /home/scholvia.com/public_html/wp-content/themes/scholvia-landing/
- **WP Config:** /home/scholvia.com/public_html/wp-config.php

## Project Structure

- `preview-d/` — Static HTML preview of the deployed site (for local development/preview)
- `scholvia-landing/` — WordPress theme (v2.1.0) that gets deployed to server
- `archived-drafts.zip` — Old drafts and previous iterations
- `citra_01.JPG` — New founder photo (Citra Agustina, black blazer)

## Workflow

1. Make changes in `preview-d/` for quick local preview (open HTML files directly in browser)
2. Port changes to `scholvia-landing/` WordPress theme (PHP templates with `get_template_directory_uri()` for asset paths)
3. Deploy via rsync: `sshpass -p 'm2gXUFpbCjcymNQ3CE8kqjaknjQmY8i9' rsync -avz --delete -e "ssh -o StrictHostKeyChecking=no -o PreferredAuthentications=password -o PubkeyAuthentication=no" /Users/wuesteon/scholvia-drafts/scholvia-landing/ schol8217@103.153.2.106:/home/scholvia.com/public_html/wp-content/themes/scholvia-landing/`
4. Purge cache after deploy: SSH in then run `wp litespeed-purge all` from `/home/scholvia.com/public_html`

## Tech Stack

- WordPress with custom theme (Elementor is installed but not used for the theme templates)
- OpenLiteSpeed + LiteSpeed Cache
- Fonts: Outfit (headings) + DM Sans (body)
- Brand color: #E85D3A (coral/orange)
- PHP templates: front-page.php, page-about.php, page-services.php, page-contact.php

## Important Notes

### CSS Version Cache Busting
- Asset versions are set in `functions.php` (lines 33-36). When making CSS/JS changes, bump the version string (e.g., `'2.1.0'` -> `'2.2.0'`) so browsers don't serve cached files.

### Caching Gotchas
- LiteSpeed Cache is aggressive — always run `wp litespeed-purge all` after deployment
- LiteSpeed also caches CSS/JS separately in `/wp-content/litespeed/cssjs/` — delete that too if needed
- Browser cache: bump version in `functions.php` to bust client-side cache

### Navbar (header.php)
- The `<nav class="navbar">` must NOT have inline styles for background. Previously had `style="background:var(--nav-scrolled-bg,rgba(10,10,30,.95))"` on inner pages which overrode CSS — this was removed.
- Inner page navbar styling is handled purely via `.inner-page .navbar` in `main.css` (white background with blur)
- Homepage navbar is transparent, turns white on scroll via `.navbar.scrolled` class (added by main.js)

### Founder Image
- The founder photo (`assets/img/citra.png`) is referenced in `index.html`/`front-page.php` (guide section) and `about.html`/`page-about.php` (intro + founder message sections)
- Source file: `citra_01.JPG` in project root — copy to `assets/img/citra.png` when updating

## Changelog

### v2.1.0 (2026-04-03)
- **Contact page redesign:** Info cards changed from vertical stack to 2-column grid with featured full-width cards for email, phone (with country flags), and response time (with green pulsing indicator)
- **About page photo:** Replaced 300x300 square with 300x380 tall frame, gradient background, removed orange border accent, LinkedIn moved to pill button below photo
- **Founder image:** Updated to new headshot (black blazer, white shirt)
- **Footer:** Copyright + designer credit left-aligned with dot separator
- **Navbar fix:** Removed inline dark background from header.php that was overriding CSS on inner pages
- **Version bump:** CSS/JS cache busting via functions.php version strings
