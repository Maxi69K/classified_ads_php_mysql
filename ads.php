<?php
    require_once "functions.php";
    if (isset($_SESSION['id'])) {
        include "ads.view.php";
    } else {
        header('Location: index.php');
    }
?>