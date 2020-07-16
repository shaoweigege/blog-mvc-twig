<?php
    $idNew = URL_PARAMS['id'] ?? null;
    $delete = 'none'; //hide before button press
    $err404 = false;

    if ($user === null) {
        $_SESSION['returnUrl'] = ROOT . "post/" . $idNew;
        header("Location:" . ROOT .  "login");
        exit();
    }

    if(isset($_POST['editArticle'])) {

        $title = cleanValue($_POST['title']);
        $content = cleanValue($_POST['content']);
        $id_cat = ($_POST['category']);

        if ($title == '' || $content == '') {
            $msg = 'Fill the fields';
        } else {
            messageEdit($title, $content, $id_cat, $idNew);
            header("Location:" . ROOT);
            exit();
        }

    } else {
        if ($idNew === null || $idNew == '' || !is_numeric($idNew)) {
            $err404 = true;
        } else {
            $msg = '';
            $new_content = messageOne($idNew);
            $new_cat = categoryShowAll();
            $cat = $new_content['id_cat'];

            if ($new_content === false) {
                $err404 = true;
            }
        }
    }

    if(isset($_POST['resetArticle'])) {
        header("Location:" . ROOT);
        exit();
    }

    if(isset($_POST['deleteArticle'])) {
        $delete = 'agree';
        if(isset($_POST['deleteAgree'])) {
            if ($idNew === null || $idNew == '' || !is_numeric($idNew)) {
                echo 'Error 404, there is no title!';
            } else {
                messageDelete($idNew);
            }
            header("Location:" . ROOT);
            exit();
        } else {
            $msg = 'To delete file confirm checkbox';
            $title = cleanValue($_POST['title']);
            $content = cleanValue($_POST['content']);
        }
    }

//    include "views/v_edit.php";

    $title_main = 'Edit page';
    $h1 = 'Edit message';

    $inner = template('v_edit', [
        'err404' => $err404,
        'delete' => $delete,
        'new_content' => $new_content,
        'new_cat' => $new_cat,
        'cat' => $cat,
        'msg' => $msg,
        'user' => $user
    ]);

