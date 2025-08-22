<?php
if($_SERVER['REQUEST_METHOD'] !="POST"){
    header('location:client-index.php');
}

require_once('db/connex.php');

foreach($_POST as $key => $value){
    $$key = mysqli_real_escape_string($connex, $value);
}

$sql = "DELETE FROM client WHERE id = '$id'";

if(mysqli_query($connex, $sql)){
     header('location:client-index.php');
}else{
    echo mysqli_error($connex);
}

?>