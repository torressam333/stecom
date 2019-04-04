var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

var gulp = require('gulp');

elixir(function(mix){
    //compile sass to css
    mix.sass('resources/assets/sass/app.scss', 'resources/assets/css');

     //combine css files
    mix.styles(
        [
            'css/app.css',
            'bower/slick-carousel/slick/slick.css',

        ], "public/css/all.css", //output file for our css
        'resources/assets' //Source file
    );

    //JS
    var bowerPath = 'bower/vendor';

    mix.scripts(
        [
            //Pull in jquery
            bowerPath + '/jquery/dist/jquery.min.js',

            //foundation js
            bowerPath + '/foundation-sites/dist/js/foundation-min.js',

            //Other dependencies
            bowerPath + '/slick-carousel/slick.min.js'
        ], "public/js/all.js", //output file for our css
        'resources/assets' //Source file
    );
});