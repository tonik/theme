# Tonik — WordPress Starter Theme

[![Build Status](https://travis-ci.org/tonik/tonik.svg?branch=master)](https://travis-ci.org/tonik/tonik)

### Tonik is a WordPress Starter Theme which aims to modernize, organize and enhance some aspects of WordPress theme development.

Take a look at what is waiting for you:

- [ES6](https://babeljs.io/learn-es2015/) for JavaScript
- [SASS](http://sass-lang.com/) and [Foundation CSS Framework](http://foundation.zurb.com/sites/docs/)
- [Webpack](https://webpack.js.org/) for managing, compiling and optimizing theme asset files
- Utilizes PHP [Namespaces](http://php.net/manual/pl/language.namespaces.php)
- Simple [Theme Service Container](http://symfony.com/doc/2.0/glossary.html#term-service-container)
- Child Theme friendly [Autoloader](https://en.wikipedia.org/wiki/Autoload)
- Readable and centralized Theme Configs
- Oriented for building with [Actions](https://codex.wordpress.org/Glossary#Action) and [Filters](https://codex.wordpress.org/Glossary#Filter)
- Enhanced [Templating](https://en.wikibooks.org/wiki/PHP_Programming/Why_Templating) with support for passing data

## Requirements

Make sure you have all these dependences installed before moving on:

- WordPress >= 4.7
- PHP >= 5.6
- [Composer](https://getcomposer.org)
- [Node.js](https://nodejs.org)

# Installation

## Creating new Theme

Create project via `composer create-project` composer command.

```bash
$ composer create-project tonik/tonik <theme-name>
```

You can also directly download or clone the repository to the `wp-content/themes` directory.

```bash
# Clone repository to the <theme-name> folder.
$ git clone git@github.com:tonik/tonik.git <theme-name>
```

## Resolving Dependences

Install back-end dependencies and generate an autoloading file.

```bash
# Install composer dependencies.
$ composer install -o
```

Install frontend dependencies and task runner.

```bash
# Install node dependencies.
$ npm install
```

# Development

## Initializing a Theme

Starter comes with simple CLI and `tonik` command, which allows you to easily fill theme details and information like name, description and project namespace. Simply call `vendor/bin/tonik` command in the theme root directory. A setup wizard will guide you through the entire process.

```bash
# Run setup wizard.
$ vendor/bin/tonik
```

## Building a Theme

Theme uses [Webpack](https://webpack.js.org/) to compile and optimize its scripts, stylesheets and assets.

```bash
# Build theme for development.
$ npm run dev

# Build theme for production.
$ npm run prod

# Watch for file changes, rebuild theme and refresh the browser.
$ npm run watch
```

## Folders and Files Structure

This starter theme introduces "easy to follow" folder structure, which enforces to divide your theme logic into separate files.

```
themes                              # — Root of your theme
    ├── app/                        # — Theme application logic
    │   ├── Http/                   # — Http layer of theme
    │   │   ├── ajaxes.php          # — Theme ajaxes endpoints
    │   │   ├── assets.php          # — Theme styles and scripts loading
    │   ├── Setup/                  # — Setups for theme
    │   │   ├── actions.php         # — Theme action hooks
    │   │   ├── filters.php         # — Theme filter hooks
    │   │   ├── navs.php            # — Theme navigation areas
    │   │   ├── shortcodes.php      # — Theme shortcodes
    │   │   ├── sidebars.php        # — Theme widgets areas
    │   │   ├── supports.php        # — Theme supports
    │   │   ├── thumbnails.php      # — Theme custom image sizes
    │   │   ├── widgets.php         # — Theme custom widgets
    │   ├── Structure/              # — Structures for theme
    │   │   ├── posttypes.php       # — Theme custom post types
    │   │   ├── taxonomies.php      # — Theme custom taxonomies
    │   ├── helpers.php             # — Collection of helper functions
    ├── build/                      # — Webpack configuration and instruction files
    ├── bootstrap/                  # — Files responsible for bootstrapping a theme
    │   ├── compatibility.php       # — Theme compatibility checker (don't edit)
    │   ├── theme.php               # — Theme bootstraper script (don't edit)
    ├── config/                     # — Configuration files
    │   ├── app.json                # — Theme assets manifest file
    │   ├── app.php                 # — Theme configuration file
    ├── public/                     # — Front-end compiled/builded assets (don't edit)
    ├── resources/                  # — Resources files
    │   ├── assets                  # — Front-end source assets
    │   │   ├── js                  # — Theme JavaScript files
    │   │   ├── sass                # — Theme Stylesheets files
    │   │   ├── images              # — Theme images
    │   │   ├── fonts               # — Theme fonts
    │   ├── languages               # — Theme translations
    │   ├── templates               # — Theme templates
    ├── 404.php                     # — 404 page controller
    ├── composer.json               # — PHP dependences and PSR-4 Autoloading
    ├── footer.php                  # — Footer partial template
    ├── functions.php               # — Bootstrapping the theme. Initiates Autoloader and Composer (don't edit)
    ├── header.php                  # — Header partial template
    ├── index.php                   # — Index page controller
    ├── package.json                # — NPM dependencies and scripts
    ├── screenshot.png              # — Theme screenshot image
    ├── style.css                   # — Theme details information (don't write any CSS declarations in here)
```

## USAGE.md Boilerplate

[USAGE.md](https://github.com/tonik/tonik/blob/master/USAGE.md) provides "How to use" guide for themes created with this starter. Remember to properly fill this file before finalizing the project. Your clients will be grateful.