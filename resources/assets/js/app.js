/**
 * WordPress bundles a noConflict version of the jQuery.
 * We want tu use it as always, with a dolar sign, so
 * we'll assign jQuery to the `$` variable ourself.
 */
window.$ = jQuery.noConflict();