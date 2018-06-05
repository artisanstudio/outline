let tailwind = require('tailwindcss')
let { mix }  = require('laravel-mix')

require('laravel-mix-purgecss')

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

mix.options({
    processCssUrls: false,
    postCss: [
        tailwind('./resources/assets/admin/tailwind.js'),
    ],
}).sass('resources/assets/admin/sass/primer.scss',  'public/css')
  .js('resources/assets/admin/js/primer.js', 'public/js')
  .extract(['vue', 'axios'])
