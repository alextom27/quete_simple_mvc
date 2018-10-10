<?php
$routes = [
    'Item' => [ // Controller
        ['index', '/', ['GET','POST']], // action, url, HTTP method
        ['show', '/item/{id}', ['GET','POST']], // action, url, HTTP method
    ],
    'Category' => [
        ['index', '/categories', ['GET', 'POST']],
        ['show', '/category/{id}', ['GET','POST']],
    ]
];
