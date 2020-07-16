<?php

    $news = messagesAll();
    $title_main = 'Main page';
    $h1 = 'Main';

    $inner = template('v_index', [
        'news' => $news,
        'title' => $title_main,
        'h1' => $h1,
        'user' => $user
    ]);



