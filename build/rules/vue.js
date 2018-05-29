const autoprefixer = require('autoprefixer')

const config = require('../app.config')

/**
 * Internal application Vue files. Supports `.vue` component format.
 * Rule is configured for `<style lang="sass/scss">` styles section.
 */
module.exports = {
  test: /\.vue$/,
  loader: 'vue-loader',
  options: {
    loaders: {
      scss: 'vue-style-loader!css-loader!sass-loader',
      sass: 'vue-style-loader!css-loader!sass-loader?indentedSyntax'
    },
    postcss: [
      autoprefixer(config.settings.autoprefixer)
    ],
    autoprefixer: false
  }
}
