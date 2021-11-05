const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
/*
 mix.js('resources/js/bootstrap.js', 'public/js/bootstrap.js');
*/
mix.js('resources/js/main.js', 'public/js');

// mix.postCss('resources/css/app.css', 'public/css', [
//    require('tailwindcss'),
//  ])
 mix.postCss('resources/css/components.css', 'public/css', [
   require('tailwindcss'),
 ]);

// mix.js('resources/js/app1.js', 'public/js/app.js')
//    .js('resources/js/app2.js', 'public/js/app.js');

// mix.sass('resources/sass/app1.scss', 'public/css/app.css')
// .sass('resources/sass/app2.scss', 'public/css/app.css')
// .sass('resources/sass/app.scss', 'public/css/app.css');



