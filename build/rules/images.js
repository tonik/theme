const config = require('../app.config')

module.exports = {
    test: /\.(png|jpe?g|gif|svg)$/,
    include: config.paths.images,
    loader: 'file-loader',
    options: {
        publicPath: config.paths.relative,
        name: config.outputs.image.filename,
        emitFile: false,
        limit: 10000
    }
}