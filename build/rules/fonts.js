module.exports = {
    test: /\.(eot|ttf|woff|woff2)$/,
    loader: 'file-loader',
    options: {
        name: `fonts/[name].[ext]`,
    }
}