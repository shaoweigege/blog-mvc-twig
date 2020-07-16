<?php

    function dbConnect() {
        static $db;
        if ($db === null) {
            $db = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME, DBUSER, DBPASS);
            $db->exec('SET NAMES UTF8');
        }
        return $db;
    }

    function dbQuery($sql, $params = []) {
        $db = dbConnect();

        $query = $db->prepare($sql);
        $query->execute($params);

        dbCheckError($query);

        return $query;
    }

    function dbCheckError($query) {
        $info = $query->errorInfo();
        if ($info[0] != PDO::ERR_NONE) {
            exit($info[2]);
        }
    }
