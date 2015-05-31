var elixir = require('laravel-elixir');

elixir.config.assetsDir = 'assets/';
elixir.config.sourcemaps = false;

/* Elixir asset management
|  Docs: http://laravel.com/docs/master/elixir
---------------------------------------------------------*/

elixir(function(mix) {
    mix
        .sass('site.scss')
        .scripts(null, 'public/js/site.js')
        .version(['css/site.css', 'js/site.js']);
    ;
});
