<?php

    function authGetUser() : ?array{

        $user = null;

        $token = $_SESSION['token'] ?? $_COOKIE['token'] ?? null;

        if ($token !== null) {
            $session = sessionOne($token);

            if ($session !== null) {
                $user = usersById($session['id_user']);
            }

            if ($user === null) {
                unset($_SESSION['token']);
                setcookie('token', $token, time() - 3600 * 24, ROOT);
            }
        }

        return $user;
    }
