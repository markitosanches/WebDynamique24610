<?php
// print_r($_GET);

// foreach($_GET as $key => $value){
//     $$key = $value;
// }
require_once('db/connex.php');

$id = mysqli_real_escape_string($connex, $_GET['id']);

$sql = "SELECT * FROM client WHERE id = '$id'";

$result = mysqli_query($connex, $sql);

$client = mysqli_fetch_array($result, MYSQLI_ASSOC);

//print_r($client);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Client Create</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="client-index.php">Clients</a></li>
            <li><a href="client-create.php">Client Create</a></li>
        </ul>
    </nav>
    <main>
        <h1>Client Show</h1>
        <p><strong>Name: </strong><?= $client['name'];?></p>
        <p><strong>Address: </strong><?= $client['address'];?></p>
        <p><strong>Phone: </strong><?= $client['phone'];?></p>
        <p><strong>Email: </strong><?= $client['email'];?></p>
        <p><strong>Birthday: </strong><?= $client['birthday'];?></p>
    </main>
    <footer>
        copy right 2025
    </footer> 
</body>
</html>