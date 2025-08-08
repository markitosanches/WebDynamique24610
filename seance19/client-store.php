<?php
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
if($_SERVER['REQUEST_METHOD'] !="POST"){
    header('location:client-index.php');
}
//die();

require_once('db/connex.php');
// print_r($_POST);
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";


// Array ( [name] => Peter [address] => Maisonneuve [phone] => 546546 [email] => peter@gmail.com [birthday] => 2015-10-10 [city_id] => 1 )

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$city_id = $_POST['city_id'];


$sql = "INSERT INTO client (name, address, phone, email, birthday, city_id) VALUES ('$name', '$address' ,'$phone' ,'$email', '$birthday', '$city_id');";

if(mysqli_query($connex, $sql)){
    echo "Success";
}else{
    echo mysqli_error($connex);
}


?>