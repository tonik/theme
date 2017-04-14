const isdev = require('isdev')
const autoprefixer = require('autoprefixer')

const ExtractTextPlugin = require("extract-text-webpack-plugin")

module.exports = {
    test: /\.s[ac]ss$/,

    loader: ExtractTextPlugin.extract({
        use: [
            {
                loader: 'css-loader',
                options: {
                    sourceMap: isdev
                }
            },

            {
                loader: 'postcss-loader',
                options: {
                    sourceMap: isdev,
                    plugins: () => [autoprefixer]
                }
            },

            {
                loader: 'sass-loader',
                options: {
                    sourceMap: isdev
                }
            }
        ],
        fallback: 'style-loader'
    })
}