<?php
if($_SERVER['REQUEST_METHOD'] !="POST"){
    header('location:client-index.php');
}

// print_r($_POST);
// Array ( [id] => 1 [name] => Peter [address] => Maisonneuve [phone] => 654564 [email] => peter@gmail.com [birthday] => 2025-10-10 [city_id] => 1 )

require_once('db/connex.php');

foreach($_POST as $key => $value){
    $$key = mysqli_real_escape_string($connex, $value);
}

$sql = "UPDATE client SET name = '$name', address = '$address', phone = '$phone', email = '$email', birthday = '$birthday', city_id = '$city_id' WHERE id = '$id'";

if(mysqli_query($connex, $sql)){
     header('location:client-index.php');
}else{
    echo mysqli_error($connex);
}

?>