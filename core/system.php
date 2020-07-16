<?php

    function template($fname, $vars = []) {
        static $twig;

        if ($twig === null) {
            $loader = new \Twig\Loader\FilesystemLoader('views');
            $twig = new \Twig\Environment($loader, [
                'cache' => 'cache/twig',
                'auto_reload' => true,
                'autoescape' => false,
                'strict_variables' => true
            ]);
        }

        return $twig->render("$fname.twig", $vars);
    }

    function parseUrl(string $url, array $routes) : array {
        $res = [
          'controller' => 'err/e404',
          'params' => []
        ];

        foreach ($routes as $routes) {
            $matches = [];

            if (preg_match($routes['test'], $url, $matches)) {
                $res['controller'] = $routes['controller'];

                if(isset($routes['params'])) {
                    foreach ($routes['params'] as $name => $num) {
                        $res['params'][$name] = $matches[$num];
                    }
                }


                break;
            }
        }

        return $res;
    }


