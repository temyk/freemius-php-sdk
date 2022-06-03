<?php

require_once 'Freemius/FreemiusBase.php';
require_once 'Freemius/Freemius.php';

define('FS__API_SCOPE', 'developer');
define('FS__API_DEV_ID', 1234);
define('FS__API_PUBLIC_KEY', 'pk_YOUR_PUBLIC_KEY');
define('FS__API_SECRET_KEY', 'sk_YOUR_SECRET_KEY');

// Init SDK.
$api = new Freemius_Api(FS__API_SCOPE, FS__API_DEV_ID, FS__API_PUBLIC_KEY, FS__API_SECRET_KEY);

$result = $api->Api('plugins/115/tags.json', 'POST', [
    'add_contributor' => true,
], [
    'file' => 'C:\xampp\htdocs\deployment-via-sdk\my-plugin.zip',
]);

print_r($result);