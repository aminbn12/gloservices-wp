<?php
$_SERVER['HTTP_HOST'] = 'unabjective-foresighted-jamila.ngrok-free.dev';
$_SERVER['HTTP_X_FORWARDED_HOST'] = 'unabjective-foresighted-jamila.ngrok-free.dev';
$_SERVER['HTTPS'] = 'on';

require_once('../../../wp-load.php');
header('Content-Type: text/plain');

echo "WP_HOME: " . (defined('WP_HOME') ? WP_HOME : 'undefined') . "\n";
echo "home_url(): " . home_url() . "\n";
echo "home_url('/'): " . home_url('/') . "\n";
echo "pll_home_url('fr'): " . (function_exists('pll_home_url') ? pll_home_url('fr') : 'no pll') . "\n";
echo "pll_home_url('en'): " . (function_exists('pll_home_url') ? pll_home_url('en') : 'no pll') . "\n";
echo "pll_home_url('ar'): " . (function_exists('pll_home_url') ? pll_home_url('ar') : 'no pll') . "\n";

$about_page = get_page_by_path('about');
if ($about_page) {
    echo "About page link (raw): " . get_permalink($about_page->ID) . "\n";
    echo "About page link (translated 'en'): " . (function_exists('pll_get_post') ? get_permalink(pll_get_post($about_page->ID, 'en')) : 'no pll') . "\n";
    echo "About page link (translated 'ar'): " . (function_exists('pll_get_post') ? get_permalink(pll_get_post($about_page->ID, 'ar')) : 'no pll') . "\n";
}
