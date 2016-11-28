# Theme Installation and Usage

You should be familiar with command line to efficiently install this theme. Required is also a knowledge about [Composer](https://getcomposer.org) and other modern web development tools and workflows.

## Requirements

This theme follow WordPress [recommended requirments](https://wordpress.org/about/requirements). Your server must fulfill requirements:

- At least PHP >= 5.6 (PHP >= 7.0 is recommended)
- WordPress 4.4

## Bootstraping Theme

Download or clone theme repository to the `wp-content/themes` directory.

```bash
# @ /wp-content/themes
# Clone repository to the themes folder.
$ git clone git@github.com:<repository>/<theme-name>.git <theme-name>
```

Go into theme directory and resolve Composer dependeces and generate autoloading file.

```bash
# @ /wp-content/themes
# Change directory to the cloned folder.
$ cd <theme-name>

# @ /wp-content/themes/<theme-name>
# Install required composer dependences (without these needed only to development).
$ composer install -o --no-devs
```

## Required Plugins

Here is list of theme's required plugins. They can be installed via "Plugins" dashboard or manualy uploaded to the `wp-content/plugins` directory.

- plugin-name ([plugin-url](#plugin-url))
- ...
