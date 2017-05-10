const config = require('../app.config')

/**
 * Internal application javascript files.
 * Supports ES6 by compiling scripts with Babel.
 */
module.exports = {
    test: /\.js$/,
    include: config.paths.javascript,
    loader: 'babel-loader'
}