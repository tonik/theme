const config = require('../app.config')

module.exports = {
    test: /\.(eot|woff|woff2|ttf|svg)(\?\S*)?$/,
    include: config.paths.external,
    loader: 'file-loader',
    options: {
        publicPath: config.paths.relative,
        name: config.outputs.font.filename
    }
}