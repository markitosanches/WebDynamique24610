<?php
if(!isset($_SESSION['fingerPrint']) || $_SESSION['fingerPrint'] !==  md5($_SERVER["HTTP_USER_AGENT"].$_SERVER["REMOTE_ADDR"])){
    header('location:login.php');
}
?>