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
   .sass('resources/sass/validation/validation.scss', 'public/css/validation')
   .js('resources/js/misc/tool.js', 'public/js/misc/')
   .js('resources/js/validaciones/validacionTanque.js', 'public/js/validaciones/')
   .js('resources/js/validaciones/validacionRegistro.js', 'public/js/validaciones/');



if (mix.inProduction()) 
{
   mix.version();
}
