const config = require('../app.config')

module.exports = {
    test: /\.js$/,
    include: config.paths.assets,
    loader: ['babel-loader']
}