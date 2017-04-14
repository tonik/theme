const webpack = require('webpack')

if (! isdev) {
    module.exports.plugins.push(
        new webpack.optimize.UglifyJsPlugin()
    )
}