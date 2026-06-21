# Singathiwe Media WordPress Theme

Custom classic WordPress theme for Singathiwe Media.

## Theme Features

- Cinematic `front-page.php` based on the approved static homepage
- WordPress-native header, footer, title support and menus
- Responsive mobile navigation
- Dedicated page content for About, Activations, Marketing, Creatives and Digital Systems
- Automatic creation of required pages and the primary menu on first activation
- WordPress theme preview in `screenshot.png`
- English/Spanish homepage content toggle
- WordPress.com `.deployignore` configuration

## Required Theme Files

- `style.css`
- `index.php`
- `functions.php`
- `front-page.php`
- `header.php`
- `footer.php`
- `page.php`
- `404.php`
- `theme.json`

## Local WordPress Installation

1. Copy this repository into:
   `wp-content/themes/singathiwe-media`
2. In WordPress Admin, go to `Appearance > Themes`.
3. Activate **Singathiwe Media**.
4. The theme creates the required service pages and primary navigation menu.
5. Go to `Settings > Permalinks` and save once if page routes return 404.

## WordPress.com GitHub Deployment

Requires a WordPress.com Business or Commerce plan.

1. Push this repository to GitHub.
2. In the WordPress.com hosting dashboard, open `Deployments`.
3. Connect the GitHub repository.
4. Select the `main` branch.
5. Set destination directory to:
   `/wp-content/themes/singathiwe-media`
6. Choose **Simple deployment**.
7. Use **Manual deployment** for production or automatic deployment for staging.
8. Trigger the first deployment.
9. Activate the theme under `Appearance > Themes`.

The `.deployignore` file prevents static source pages, documentation, concept art and local build files from being copied into WordPress.

## Self-hosted WordPress

Upload the theme ZIP or deploy the repository contents to:

`wp-content/themes/singathiwe-media`

For GitHub automation, configure an SFTP/SSH deployment workflow using secrets supplied by the hosting provider. Do not commit passwords or server credentials.

## Static Source

The original static HTML pages remain in the repository as design references. WordPress deployment excludes them via `.deployignore`.

## Brand Assets

- White transparent wordmark: `assets/singathiwe-media-logo-wordmark.png`
- Black transparent wordmark: `assets/singathiwe-media-logo-black.png`
- Hero image: `assets/hero-black-female.png`

