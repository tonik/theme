const path = require('path')
const isdev = require('isdev')
const webpack = require('webpack')
const autoprefixer = require('autoprefixer')

const CopyPlugin = require('copy-webpack-plugin')
const CleanPlugin = require('clean-webpack-plugin')
const StyleLintPlugin = require('stylelint-webpack-plugin')
const ExtractTextPlugin = require('extract-text-webpack-plugin')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const { default: ImageminPlugin } = require('imagemin-webpack-plugin')

const sassRule = require('./rules/sass')
const fontsRule = require('./rules/fonts')
const imagesRule = require('./rules/images')
const javascriptRule = require('./rules/javascript')
const externalFontsRule = require('./rules/external.fonts')
const externalImagesRule = require('./rules/external.images')

const config = require('./app.config')

module.exports = {
    devtool: (isdev && config.settings.sourceMaps) ? 'source-map' : undefined,

    entry: config.assets,

    output: {
        path: config.paths.public,
        filename: config.outputs.javascript.filename
    },

    externals: config.externals,

    performance: {
        hints: false
    },

    module: {
        rules: [
            sassRule,
            fontsRule,
            imagesRule,
            javascriptRule,
            externalFontsRule,
            externalImagesRule,
        ]
    },

    plugins: [
        new webpack.LoaderOptionsPlugin({ minimize: !isdev }),
        new ExtractTextPlugin(config.outputs.css),
        new CleanPlugin(config.paths.public, { root: config.paths.root }),
        new CopyPlugin([{
            from: {
                glob: `${config.paths.images}/**/*`,
                flatten: true,
                dot: false
            },
            to: config.outputs.image.filename,
        }]),
    ]
}

if (config.settings.styleLint) {
    module.exports.plugins.push(
        new StyleLintPlugin()
    )
}

if (config.settings.browserSync) {
    module.exports.plugins.push(
        new BrowserSyncPlugin(config.settings.browserSync)
    )
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

    module.exports.plugins.push(
        new ImageminPlugin({
            test: /\.(jpe?g|png|gif|svg)$/i,
            optipng: { optimizationLevel: 7 },
            gifsicle: { optimizationLevel: 3 },
            pngquant: { quality: '65-90', speed: 4 },
            svgo: { removeUnknownsAndDefaults: false, cleanupIDs: false }
        })
    )
}