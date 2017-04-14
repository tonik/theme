const IS_DEV = require('isdev')

module.exports = {
    test: /\.js$/,
    exclude: /node_modules/,
    loader: ['babel-loader']
}