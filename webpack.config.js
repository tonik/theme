const path = require('path')
const webpack = require('webpack')

module.exports = {
    entry: {
        app: [
            './resources/assets/js/app.js',
        ],
        foundation: [
            './resources/assets/js/foundation.js',
        ]
    },
    output: {
        path: path.resolve(__dirname, './public/js'),
        filename: '[name].js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: "babel-loader"
            }
        ]
    }
}