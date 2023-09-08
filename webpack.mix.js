const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
<<<<<<< HEAD
    .sass('resources/sass/items.scss', 'public/css')
=======
    .sass('resources/sass/login.scss', 'public/css')
    .sass('resources/sass/login-forget.scss', 'public/css')
>>>>>>> 4065789710be5f31fee6263fb70abccac3593448
    .sass('resources/sass/register.scss', 'public/css')
    .sourceMaps();

    mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/styles.scss', 'public/css')
    .sourceMaps();
