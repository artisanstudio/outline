let tailwind = require('tailwindcss')
let { mix }  = require('laravel-mix')

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

mix
    .options({
        processCssUrls: false,
        postCss: [
            tailwind('./resources/assets/tailwind.js'),
        ],
    })
    .setPublicPath('public')
    .sass('resources/assets/sass/app.scss',  'public/css')
    .js('resources/assets/js/bootstrap.js', 'public/js')
    .js('resources/assets/js/app.js', 'public/js')
    .extract(['vue'])
    .sourceMaps()

    // Development
    .copy('public', '../canvas/public/vendor/outline')

    .version()
