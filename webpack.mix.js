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

mix.js(['resources/js/app.js', 'resources/js/modernizr-custom.js'], 'public/js')
    .js('resources/js/admin.js', 'public/js')
    .sass('resources/sass/common.scss', 'public/css')
    .sass('resources/sass/studio.scss', 'public/css')
    .sass('resources/sass/compo.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .copyDirectory('resources/images/common', 'public/images/common');

mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js');

mix.browserSync({
    proxy: 'localhost:8000'
});

if (mix.inProduction()) {
    mix.version();
    // mix.options({
    //     purifyCss: {
    //         purifyOptions: {
    //             whitelist: [
    //                 "is-animating", "webp", "no-webp", "small", "large", "dark-red", "dark-grey", "diagonalsvg", "#studio", "#compo", "w3-row",
    //                 "w3-center", "w3-col", "w3-block", "w3-display-container", "w3-display-left", "*hide*"
    //             ]
    //         }
    //     }
    // });
}

mix.disableNotifications();
