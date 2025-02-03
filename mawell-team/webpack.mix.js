// webpack.mix.js

let mix = require('laravel-mix');

mix
    .js('assets/src/js/gallery.js', 'assets/dist/js/gallery.js')
    .js('assets/src/js/admin.js','assets/dist/js/admin.js')
    .js('assets/src/js/auth.js','assets/dist/js/auth.js')
    .js('assets/src/js/glightbox.js','assets/dist/js/glightbox.js')
    .js('assets/src/js/head.js','assets/dist/js/head.js')
    .js('assets/src/js/swiper.js','assets/dist/js/swiper.js')
    .js('assets/src/js/theme.js','assets/dist/js/theme.js')

