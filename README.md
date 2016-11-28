# Introduction

## Requirements

Make sure you have all these dependences installed before moving on:

- PHP >= 5.6
- [Composer](https://getcomposer.org)
- [Node.js](https://nodejs.org)

# Installation

## Creating new Theme

Create project via `composer create-project` composer command.

```bash
$ composer create-project tonik/theme <theme-name>
```

You can also directly download or clone repository to the `wp-content/themes` directory.

```bash
# Clone repository to the <theme-name> folder.
$ git clone git@github.com:tonik/theme.git <theme-name>
```

## Resolving Dependences

Install backend dependeces and generate autoloading file.

```bash
# Install composer dependences.
$ composer install
```

Install frontend dependences and task runner.

```bash
# Install node dependences.
$ npm install
```

# Development

## Compiling Assets

Theme uses [Laravel Elixir](https://laravel.com/docs/5.3/elixir) to compile it's scripts and stylesheets. Files are generated to the `public` directory.

```bash
# Run compile tasks.
$ gulp

# Watch for file changes and rund compile tasks.
$ gulp watch

# Compile assets for production.
$ gulp --production
```

## Folders and Files Structure

This starter theme introduces "easy to follow" folder structure, which enforce to divide your theme logic into components.

```
theme
    ├── bootstrap/
    ├── config/
    │   ├── theme.php
    ├── public/
    │   ├── js
    │   ├── css
    │   ├── images
    │   ├── fonts
    ├── resources/
    │   ├── assets
    │   │   ├── js
    │   │   ├── sass
    │   ├── templates
    ├── src/
    │   ├── Http/
    │   │   ├── ajaxes.php
    │   │   ├── assets.php
    │   ├── Setup/
    │   │   ├── actions.php
    │   │   ├── filters.php
    │   │   ├── navs.php
    │   │   ├── shortcodes.php
    │   │   ├── sidebars.php
    │   │   ├── supports.php
    │   │   ├── widgets.php
    │   ├── Structure/
    │   │   ├── posttypes.php
    │   │   ├── taxonomies.php
    │   ├── helpers.php
    ├── 404.php
    ├── composer.json
    ├── footer.php
    ├── functions.php
    ├── gin
    ├── header.php
    ├── index.php
    ├── package.json
    ├── screenshot.png
    ├── style.css
```

## USAGE.md Boilerplate

[USAGE.md](https://github.com/tonik/theme/blob/master/USAGE.md) provides "How to use" guide for themes created with this starter. Remember to properly fill this file before finalising project. Your clients will be grateful.