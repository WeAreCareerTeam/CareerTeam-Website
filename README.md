## Career Team Website

A simple PHP-based landing site using the Colorlib "Dreams" template, localized for Thai content, plus a tiny PHP API to fetch Discord avatars by user ID. Includes a static loading screen section for Career Launcher assets.

### Features
- SEO/OG tags ready for sharing
- Client-side: jQuery, Owl Carousel, Magnific Popup, Masonry, MixItUp, Bootstrap
- Server-side: PHP helper in `index.php` (Thai IP/language detection to load Live Chat), and a small Discord avatar API

### Project Structure (short)
```
CareerTeam-Website/
  API-GET/
    GetAvatarFromDiscordID.php       # Returns a Discord avatar image for a given user ID
  crlauncher/LoadingScreen/          # Static loading screen for Career Launcher
  css/, js/, fonts/, img/            # Front-end assets
  index.php                          # Main landing page
```

## Getting Started (Local)

### Requirements
- PHP 7.4+ (PHP 8.x recommended)
- No database required

### Run with PHP built-in server
From the project root:
```bash
php -S 0.0.0.0:8000 -t .
```
Open `http://localhost:8000` in your browser.

Notes:
- Live Chat embed in `index.php` loads only for Thai visitors (detected via IP and `Accept-Language`) and calls `http://ip-api.com`.
- Some client-side scripts require serving over HTTP (not from file://) to avoid CORS/local file restrictions.

## Internal API

### GET /API-GET/GetAvatarFromDiscordID.php
- Query param: `discordid` (numeric Discord User ID)
- Response: PNG image (avatar), cached for 1 hour
- Possible errors:
  - 400: missing `discordid`
  - 404: avatar not found for this user
  - 502: upstream API not reachable

Example:
```bash
curl -i "http://localhost:8000/API-GET/GetAvatarFromDiscordID.php?discordid=1043772856615583754"
```

Technical notes:
- The script sanitizes `discordid` to digits only and queries `https://pfpfinder.com/api/discord/user/{id}` with a 5s timeout.

## Career Launcher Loading Screen
Static files live under `crlauncher/LoadingScreen/`. Serve with any static server or alongside the main site. No build step required.

## Deployment
- Host under Apache or Nginx with PHP 7.4/8.x enabled
- Ensure `css/`, `js/`, `img/`, `fonts/` are publicly accessible
- If behind a proxy/CDN, configure your web server to pass the real client IP to PHP (e.g., via `X-Forwarded-For`) so IP-based logic works correctly

## Credits
- Template: Colorlib “Dreams” (CC BY 3.0)
- Client libraries: jQuery, Owl Carousel, Magnific Popup, Masonry, MixItUp, Bootstrap

## License
License will be added by the repository owner.


