const mix = require( 'laravel-mix' );
const sassGlobImporter = require( 'node-sass-glob-importer' );
const glob = require( 'glob' );

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

mix
    .browserSync( `${ process.env.APP_URL }:8000` )
    .disableSuccessNotifications()
    .extract( 'public/js/vendor.js' )
    .js( 'resources/views/{sections,components}/**/*.js', 'public/js/app.js' )
    .js( 'resources/js/app.js', 'public/js/app.js' )
    .postCss( 'resources/css/app.css', 'public/css' )
    .postCss( 'resources/css/vendor.css', 'public/css', [
        require( 'tailwindcss' ),
    ] )
    .sass( 'resources/sass/app.scss', 'public/css/app.css', {
        sassOptions: {
            importer: sassGlobImporter(),
        }
    } )
    .sass( 'resources/sass/vendor.scss', 'public/css' );


const pagesFolders = glob.sync( 'resources/views/pages/*' )

for (const pageFolder of pagesFolders) {

    const pageName = pageFolder.split( '/' ).pop();
    const pageScriptsFiles = glob.sync( `${ pageFolder }/**/*.js` )
    pageScriptsFiles.length && mix.js( `${ pageFolder }/**/*.js`, `public/js/pages/${ pageName }.js` )

}
