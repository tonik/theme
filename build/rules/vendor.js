const isdev = require('isdev')

const config = require('../app.config')

module.exports = {
    test: /\.(eot|woff|woff2|ttf|png|jpe?g|gif|svg)(\?\S*)?$/,
    include: /node_modules|bower_components/,
    use: [
        {
            loader: 'file-loader',
            options: {
                publicPath: '../',
                name: config.outputs.vendor.filename
            }
        }
    ]
}