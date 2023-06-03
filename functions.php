<?php 
    require_once "config.php";
    session_start();
    function db()
    {
        $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die("Error");
        return $con;
    }
    function dd($val)
    {
        echo "<pre>";
        die(var_dump($val));
        echo "</pre>";
    }
    function logUser($user)
    {
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        header('Location: ads.php');
    }
    function getAll()
    {
        $sql = "SELECT a.id, a.user_id, a.title, a.category, a.price, a.text, u.name FROM ads as a INNER JOIN users as u ON (a.user_id = u.id);";
        $query = mysqli_query(db(), $sql);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        return $result;
    }
    function get_all_user_ads($id)
    {
        $sql = "SELECT a.id, a.title, a.text, a.category, a.price, u.name FROM ads as a INNER JOIN users as u ON (a.user_id = u.id) WHERE a.user_id = '$id';";
        $query = mysqli_query(db(), $sql);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        return $result;
    }
    function getOne($id)
    {
        $sql = "SELECT a.id, a.title, a.text, a.category, a.price, u.name FROM ads as a INNER JOIN users as u ON (a.user_id = u.id) WHERE a.id = '$id';";
        $query = mysqli_query(db(), $sql);
        $result = mysqli_fetch_assoc($query);
        return $result;
    }
    function getCategory($cat)
    {
        $sql = "SELECT a.id, a.title, a.text, a.category, a.price, u.name FROM ads as a INNER JOIN users as u ON (a.user_id = u.id) WHERE a.category = '$cat';";
        $query = mysqli_query(db(), $sql);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        return $result;
    }
    function getAllFromUser($name)
    {
        $sql = "SELECT a.id, a.title, a.text, a.category, a.price, u.name FROM ads as a INNER JOIN users as u ON (a.user_id = u.id) WHERE u.name = '$name';";
        $query = mysqli_query(db(), $sql);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        return $result;
    }
    function getPrice($price)
    {
        $sql = "SELECT a.id, a.title, a.text, a.category, a.price, u.name FROM ads as a INNER JOIN users as u ON (a.user_id = u.id) WHERE a.price <= '$price';";
        $query = mysqli_query(db(), $sql);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        return $result;
    }
?>