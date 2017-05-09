const config = require('../app.config')

module.exports = {
    test: /\.js$/,
    include: config.paths.javascript,
    loader: 'babel-loader'
}