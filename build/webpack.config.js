const path = require('path')
const isdev = require('isdev')
const webpack = require('webpack')
const autoprefixer = require('autoprefixer')

const CleanWebpackPlugin = require('clean-webpack-plugin')
const ExtractTextPlugin = require("extract-text-webpack-plugin")

const sassRule = require('./rules/sass')
const fontsRule = require('./rules/fonts')
const imagesRule = require('./rules/images')
const javascriptRule = require('./rules/javascript')

const config = require('./app.config')

module.exports = {
    devtool: (isdev && config.features.sourceMaps) ? 'source-map' : undefined,

    entry: config.assets,

    output: {
        path: config.paths.public,
        filename: config.outputs.javascript.filename
    },

    externals: config.externals,

    module: {
        rules: [
            sassRule,
            javascriptRule,
            imagesRule,
            fontsRule
        ]
    },

    plugins: [
        new webpack.LoaderOptionsPlugin({
            minimize: !isdev,
        }),

        new ExtractTextPlugin(config.outputs.stylesheet),

        new CleanWebpackPlugin(config.paths.public, {
            root: config.paths.root
        })
    ]
}

if (! isdev) {
    module.exports.plugins.push(
        new webpack.optimize.UglifyJsPlugin({
            comments: isdev,
            compress: {
                warnings: false
            },
            sourceMap: isdev
        })
    )
}