<?php

    $cats = categoryShowAll();

    if ($cats !== null) {
        $title_main = 'Categories List';
        $h1 = 'Categories List';

        $inner = template('v_catlist', [
            'h1' => $h1,
            'title' => $title_main,
            'cat' => $cats,
            'user' => $user
        ]);

    }




