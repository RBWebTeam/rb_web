var elixir = require('laravel-elixir');, 

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// elixir(mix => {
//     mix.sass('app.scss')
//        .webpack('app.js');
// });

elixir(function(mix) {
	    mix.styles([
	    '../../../public/css/front_bootstrap.css',
	    '../../../public/css/helper_styles.css',
	    '../../../public/css/bootstrap.drawer.css',
	]);
	    // mix.imagemin("../../../public/images", "../../../public/images1");
});

elixir(function(mix) {
    mix.styles([
        '../../../style.old.css',
        '../../../style-home-loan.css'
    ], 'public/css/mysite.css');
});
