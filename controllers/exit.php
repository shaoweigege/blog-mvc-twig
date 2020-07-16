<?php

    sessionDel((int)$user['id_user']);

    //cron for checking expired sessions

    unset($_SESSION['token']);
    setcookie('token', $token, time() - 3600 * 24, ROOT);

    header("Location:" . ROOT);
    exit();
