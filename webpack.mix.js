const mix = require('laravel-mix');

mix.setResourceRoot('./');
mix.js('client/js/main.js', 'client/dist/js/main.js');
