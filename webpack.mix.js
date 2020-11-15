const { GenerateSW } = require('workbox-webpack-plugin');
const mix = require('laravel-mix');
require('laravel-mix-purgecss');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build/');
mix.webpackConfig({
    plugins: [
        new GenerateSW({
            // these options encourage the ServiceWorkers to get in there fast
            // and not allow any straggling "old" SWs to hang around
            clientsClaim: true,
            skipWaiting: true,
            swDest: '../../service-worker.js', //Need to move the service-worker to the root
        }),
    ]
});

mix.js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css/main.css')
    .jigsaw({
        watch: ['config.php', 'source/**/*.md', 'source/**/*.php', 'source/**/*.scss'],
    })
    .options({
        processCssUrls: false,
        postCss: [
            require('tailwindcss'),
            // require('postcss-css-variables')({
            //     preserve: true
            // })
        ]
    })
    .purgeCss({
        content: ['source/**/*.html', 'source/**/*.md', 'source/**/*.js', 'source/**/*.php', 'source/**/*.vue'],
        whitelistPatterns: [/language/, /hljs/, /mce/],
    })
    .sourceMaps()
    .version();