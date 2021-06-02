const mix = require( 'laravel-mix' );

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

mix
    .browserSync( 'localhost:8000' )
    .disableNotifications()
    .extract()
    .js( 'resources/js/app.js', 'public/js' )
    .postCss( 'resources/css/app.css', 'public/css' )
    .postCss( 'resources/css/vendor.css', 'public/css', [
        require( 'tailwindcss' ),
    ] )
    .sass( 'resources/sass/app.scss', 'public/css' )
    .sass( 'resources/sass/vendor.scss', 'public/css' );
