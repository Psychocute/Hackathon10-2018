<?php
/**
 * Created by PhpStorm.
 * User: amelie
 * Date: 30/10/18
 * Time: 17:25
 */
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/db.php';
require_once __DIR__ . '/../app/config.php';
require_once __DIR__ . '/../app/dispatcher.php';


$client = new GuzzleHttp\Client([
        'base_uri' => 'https://ssl-api.openfoodfacts.org/',
    ]
);

// Send a request to https://foo.com/api/test
$response = $client->request('GET', 'test');
// or
// Send request https://foo.com/api/test?key=maKey&name=toto
$response = $client->request('GET', 'test', [
        'key'  => 'maKey',
        'name' => 'toto',
    ]
);

$body = $response->getBody();
echo $body->getContents();

