const config = require('../app.config')

/**
 * External dependencies image files. This rule allows for emiting
 * image assets of external libraries to the application.
 */
module.exports = {
  test: /\.(png|jpe?g|gif|svg)$/,
  include: config.paths.external,
  type: 'asset/resource',
  generator: {
    filename: config.outputs.external.image.filename,
  },
}
