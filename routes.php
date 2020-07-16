<?php

return (function() {

        $intGT0 = '[1-9]+\d*';
        $normUrl = '[0-9aA-zZ_-]+';

        return [
            [
                'test'       => '/^$/',
                'controller' => 'home'
            ],
            [
                'test'       => '/^post\/add\/?$/',
                'controller' => 'post/add'
            ],
            [
                'test'       => '/^category\/add\/?$/',
                'controller' => 'category/addcat'
            ],
            [
                'test'       => "/^category\/edit\/($intGT0)$/",
                'controller' => 'category/editcat',
                'params'     => ['id' => 1]
            ],
            [
                'test'       => "/^category\/($intGT0)$/",
                'controller' => 'category/catpost',
                'params'     => ['id' => 1]
            ],
            [
                'test'       => '/^category\/list\/?$/',
                'controller' => 'category/catlist'
            ],
            [
                'test'       => '/^contacts$/',
                'controller' => 'contacts'
            ],
            [
                'test'       => '/^e404$/',
                'controller' => 'err/e404'
            ],
            [
                'test'       => "/^post\/edit\/($intGT0)$/",
                'controller' => 'post/edit',
                'params'     => ['id' => 1]
            ],
            [
                'test'       => '/^exit$/',
                'controller' => 'exit'
            ],
            [
                'test'       => '/^home$/',
                'controller' => 'home'
            ],
            [
                'test'       => '/^login$/',
                'controller' => 'login'
            ],
            [
                'test'       => "/^post\/($intGT0)\/?$/",
                'controller' => 'post/post',
                'params'     => ['id' => 1]
            ],
            [
                'test'       => "/^catalog\/($intGT0)\/($intGT0)$/",
                'controller' => 'catalog/product',
                'params'     => ['cid' => 1, 'pid' => 2]
            ]
        ];
    })();

