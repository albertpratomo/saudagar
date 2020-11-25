const mix = require('laravel-mix');
const path = require("path");

mix
    .alias({"@": path.resolve("resources/js")})
    .js("resources/js/app.js", "public/js")
    .vue();
