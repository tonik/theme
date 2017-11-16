const config = require('../app.config')

/**
 * External dependencies font files. This rule allows for emiting
 * font assets of external libraries to the application.
 */
module.exports = {
  test: /\.(eot|woff|woff2|ttf|svg)(\?\S*)?$/,
  include: config.paths.external,
  loader: 'file-loader',
  options: {
    context: config.paths.fonts,
    publicPath: config.paths.relative,
    name: config.outputs.external.font.filename
  }
}
