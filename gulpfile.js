var elixir = require('laravel-elixir');

elixir(function(mix) {
    
    var npmDir = 'node_modules/',
      	bowerDir = 'bower_components/',
    	jsDir = 'resources/assets/js/',
    	cssDir = 'resources/assets/css/';

    mix.copy(npmDir + 'instafeed.js/instafeed.min.js', jsDir);

	mix.scripts([
		'instafeed.min.js',
		'app.js'
	], 'public/assets/js/app.js');

});