const path = require('path')
const merge = require('webpack-merge')

const config = require('../config/app')

module.exports = merge({
    /**
     * Project paths.
     *
     * @type {Object}
     */
    paths: {
        root: path.resolve(__dirname, '../'),
        public: path.resolve(__dirname, '../public'),
        assets: path.resolve(__dirname, '../resources/assets')
    },

    /**
     * Collection of application front-end assets.
     *
     * @type {Array}
     */
    assets: [],

    /**
     * List of filename schemas for different
     * application assets.
     *
     * @type {Object}
     */
    outputs: {
        stylesheet: { filename: 'css/[name].css' },
        javascript: { filename: 'js/[name].js' },
        image: { filename: 'images/[name].[ext]' },
        font: { filename: 'fonts/[name].[ext]' }
    },

    /**
     * List of libraries which will be provided
     * within application scripts as external.
     *
     * @type {Object}
     */
    externals: {
        jquery: 'jQuery',
    },

    /**
     * Settings of other build features.
     *
     * @type {Object}
     */
    settings: {
        sourceMaps: true,
        styleLint: true,
        browserSync: {
            host: 'localhost',
            port: 3000,
            proxy: 'http://localhost:8080/'
        }
    }
}, config)