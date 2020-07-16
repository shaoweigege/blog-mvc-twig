<?php

	// 404 http
    $user = null;

    header("HTTP/1.1 404 Not Found");
    $title_main = "Error 404";
    $inner = template('v_404');

