# LUMO WP Theme

A lightweight WordPress theme for local point-of-sale and small business sites.

![Image showcasing design and pages of the theme](https://github.com/LUMOTradeService/LUMO-WP-Theme/blob/main/screenshot.jpg)

This repository contains the `lumo-wp-theme` — a custom WordPress theme used for the Lumo POS site. It includes templates, patterns, styles, assets, and theme functions required to run the site.

## Features

- Modern block-based theme templates and patterns
- Theme JSON-driven styles and color palettes
- Utility templates for archive, single, and front page
- Bundled fonts and icons in `assets/`

## Getting Started

### Installation

1. Copy the theme folder into your WordPress installation under `wp-content/themes/`.
2. Activate the theme from the WordPress admin under Appearance → Themes.

### Development

1. Set up a WordPress instance, we recommend wp-env or Local as an alternative to docker. Alternatively you can use WordPress Playground to test the theme directly in the browser.
2. Clone / download this repository into your /wp-content/themes/ directory.

Also, consider enabling [development mode](https://make.wordpress.org/core/2023/07/14/configuring-development-mode-in-6-3/) with define( 'WP_DEVELOPMENT_MODE', 'theme' ); in your wp-config.php. This will help minimize caching of theme.json while you're developing.

## Contributing

Contributions are welcome. Please open an issue or a pull request with a clear description of the change and any testing steps.

## License

This project includes a `LICENSE` file. See [LICENSE](LICENSE) for details.
