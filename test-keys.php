<?php
define('ABSPATH', true);
function add_filter() {}
include 'translations.php';

$t_ar = gloservices_get_translations('ar');
$t_en = gloservices_get_translations('en');

$keys = [
    'DÉCOUVREZ NOS SOLUTIONS',
    'CLÉS EN MAIN',
    "Bureau d'études BTP",
    'Découvrir',
    'Nous contacter'
];

foreach ($keys as $k) {
    echo "Key: $k\n";
    echo "  AR: " . (isset($t_ar[$k]) ? $t_ar[$k] : 'NOT FOUND') . "\n";
    echo "  EN: " . (isset($t_en[$k]) ? $t_en[$k] : 'NOT FOUND') . "\n";
}
