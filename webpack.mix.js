const mix = require("laravel-mix");

mix.js("resources/js/autocomplete.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);
