<?php
require_once('db/connex.php');
$sql = "SELECT client.id id, name, address, phone, email, birthday,  city FROM client inner join city on city.id = city_id order by name";

$result = mysqli_query($connex, $sql);


// foreach($result as $row){
//     echo "<br/>";
//     print_r($row);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Clients</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="client-index.php">Clients</a></li>
            <li><a href="client-create.php">Client Create</a></li>
        </ul>
    </nav>
    <main>
        <h1>Clients</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>email</th>
                    <th>Birthday</th>
                    <th>City</th>
                    <th>Show</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($result as $row){
                ?>
                <tr>
                    <td><?= $row['name'];?></td>
                    <td><?= $row['address'];?></td>
                    <td><?= $row['phone'];?></td>
                    <td><?= $row['email'];?></td>
                    <td><?= $row['birthday'];?></td>
                    <td><?= $row['city'];?></td>
                    <td><a href="client-show.php?id=<?= $row['id'];?>" class="btn">Show</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>    
        </table>
    </main>
    <footer>
        copy right 2025
    </footer> 
</body>
</html>