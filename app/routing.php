<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [
    'Item' => [ // Controller
        ['index', '/item', 'GET'], // action, url, method
        ['add', '/item/add', ['GET', 'POST']], // action, url, method
        ['edit', '/item/edit/{id:\d+}', ['GET', 'POST']], // action, url, method
        ['show', '/item/{id:\d+}', 'GET'], // action, url, method
        ['delete', '/item/delete/{id:\d+}', 'GET'], // action, url, method
    ],
    'Bonbondex'=> [ // Controller
        ['index', '/bonbondex', 'GET'], // action, url, method

    ],
    'Maps'=> [ // Controller
        ['index', '/maps', 'GET'], // action, url, method
    ],
    'Home'=> [ // Controller
        ['adresseMap', '/', ['GET', 'POST']], // action, url, method
    ],
];
