const isdev = require('isdev')
const autoprefixer = require('autoprefixer')

const MiniCssExtractPlugin = require('mini-css-extract-plugin');

const config = require('../app.config')

/**
 * Internal application SASS files.
 * Have build-in autoprefixing.
 */
module.exports = {
  test: /\.s[ac]ss$/,
  include: config.paths.sass,
  use: [
    MiniCssExtractPlugin.loader,
    {
      loader: 'css-loader',
      options: {
        sourceMap: isdev
      }
    },

    {
      loader: 'postcss-loader',
      options: {
        sourceMap: true,
        postcssOptions: {
          plugins: [
            [
              "autoprefixer",
              config.settings.autoprefixer
            ],
          ],
        },
      }
    },

    {
      loader: 'sass-loader',
      options: {
        sourceMap: true
      }
    }
  ],
}
