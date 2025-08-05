<?php
// localhost = 127.0.0.1


// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$connex = mysqli_connect('localhost', 'root', '', 'store', 3306);

if(mysqli_connect_error()){
    echo "Erreur de connexion ".mysqli_connect_error();
    exit();
}

// echo "ok";
mysqli_set_charset($connex, "utf8");

?>