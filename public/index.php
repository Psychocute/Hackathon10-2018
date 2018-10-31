<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 14:01
 */


if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // retourne la requête telle quelle.
}

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/db.php';
require_once __DIR__ . '/../app/config.php';
require_once __DIR__ . '/../app/dispatcher.php';




$client = new GuzzleHttp\Client([
        'base_uri' => 'https://fr-en.openfoodfacts.org/category/bonbons/1.json',
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