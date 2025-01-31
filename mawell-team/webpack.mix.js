// webpack.mix.js

let mix = require('laravel-mix');

mix
    .js(['assets/src/js/main.js', 'assets/src/js/gallery.js', 'assets/src/js/glightbox.js', 'assets/src/js/head.js', 'assets/src/js/swiper.js', 'assets/src/js/theme.js'], 'assets/dist/js/')
    .js([ 'assets/src/dashboard/dashboard-src.js'], 'assets/dashboard/dashboard.js')

