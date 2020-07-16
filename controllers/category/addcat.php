<?php

    if ($user === null) {
        header("Location:" . ROOT .  "login");
        exit();
    }

    $id_user = 1;
    $titleCat = '';

    if (isset($_POST['addCat'])) {
        $titleCat = cleanValue($_POST['titlecat']);

        if ($titleCat == '') {
            $msg = 'Fill the fields';
        } elseif (categoryCheck($titleCat)) {
            $msg = 'Choose another name! This name exists.';
        } else {
            if ($id = categoryAdd($titleCat)) {
                header("Location:" . ROOT . "category/" . $id);
                exit();
            }
        }


    } else {
        $msg = '';
    }

    if(isset($_POST['resetCat'])) {
        header("Location:" . ROOT . "category/list");
        exit();
    }

    $title_main = 'Add Category';
    $h1 = 'Add New Category';

    $inner = template('v_addcat', [
        'title' => $title_main,
        'h1' => $h1,
        'titleCat' => $titleCat,
        'msg' => $msg
    ]);




