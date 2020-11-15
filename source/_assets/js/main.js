window.docsearch = require('docsearch.js');

/**
 * Service Worker setup for offline support
 */
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/service-worker.js')
            .then(reg => {
                console.log('Registration succeeded. Scope is ' + reg.scope);
            })
            .catch(registrationError => {
                console.log('SW registration failed: ', registrationError);
            });
    });
}

/**
 * Instant click for perceived performance improvement
 */
const InstantClick = require('instantclick');

/**
 * Register events of InstantClick
 */

InstantClick.on('change', function () {
    try {
        ga('send', 'pageview', location.pathname + location.search);
    } catch (e) {
        // eighter adblock/tracker blocking or development site
        console.log(e);
    }
});
// finally, initialize
InstantClick.init();