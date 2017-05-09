const config = require('../app.config')

module.exports = {
    test: /\.(png|jpe?g|gif|svg)$/,
    include: config.paths.external,
    loader: 'file-loader',
    options: {
        publicPath: config.paths.relative,
        name: config.outputs.font.filename
    }
}