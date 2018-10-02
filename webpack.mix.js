let { mix } = require('laravel-mix')

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
    .setPublicPath('public')
    .postCss('resources/assets/css/app.css', 'public/css', [
        require('postcss-import')(),
        require('postcss-nested')(),
        require('tailwindcss')('./resources/assets/tailwind.js'),
    ])
    .js('resources/assets/js/bootstrap.js', 'public/js')
    .js('resources/assets/js/app.js', 'public/js')
    .extract(['vue', 'vuex'])
    .sourceMaps()

    // Development
    .copy('public', '../../public/vendor/outline')

    .version()
