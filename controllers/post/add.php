<?php

    if ($user === null) {
        header("Location:" . ROOT .  "login");
        exit();
    }

    $id_user = 1;
    $id_cat = 1;
    $title = '';
    $content = '';

    $categories = categoryShowAll();

    if (isset($_POST['addArticle']) > 0) {
        $title = cleanValue($_POST['title']);
        $content = cleanValue($_POST['content']);
        $id_cat = ($_POST['category']);

        if ($title == '' || $content == '') {
            $msg = 'Fill the fields';
        } else {
            if ($id = messageAdd($id_user, $id_cat, $title, $content)) {
                header("Location:" . ROOT . "post/" . $id);
                exit();
            }
        }


    } else {
        $msg = '';
    }

    if(isset($_POST['resetArticle'])) {
        header("Location:" . ROOT);
        exit();
    }

//    include "views/v_add.php";

    $title_main = 'Add post';
    $h1 = 'Add new post';

    $inner = template('v_add', [
        'title' => $title_main,
        'h1' => $h1,
        'content' => $content,
        'categories' => $categories,
        'msg' => $msg
    ]);




