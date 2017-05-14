const {mix} = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
], 'public/js/core.common.js')
    .styles([
        'bower_components/swiper/dist/js/swiper.min.js',
        'bower_components/nivo-slider/jquery.nivo.slider.pack.js',
    ], 'public/js/core.frontend.js')
    .styles([
        // 'bower_components/dropzone/dist/min/dropzone.min.js',
        'bower_components/bootstrap-fileinput/js/plugins/sortable.min.js',
        'bower_components/bootstrap-fileinput/js/plugins/purify.min.js',
        'bower_components/bootstrap-fileinput/js/fileinput.js'
    ], 'public/js/core.backend.js')
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
    ], 'public/css/app.common.css')
    .styles([
        'bower_components/swiper/dist/css/swiper.min.css',
        'bower_components/nivo-slider/nivo-slider.css'
    ], 'public/css/app.frontend.css')
    .styles([
        // 'bower_components/dropzone/dist/min/dropzone.min.css',
        'bower_components/bootstrap-fileinput/css/fileinput.min.css',
    ], 'public/css/app.backend.css')
    .styles([
        'resources/assets/js/libs-min.js',
        'resources/assets/js/application.js',
        'resources/assets/js/scripts.frontend.js'
    ], 'public/js/scripts.js')
    .styles([
        'resources/assets/js/login.js'
    ], 'public/js/login.js')
    .sass('resources/assets/sass/frontend.scss', 'public/css').options({processCssUrls: false})
    .sass('resources/assets/sass/backend.scss', 'public/css').options({processCssUrls: false})
    .sass('resources/assets/sass/login.scss', 'public/css').options({processCssUrls: false})
    .copy(
        'bower_components/AdminLTE/dist/css/AdminLTE.min.css', 'public/css/AdminLTE.min.css', false)
    .copy(
        'bower_components/AdminLTE/dist/css/skins/skin-blue.min.css', 'public/css/skin-blue.min.css', false)
    .copy('bower_components/AdminLTE/dist/js/app.min.js', 'public/js')
    .copy('bower_components/bootstrap/fonts/', 'public/fonts', false)
    .copy('bower_components/font-awesome/fonts/', 'public/fonts', false)
    .styles([
        'resources/assets/js/be.diadiem.js',
        'resources/assets/js/be.dichvu.js',
        'resources/assets/js/be.album.js',
        'resources/assets/js/be.slider.js',
    ], 'public/js/backend.js')



