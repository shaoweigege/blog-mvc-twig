<?php
    $idCat = URL_PARAMS['id'] ?? null;
    $delete = 'none'; //hide before button press
    $err404 = false;
    $msg = '';

    if ($user === null) {
        $_SESSION['returnUrl'] = ROOT . "category/editcat" . $idCat;
        header("Location:" . ROOT . "login");
        exit();
    }

    if ($idCat === null || $idCat == '' || !is_numeric($idCat)) {
        $err404 = true;
    } else {
        if (categoryShow($idCat)) {
            $newCat = categoryShow($idCat);
            $allCat = categoryShowAll();
        } else {
            $err404 = true;
        }
    }

    if(isset($_POST['editCat'])) {

        $titleCat = cleanValue($_POST['titleCat']);

        if ($titleCat == '') {
            $msg = 'Fill the fields';
        } elseif (categoryCheck($titleCat)) {
            $msg = 'Choose another name! This name exists.';
        } else {
                categoryChange($titleCat, $idCat);
                header("Location:" . ROOT . "category/list");
                exit();
        }

    } else {
            $msg = '';
        }


    if(isset($_POST['resetCat'])) {
        header("Location:" . ROOT . "category/" . $idCat);
    }

    if(isset($_POST['deleteCat'])) {
        $delete = 'agree';
        if(isset($_POST['deleteAgree'])) {
            if ($idCat === null || $idCat == '' || !is_numeric($idCat)) {
                $err404 = true;
            } else {
                categoryDelete($idCat);
                header("Location:" . ROOT . "category/list" );
            }

        } else {
            $msg = 'To delete confirm checkbox';
            $titleCat = cleanValue($_POST['titleCat']);
        }
    }

    if (!$err404) {
        $title_main = 'Edit category name';
        $h1 = 'Edit or delete category';
        $left = template('v_cat-left', [
            'allCat' => $allCat,
            'cat' => $newCat,
            'user' => $user
        ]);

        $inner = template('v_editcat', [
            'delete' => $delete,
            'title' => $title_main,
            'h1' => $h1,
            'titleCat' => $newCat['name'],
            'msg' => $msg,
            'user' => $user
        ]);

        $pageTemplate = 'v_main2c';
    }

