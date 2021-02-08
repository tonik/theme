const config = require('../app.config')

/**
 * Internal application javascript files.
 * Supports ES6 by compiling scripts with Babel.
 */
module.exports = {
  test: /\.js$/,
  exclude: /node_modules/,
  loader: 'babel-loader',
  options: {
    presets: ['@babel/preset-env'],
  },
}
