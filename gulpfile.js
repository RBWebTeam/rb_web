var elixir = require('laravel-elixir');

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
        
		'../../../public/css/animate.css',
		'../../../public/css/icomoon.css',
		'../../../public/css/bootstrap.css',
		'../../../public/css/flexslider.css',
		'../../../public/css/owl.carousel.min.css',
		'../../../public/css/owl.theme.default.min.css',
		'../../../public/css/style.css',
		'../../../public/css/chatbox.css',
		'../../../public/fonts/Raleway.css'

		
    ], 'public/css/mysite.css');
});

// '../../../public/css/bootstrap.min.css',
// 		'../../../public/css/component.css',
// 		'../../../public/css/font-awesome.min.css',
// 		'../../../public/css/style-home-loan.css',
// 		'../../../public/css/responsive-home-loan.css',
// 		'../../../public/css/bootstrap-material-datetimepicker.css',
// '../../../public/css/autocomp.css',
// 		'../../../public/css/font-awesome.min.css'
