var elixir = require('laravel-elixir');


elixir(function(mix) {
	//mix.sass('app.scss');

	mix.styles([
		"normalize.css",
		"bootstrap.min.css",
		"ripple.css",
		"materialize.css",
		"roboto.css"

		]);
	mix.scripts([
		"app.js"
		]);

	mix.version(["css/all.css", "js/all.js"]);
});