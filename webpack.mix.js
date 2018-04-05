let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css').version();

mix.styles(['node_modules/tui-grid/dist/tui-grid.css'],'public/css/tui-grid.css');
mix.styles(['node_modules/tui-pagination/dist/tui-pagination.css'],'public/css/tui-pagination.css');
