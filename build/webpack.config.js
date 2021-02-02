process.traceDeprecation = true;

const path = require('path')
const isdev = require('isdev')
const webpack = require('webpack')
const autoprefixer = require('autoprefixer')

const ESLintPlugin = require('eslint-webpack-plugin')
const CopyPlugin = require('copy-webpack-plugin')
const CleanPlugin = require('clean-webpack-plugin')
const StyleLintPlugin = require('stylelint-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const ImageMinimizerPlugin = require('image-minimizer-webpack-plugin');

const vueRule = require('./rules/vue')
const sassRule = require('./rules/sass')
const fontsRule = require('./rules/fonts')
const imagesRule = require('./rules/images')
const javascriptRule = require('./rules/javascript')
const externalFontsRule = require('./rules/external.fonts')
const externalImagesRule = require('./rules/external.images')

const config = require('./app.config')

module.exports = {
  /**
   * Should the source map be generated?
   *
   * @type {string|undefined}
   */
  devtool: (isdev && config.settings.sourceMaps) ? 'source-map' : undefined,

  /**
   * Providing the mode configuration option tells webpack to use its built-in optimizations accordingly.
   *
   * @type {string|undefined}
   */
  mode: isdev ? 'development' : 'production',

  /**
   * Application entry files for building.
   *
   * @type {Object}
   */
  entry: config.assets,

  /**
   * Output settings for application scripts.
   *
   * @type {Object}
   */
  output: {
    path: config.paths.public,
    filename: config.outputs.javascript.filename
  },

  /**
   * External objects which should be accessible inside application scripts.
   *
   * @type {Object}
   */
  externals: config.externals,

  /**
   * Custom modules resolving settings.
   *
   * @type {Object}
   */
  resolve: config.resolve,

  /**
   * Performance settings to speed up build times.
   *
   * @type {Object}
   */
  performance: {
    hints: false
  },

  /**
   * Build rules to handle application assset files.
   *
   * @type {Object}
   */
  module: {
    rules: [
      vueRule,
      sassRule,
      fontsRule,
      imagesRule,
      javascriptRule,
      externalFontsRule,
      externalImagesRule,
    ]
  },

  /**
   * Common plugins which should run on every build.
   *
   * @type {Array}
   */
  plugins: [
    new ESLintPlugin(),
    new webpack.LoaderOptionsPlugin({ minimize: !isdev }),
    new MiniCssExtractPlugin(config.outputs.css),
    new CleanPlugin(config.paths.public, { root: config.paths.root }),
    new CopyPlugin({
      patterns: [
        {
          from: `${config.paths.images}/**/*`,
          to: config.outputs.image.filename,
        },
      ],
    }),
  ]
}

/**
 * Adds Stylelint plugin if
 * linting is configured.
 */
if (config.settings.styleLint) {
  module.exports.plugins.push(
    new StyleLintPlugin(config.settings.styleLint)
  )
}

/**
 * Adds BrowserSync plugin when
 * settings are configured.
 */
if (config.settings.browserSync) {
  module.exports.plugins.push(
    new BrowserSyncPlugin(config.settings.browserSync, {
      // Prevent BrowserSync from reloading the page
      // and let Webpack Dev Server take care of this.
      reload: false
    })
  )
}

/**
 * Adds optimalizing plugins when
 * generating production build.
 */
if (! isdev) {
  module.exports.plugins.push(
    new ImageMinimizerPlugin({
      minimizerOptions: {
        // Lossless optimization with custom option
        // Feel free to experiment with options for better result for you
        plugins: [
          ['gifsicle', { interlaced: true, optimizationLevel: 3 }],
          ['jpegtran', { progressive: true }],
          ['optipng', { optimizationLevel: 7 }],
          ['pngquant', { quality: '65-90', speed: 4 }],
          [
            'svgo',
            {
              plugins: [
                {
                  removeViewBox: false,
                  removeUnknownsAndDefaults: false,
                  cleanupIDs: false
                },
              ],
            },
          ],
        ],
      },
    }),
  )
}
