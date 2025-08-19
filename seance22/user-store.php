<?php
//print_r($_POST);
//Array ( [name] => aaa [username] => a@a [password] => 12345678 )
if($_SERVER['REQUEST_METHOD'] !="POST"){
    header('location:user-create.php');
}

require_once('db/connex.php');

foreach($_POST as $key=>$value){
    $$key = mysqli_real_escape_string($connex, $value);
}

// echo "Password: ". $password;

// echo "<br>Password Hash (Md5) : ". md5($password);

// echo "<br>Password Hash Pass : ". password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);

$password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);

$sql = "INSERT INTO user (name, username, password) VALUES ('$name', '$username', '$password')";

if(mysqli_query($connex, $sql)){
    header('location:login.php');
}else{
    echo mysqli_error($connex); 
}
?>