const dotenv = require('dotenv').config()

module.exports = {
  assets: {
    app: [
      "./resources/assets/js/app.js",
      "./resources/assets/sass/app.scss"
    ]
  },

  settings: {
    browserSync: {
      host: process.env.BROWSERSYNC_HOST,
      port: process.env.BROWSERSYNC_PORT,
      proxy: process.env.BROWSERSYNC_PROXY
    }
  }
}
