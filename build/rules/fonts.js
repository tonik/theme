const config = require('../app.config')

module.exports = {
    test: /\.(eot|ttf|woff|woff2)$/,
    include: config.paths.assets,
    loader: 'file-loader',
    options: {
        name: config.outputs.font.filename,
    }
}