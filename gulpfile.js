const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss')
       .version(['public/css/app.css'])
       .webpack('app.js')
       .webpack('main.js');

    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/fonts/bootstrap');
    mix.copy('resources/assets/fonts','public/fonts');
    mix.copy('resources/assets/sass/plugins/', 'public/build/css/plugins');
    mix.copy('resources/assets/sass/font-awesome.min.css', 'public/build/css');
    mix.copy('resources/assets/sass/responsive.css', 'public/build/css');
    mix.copy('resources/assets/sass/montserrat.css', 'public/build/css');
    mix.copy('resources/assets/sass/style-customizer.css', 'public/build/css');
    mix.copy('resources/assets/sass/nivo-slider.css', 'public/build/css');
    mix.copy('resources/assets/sass/bootstrap.min.css', 'public/build/css');
    mix.copy('resources/assets/sass/style.css', 'public/build/css');
    mix.copy('resources/assets/sass/shortcode', 'public/build/css/shortcode');
    mix.copy('resources/assets/images/', 'public/images');
});
