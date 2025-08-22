<?php
session_start();
// print_r($_POST);
//Array ( [username] => peter@gmail.com [password] => 123456 )1

require_once('db/connex.php');

foreach($_POST as $key=>$value){
    $$key = mysqli_real_escape_string($connex, $value);
}

//1 check username
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($connex, $sql);

//2 compter == 1 
$count = mysqli_num_rows($result);
if($count == 1){
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //print_r($user);
    $dbPassword = $user['password'];
    //echo $password. " == ".$dbPassword;

    //3 check password
    if(password_verify($password, $dbPassword)){
        session_regenerate_id();
        $_SESSION['fingerPrint'] = md5($_SERVER["HTTP_USER_AGENT"].$_SERVER["REMOTE_ADDR"]);
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        header('location:client-create.php'); 
          //4
          // POST GET COOKIE SESSION
    }else{
       header('location:login.php?msg=2'); 
    }
}else{
    header('location:login.php?msg=1');
}



?>