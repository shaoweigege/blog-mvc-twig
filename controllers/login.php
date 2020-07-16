<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = cleanValue($_POST['login']);
        $pass = cleanValue($_POST['password']);
//        $pass = password_hash($pass, PASSWORD_BCRYPT);
        $remember = isset($_POST['remember']);
        $authErr = true;

        if ($login !== '' || $pass !== '') {
            $user = usersOne($login);

            if ($user !== null && password_verify($pass, $user['password'])) {
                $token = substr(bin2hex(random_bytes(128)), 0, 128);

                sessionAdd($user['id_user'], $token);
                $_SESSION['token'] = $token;

                if ($remember) {
                    setcookie('token', $token, time() + 3600 * 24 * 30, ROOT);
                }

                header('Location: ' . ROOT);
                exit();

            }
        }

    } else {
        $authErr = false;
    }

    $inner = template('v_login', [
        'authErr' => $authErr
    ]);

    $title_main = 'Login page';
    $h1 = "Log in";

