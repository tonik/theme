const isdev = require('isdev')

module.exports = {
    test: /\.(png|jpe?g|gif|svg)$/,
    loader: 'file-loader',
    options: {
        useRelativePath: true,
        name: `[name].[ext]`
    }
}