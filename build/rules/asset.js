const isdev = require('isdev')

const config = require('../app.config')

module.exports = {
    test: /\.(eot|woff2?|ttf|png|jpe?g|gif|svg)?$/,
    include: config.paths.assets,
    use: [
        {
            loader: 'file-loader',
            options: {
                emitFile: false
            }
        }
    ]
}