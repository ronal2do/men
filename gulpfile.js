var elixir = require('laravel-elixir');

elixir(function(mix) {
    
    var npmDir = 'node_modules/',
      	bowerDir = 'bower_components/',
    	jsDir = 'resources/assets/js/',
    	cssDir = 'resources/assets/css/';

    mix.scripts([
    	'galeria/jquery.poptrox.min.js',
		'galeria/skel.min.js',
		'galeria/util.js',
		'galeria/main.js'
    	],'public/assets/js/Galeria.js');
	mix.scripts([
		'jquery.min.js',
		'jquery.scrollex.min.js',
		'jquery.scrolly.min.js',
		'skel.min.js',
		'util.js',
		'main.js'
	], 'public/assets/js/app.js');

});