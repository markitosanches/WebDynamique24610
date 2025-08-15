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

//$name = mysqli_real_escape_string($connex, $_POST['name']);
// $address = mysqli_real_escape_string($connex,$_POST['address']);
// $phone = mysqli_real_escape_string($connex,$_POST['phone']);
// $email = mysqli_real_escape_string($connex,$_POST['email']);
// $birthday = mysqli_real_escape_string($connex,$_POST['birthday']);
// $city_id = mysqli_real_escape_string($connex,$_POST['city_id']);


foreach($_POST as $key=>$value){
   // echo $key." = ".$value."<br>";
   $$key = mysqli_real_escape_string($connex, $value);
}


//  SQL Injection



$sql = "INSERT INTO client (name, address, phone, email, birthday, city_id) VALUES ('$name', '$address' ,'$phone' ,'$email', '$birthday', '$city_id');";

if(mysqli_query($connex, $sql)){
    header('location:client-index.php');
}else{
    echo mysqli_error($connex);
}


?>