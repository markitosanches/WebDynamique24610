<?php
require_once('db/connex.php');

$sql = "SELECT * FROM city ORDER BY city";
$result = mysqli_query($connex, $sql);
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
        <form action="client-store.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="dob">Bithday</label>
            <input type="date" name="birthday" id="dob">
            <label for="city_id">City</label>
            <select name="city_id"  id="city_id" >
                <option value="">Select City</option>
                <?php
                    foreach($result as $row){
                       // echo "<option value='".$row['id']."'>".$row['city']."</option>";
                ?>
                    <option value="<?= $row['id']; ?>"><?= $row['city'];?></option>
                <?php
                    }
                ?>
                <!-- 
                <option value="1">Montreal</option>
                <option value="2">Quebec</option> 
                -->
            </select>
            <input type="submit">
        </form>
    </main>
    <footer>
        copy right 2025
    </footer> 
</body>
</html>