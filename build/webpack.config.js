const path = require('path')
const isdev = require('isdev')
const webpack = require('webpack')
const autoprefixer = require('autoprefixer')

const ExtractTextPlugin = require("extract-text-webpack-plugin")

const sassRule = require('./rules/sass')
const javascriptRule = require('./rules/javascript')

const config = require('../config/app')

module.exports = {
    devtool: 'source-map',

    entry: config.assets,

    output: {
        path: path.resolve(__dirname, '../public'),
        filename: 'js/[name].js'
    },

    module: {
        rules: [
            sassRule,
            javascriptRule
        ]
    },

    plugins: [
        new webpack.LoaderOptionsPlugin({
            minimize: !isdev,
        }),

        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery'
        }),

        new ExtractTextPlugin({
            filename: 'css/[name].css'
        })
    ]
}