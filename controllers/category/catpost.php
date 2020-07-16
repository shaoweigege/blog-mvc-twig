<?php

    $id_cat = URL_PARAMS['id'] ?? null;
    $err404 = false;

    if ($id_cat === null || $id_cat == '' || !is_numeric($id_cat)) {
        $err404 = true;
    } else {
        $news_content = messagesAllCat($id_cat);

        if (categoryShow($id_cat)) {
            $new_cat = categoryShow($id_cat);
            $all_cat = categoryShowAll();
        } else {
            $err404 = true;
        }
    }

    if (!$err404) {
        $title_main = 'Category posts page';
        $h1 = 'Category posts';
        $left = template('v_cat-left', [
            'allCat' => $all_cat,
            'cat' => $new_cat,
            'user' => $user
        ]);

        $inner = template('v_cat', [
            'h1' => $h1,
            'title' => $title_main,
            'news' => $news_content,
            'cat' => $new_cat,
            'user' => $user
        ]);

        $pageTemplate = 'v_main2c';
    }




