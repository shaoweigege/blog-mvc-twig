<?php

    $id_new = URL_PARAMS['id'] ?? null;
    $err404 = false;

    if ($id_new === null || $id_new == '' || !is_numeric($id_new)) {
        $err404 = true;
    } else {
        $new_content = messageOne($id_new);


        if ($new_content === false) {
            $err404 = true;
        } else {
            $new_cat = categoryShow($new_content['id_cat']);
        }
    }

//    include "views/v_post.php";

    if (!$err404) {

        $title_main = 'Post page';
        $h1 = $new_content['title'];

        $left = template('v_post-left', ['user' => $user, 'id_new' => $id_new]);

        $inner = template('v_post', [
            'new_content' => $new_content,
            'new_cat' => $new_cat,
            'user' => $user
        ]);

        $pageTemplate = 'v_main2c';

    }

