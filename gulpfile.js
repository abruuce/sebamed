var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

/*
elixir(function(mix) {
    mix.less('app.less');
});
*/

elixir(function (mix) {
    mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css')
        .copy('node_modules/bootstrap/dist/css/bootstrap-theme.min.css', 'public/css')
        .copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js')
        .copy('node_modules/jquery/dist/jquery.min.js', 'public/js');
})
