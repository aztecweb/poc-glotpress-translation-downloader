<?php
/**
 * Plugin Name: Plugin Test Translation
 * Description: A WordPress plugin for adding translations.
 * Version: 1.0.0
 * Author: Aztec
 * License: GPL2
 */

// Initialize the plugin
function run_plugin_test_translation() {
    // Example translatable strings
    _e('Hello, World!', 'plugin-test-translation');
    _e('This is a test translation string.', 'plugin-test-translation');
    _e('Another example string for translation.', 'plugin-test-translation');
}

add_action('plugins_loaded', 'run_plugin_test_translation');