const config = require('../app.config')

/**
 * Internal application font files. Rule test regrex additionaly
 * matches fonts with version string at the end of filenames.
 */
module.exports = {
  test: /\.(eot|ttf|woff|woff2|svg)(\?\S*)?$/,
  include: config.paths.fonts,
  type: 'asset/resource',
  options: {
    publicPath: config.paths.relative,
    name: config.outputs.font.filename,
  }
}
