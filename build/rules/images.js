const config = require('../app.config')

/**
 * Internal application image files. This rule exceptionally don't emit its files,
 * because they are handled by copy and image-minify webpack plugins.
 */
module.exports = {
  test: /\.(png|jpe?g|gif|svg)$/,
  include: config.paths.images,
  type: 'asset/resource',
  generator: {
    filename: config.outputs.image.filename,
  },
}
