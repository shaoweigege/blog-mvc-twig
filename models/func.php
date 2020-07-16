<?php

    function messagesAll() {
        $query = dbQuery("SELECT * FROM `news` ");

        return $query->fetchAll();
    }

    function messageOne($id) {
        $query = dbQuery("SELECT * FROM `news` WHERE `id_new` = :id", ['id' => $id]);
        return $query->fetch();
    }

    function messagesAllCat($id) {
        $query = dbQuery("SELECT * FROM `news` WHERE `id_cat` = :id", ['id' => $id]);
        return $query->fetchAll();
    }

    function categoryShow($id) {
        $query = dbQuery("SELECT * FROM `cats` WHERE `id_cat` = :cat", ['cat' => $id]);
        return $query->fetch();
    }
    function categoryShowAll() {
        $query = dbQuery("SELECT * FROM `cats`");
        $cats = $query->fetchAll();
        return $cats === false ? null : $cats;
    }

    function categoryCheck($category) {
        $categories = categoryShowAll();
        foreach ($categories as $cat) {
            if ($cat['name'] == $category) {
                return true;
                break;
            }
        }
        return false;
    }

    function categoryAdd($titleCat) {
        dbQuery("INSERT INTO cats (name) VALUES (:name)", [
            'name' => $titleCat
        ]);
        $db = dbConnect();
        return $db->lastInsertId();
    }

    function categoryChange($titleCat, $id) {
        dbQuery("UPDATE cats SET id_cat=:id_cat, name=:name WHERE id_cat=:id_cat", [
            'id_cat' => $id,
            'name' => $titleCat,
        ]);
//        $db = dbConnect();
//        return $db->lastInsertId();
    }

    function categoryDelete($idCat) {
        dbQuery("DELETE FROM news WHERE id_cat=:id", [
            'id' => $idCat
        ]);
        dbQuery("DELETE FROM cats WHERE id_cat=:id", [
            'id' => $idCat
        ]);

    }

    function messageAdd($id_user, $id_cat, $title, $content) {
        dbQuery("INSERT INTO news (id_user, id_cat, title, content) VALUES (:id_user, :id_cat, :title, :content)", [
            'id_user' => $id_user,
            'id_cat' => $id_cat,
            'title' => $title,
            'content' => $content
        ]);
        $db = dbConnect();
        return $db->lastInsertId();
    }

    function messageEdit($title, $content, $id_cat, $idNew) {
        dbQuery("UPDATE news SET id_cat=:id_cat, title=:title, content=:content WHERE id_new=:id", [
            'id_cat' => $id_cat,
            'title' => $title,
            'content' => $content,
            'id' => $idNew
        ]);
    }

    function messageDelete($idNew) {
        dbQuery("DELETE FROM news WHERE id_new=:id", [
            'id' => $idNew
        ]);
    }

    function isUserPass($login, $pass) {
        $query = dbQuery("SELECT * FROM `users` WHERE `login` = :login", [
            'login' => $login
        ]);
        if($passBd = $query->fetch()){
            if($pass == $passBd['password']) {
                return true;
            } else {
                return false;
            }

        } else {
            return false;
        }
    }

    function checkRegularNumbers($idNews)
    {
        return preg_match("/^[0-9]+$/", $idNews);
    }

    function checkRegular($title)
    {
        return preg_match("/^[a-zA-Z0-9_]+$/", $title);
    }

    function hasDSlashes(string $uri) : bool{
        $pattern = '/\/{2,}/';
        return !!preg_match($pattern, $uri);
    }

    function cleanValue($value = "") {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        return $value;
    }

    function usersOne(string $login): ?array {
        $sql = "SELECT id_user, password FROM users WHERE login=:login";
        $query = dbQuery($sql, ['login' => $login]);
        $user = $query->fetch();
        return  $user === false ? null : $user;
    }

    function usersById(string $id): ?array {
        $sql = "SELECT id_user, login, email, name FROM users WHERE id_user=:id";
        $query = dbQuery($sql, ['id' => $id]);
        $user = $query->fetch();
        return  $user === false ? null : $user;
    }

    function sessionAdd(int $idUser, string $token) : bool {
        $params = ['uid' => $idUser, 'token' => $token];
        $sql = "INSERT sessions (id_user, token) VALUES (:uid, :token)";
        dbQuery($sql, $params);
        return true;
    }

    function sessionOne(string $token) : ?array {
        $sql = "SELECT * FROM sessions WHERE token=:token";
        $query = dbQuery($sql, ['token' => $token]);
        $session = $query->fetch();
        return $session === false ? null : $session;
    }

    function sessionDel($id_user) {
        dbQuery("DELETE FROM sessions WHERE id_user=:id", [
            'id' => $id_user
        ]);
    }

    function getUriParts(string $uri): array {
        $parts = explode('?', $uri);

        return [
            'url' => $parts[0] ?? '',
            'get' => $parts[1] ?? ''
        ];
    }