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

mix.js('resources/js/*.js', 'public/js')
	.js('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js')
	.styles([
		'node_modules/bootstrap/dist/css/bootstrap.min.css',
		'resources/css/*.min.css',
		'resources/css/*.css',
	], 'public/css/all.min.css')
	.copyDirectory('node_modules/font-awesome/fonts', 'public/fonts')
	.copyDirectory('node_modules/bootstrap/fonts', 'public/fonts');
