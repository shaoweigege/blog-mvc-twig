<?php

    include_once('init.php');

    $user = authGetUser();

    $pageCanonical = HOST . ROOT;
    $uriParts = getUriParts($_SERVER['REQUEST_URI']);
    $uri = $uriParts['url'];
    $badUrl = ROOT . 'index.php';

    if (hasDSlashes($uri)) {
        $redirectUrl = preg_replace('/\/{2,}/m', '/', $uri);

        if ($uriParts['get'] !== '') {
            $redirectUrl .= '?' . $uriParts['get'];
        }
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: $redirectUrl");
        exit();
    }

    if (strpos($uri, $badUrl) === 0) {
        $controller = 'err/e404';
    } else {
        $routes = include('routes.php');
        $url = $_GET['php1chpu'] ?? '';
        $routerRes = parseUrl($url, $routes);
        $controller = $routerRes['controller'];
        define('URL_PARAMS', $routerRes['params']);

        $urlLen = strlen($url);
        if ($urlLen > 0 && $url[$urlLen - 1] == '/') {
            $url = substr($url, 0, $urlLen - 1);
        }
        $pageCanonical .= $url;
    }




    $title_main = 'Error 404';
    $h1 = 'Error 404';
    $left = '';
    $inner = template('v_404');
    $err404 = false;
    $pageTemplate = 'v_main';


    if (!file_exists('controllers/' . $controller . '.php')) {
        $controller = 'err/e404';
    }

    include_once("controllers/$controller.php");

    echo template($pageTemplate, [
        'title_main' => $title_main,
        'h1' => $h1,
        'left' => $left,
        'content' => $inner,
        'canonical' => $pageCanonical,
        'user' => $user
    ]);




