var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass("main.scss");
    mix.styles([
        "vendor/font-awesome.css",
        "vendor/codemirror.css",
        "vendor/mirrormark.css"
    ], "public/css/vendor/admin.css");
    mix.scripts([
        "burger.js"
    ], "public/js/main.js");
    mix.scripts([
        "vendor/jquery.js"
    ], "public/js/vendor/vendor.js");
    mix.scripts([
        "admin/main.js",
    ], "public/js/admin.js");
    mix.scripts([
        "vendor/admin/codemirror/codemirror.js",
        "vendor/admin/codemirror/addon/continuelist.js",
        "vendor/admin/codemirror/mode/markdown.js",
        "vendor/admin/lodash.js",
        "vendor/admin/mirrormark.js",
        "vendor/admin/marked.js"
    ], "public/js/vendor/admin.js");
});
