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
    .sourceMaps();

mix.scripts("resources/js/jquery-3.6.1.js*", "public/js/jquery-3.6.1.js");
// mix.scripts("resources/js/datatables.js*", "public/js/datatables.js");
mix.scripts("resources/js/custom.js*", "public/js/custom.js");

mix.scripts("resources/css/jquery.dataTables.css", "public/css/jquery.dataTables.css")
