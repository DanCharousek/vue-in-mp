const mix = require('laravel-mix');

// Bundle per app
mix.js('resources/js/bundle-per-app/app.js', 'public/js/bundle-per-app');

// Bundle per page
mix.js('resources/js/bundle-per-page/home.js', 'public/js/bundle-per-page');
mix.js('resources/js/bundle-per-page/about.js', 'public/js/bundle-per-page');
mix.js('resources/js/bundle-per-page/contact.js', 'public/js/bundle-per-page');

// Bundle per app (multiple instances)
mix.js('resources/js/bundle-per-app-2/app.js', 'public/js/bundle-per-app-2');