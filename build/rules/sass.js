const isdev = require('isdev')
const autoprefixer = require('autoprefixer')

const ExtractTextPlugin = require("extract-text-webpack-plugin")

const config = require('../app.config')

/**
 * Internal application SASS files.
 * Have build-in autoprefixing.
 */
module.exports = {
  test: /\.s[ac]ss$/,
  include: config.paths.sass,
  loader: ExtractTextPlugin.extract({
    use: [
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
          plugins: () => [
            autoprefixer(config.settings.autoprefixer)
          ]
        }
      },

      {
        loader: 'sass-loader',
        options: {
          sourceMap: true
        }
      }
    ],
    fallback: 'style-loader'
  })
}
