let mix = require("laravel-mix");
mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [require("tailwindcss"), require("autoprefixer")]
);
mix.css("resources/css/custom.css", "public/css");
mix.js("resources/js/custom.js", "public/js");
