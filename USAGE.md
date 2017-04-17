# Theme Installation and Usage

You should be familiar with the command line to efficiently install this theme. Required is also a knowledge about [Composer](https://getcomposer.org) and [NPM](https://www.npmjs.com/) package managers.

## Requirements

This theme follow WordPress [recommended requirments](https://wordpress.org/about/requirements). Your server must fulfill requirements:

- At least PHP >= 5.6 (PHP >= 7.0 is recommended)
- WordPress 4.4

## Bootstrapping Theme

Download or clone theme repository to the `wp-content/themes` directory.

```bash
# @ /wp-content/themes
# Clone repository to the themes folder.
$ git clone git@github.com:<repository>/<theme-name>.git <theme-name>
```

Go into theme directory and run following commands to resolve dependencies and build a theme.

```bash
# @ /wp-content/themes
# Change directory to the cloned folder.
$ cd <theme-name>

# @ /wp-content/themes/<theme-name>
# Install required composer dependences (without these needed only to development).
$ composer install -o --no-devs

# @ /wp-content/themes/<theme-name>
# Install required npm dependences for building a theme.
$ npm install

# @ /wp-content/themes/<theme-name>
# Build theme assets for production.
$ npm run prod
```

## Required Plugins

Here is a list of theme's required and recommended plugins. They can be installed via "Plugins" dashboard or manually uploaded to the `wp-content/plugins` directory.

- plugin-name ([plugin-url](#plugin-url))
- ...

Familiar with WP-CLI? Install plugins via command line:

```
wp plugin install plugin-name --activate
```