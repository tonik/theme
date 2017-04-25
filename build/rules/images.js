const isdev = require('isdev')

const config = require('../app.config')

module.exports = {
    test: /\.(png|jpe?g|gif|svg)$/,
    include: config.paths.assets,
    use: [
        {
            loader: 'file-loader',
            options: {
                publicPath: '../',
                name: config.outputs.image.filename
            }
        },

        {
            loader: 'img-loader',
            options: {
                enabled: !isdev
            }
        }
    ]
}