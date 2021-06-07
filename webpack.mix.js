const mix = require( 'laravel-mix' );
const MixGlob = require( 'laravel-mix-glob' );
const del = require( 'del' );
const env = process.env.NODE_ENV || 'dev';

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


/**
 * How assets should be handled
 *
 * app.scss | views/components/*.scss | views/sections/*.scss -> public/app.css
 *
 * views/pages/**|*.scss -> public/pages/[page-name].css
 *
 * -> public/vendor.css
 */

const mixGlob = new MixGlob( { mix } );

mixGlob
    .js( 'resources/views/{sections,components}/**/*.js', 'public/js/combine' )
    .sass( 'resources/views/{sections,components}/**/*.scss', 'public/css/combine' );

mix
    .browserSync( 'localhost:8000' )
    .disableNotifications()
    .extract( 'public/js/vendor.js' )
    .js( 'resources/js/app.js', 'public/js' )
    .postCss( 'resources/css/app.css', 'public/css' )
    .postCss( 'resources/css/vendor.css', 'public/css', [
        require( 'tailwindcss' ),
    ] )
    .sass( 'resources/sass/app.scss', 'public/css/combine' )
    .sass( 'resources/sass/vendor.scss', 'public/css' )
    // combine app.css with {components,sections}/styles.css
    .styles( 'public/css/combine/*', 'public/css/app.css' )
    // combine app.js with with {components,sections}/script.index
    .scripts( ['public/js/app.js', 'public/js/combine/*'], 'public/js/app.js' )
    .then( () => {

        if (env === 'production') {

            del( 'public/js/combine' );
            del( 'public/css/combine' );

        }

    } );
