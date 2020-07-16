<?php
    session_start();

    define('ROOT', '/blog-mvc-twig/');
    const HOST = 'http://php-test:8888';

    const DBHOST = 'localhost';
    const DBNAME = 'dbnews';
    const DBUSER = 'root';
    const DBPASS = 'root';

    include_once('core/db.php');
    include_once('core/system.php');
    include_once('core/auth.php');

    include_once('models/func.php');

    require_once('vendor/autoload.php');

//    spl_autoload_register(function ($classname) {
//        include_once str_replace('\\', '/', $classname) . '.php';
//    });