<?php
session_start();
// print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $title; ?></title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="client-index.php">Clients</a></li>
            <li><a href="client-create.php">Client Create</a></li>
            <li><a href="user-create.php">User Create</a></li>
        </ul>
        <ul>
             <?php if (isset($_SESSION['fingerPrint'])){
                ?>
            <li> <a href="logout.php">Logout</a></li>
             <?php }else{ ?>
                <li> <a href="login.php">Login</a></li>
            <?php
                }
             ?>
        </ul>   

    </nav>
    <main>
        <?php if (isset($_SESSION['name'])){
            echo "Salut ".$_SESSION['name'];
        }
        ?>