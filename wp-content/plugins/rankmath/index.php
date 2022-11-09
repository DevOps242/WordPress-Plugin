<?php

/**
 * Plugin Name: Rank Math SEO
 * Author: Akeem Palmer
 * Author URL: https://github.com/DevOps242
 * Version: 1.0
 * Description: SEO plugin built for you.
 * Text Domain: Rank Math
 */


define('RANKMATH_URL', trailingslashit(plugins_url('/', __FILE__)));
define('RANKMATH_PATH', trailingslashit(plugin_dir_path(__FILE__)));

// action
add_action('admin_enqueue_scripts', 'loadScript');


// to load a script
function loadScript()
{
    // the script to load
    wp_enqueue_script('rankmath', RANKMATH_URL . 'rankmath-widget/build' . assetsHandler('main.js'), ['wp-element'], false, true);

    wp_enqueue_style('rankmath', RANKMATH_URL . 'rankmath-widget/build' . assetsHandler('main.css'), [], false, 'all');

    wp_localize_script('rankmath', 'appLocalizer', [
        'apiUrl' => home_url('/wp-json'),
        'nonce' => wp_create_nonce('wp-rest')
    ]);
}

// Helper Function
function assetsHandler($asset)
{
    // get access to the json manifest.
    $manifest = file_get_contents(RANKMATH_PATH . 'rankmath-widget/build/asset-manifest.json');

    $manifest = json_decode($manifest, true);

    if (isset($manifest['files'][$asset])) {
        return $manifest['files'][$asset];
    }

    return 'Unable to find the required asset: ' . $asset;
}




require_once RANKMATH_PATH . 'classes/RankMathDashboard.php';
require_once RANKMATH_PATH . 'classes/RankMathRoutes.php';
