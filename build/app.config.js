const path = require('path')
const merge = require('webpack-merge')

const config = require('../config/app')

module.exports = merge({
    paths: {
        root: path.resolve(__dirname, '../'),
        public: path.resolve(__dirname, '../public'),
        assets: path.resolve(__dirname, '../resources/assets')
    },

    assets: [],

    outputs: {
        stylesheet: {
            filename: 'css/[name].css'
        },

        javascript: {
            filename: 'js/[name].js'
        },

        image: {
            filename: 'images/[name].[ext]'
        },

        font: {
            filename: 'fonts/[name].[ext]'
        }
    },

    externals: {
        jquery: 'jQuery'
    },

    features: {
        sourceMaps: true
    }
}, config)