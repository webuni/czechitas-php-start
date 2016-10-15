<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . '/../vendor/autoload.php';

$map = [
    'home' => [
        'url' => '/',
        'template' => 'me.html',
    ],
    'kontakt' => [
        'url' => '/kontakt',
        'template' => 'contact.html',
    ],
    'reference' => [
        'url' => '/reference',
        'template' => 'work.html',
    ],
];

$request = Request::createFromGlobals();
$response = new Response();

$route = $template = false;
$path = $request->getPathInfo();
foreach ($map as $name => $config) {
    if ($config['url'] === $path) {
        $route = $name;
        $template = $config['template'];
    }
}

if (false === $route) {
    $response->setStatusCode(404);
}

$twig = new Twig_Environment(new Twig_Loader_Filesystem(__DIR__.'/views'));
$response->setContent($twig->render('page.html', [
    'request' => $request,
    'map' => $map,
    'route' => $route,
    'template' => $template,
]));

$response->send();

