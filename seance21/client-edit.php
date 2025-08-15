
<?php
if(isset($_GET['id']) && $_GET['id'] !=null){
    require_once('db/connex.php');

    $id = mysqli_real_escape_string($connex, $_GET['id']);

    $sql = "SELECT * FROM client  WHERE id = '$id'";

    $result = mysqli_query($connex, $sql);

    $count = mysqli_num_rows($result);
    // echo  $count;
    // die();
    if($count == 1){
        $client = mysqli_fetch_array($result, MYSQLI_ASSOC);
        foreach($client as $key=>$value){
            $$key= $value;
        }
       // print_r($client);
    }else{
        header('location:client-index.php');
    }
}else{
    header('location:client-index.php');
}

?>
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
    <title>Client Edit</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="client-index.php">Clients</a></li>
            <li><a href="client-create.php">Client Create</a></li>
        </ul>
    </nav>
    <main>
        <form action="client-update.php" method="post">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= $name ?>">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?= $address;?>">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" value="<?= $phone;?>">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= $email;?>">
            <label for="dob">Bithday</label>
            <input type="date" name="birthday" id="dob" value="<?= $birthday;?>">
            <label for="city_id">City</label> 
            <select name="city_id"  id="city_id" >
                <option value="">Select City</option>
                <?php
                    foreach($result as $row){
                ?>
                    <option value="<?= $row['id']; ?>" <?php if($row['id'] == $city_id){echo "Selected";} ?> ><?= $row['city'];?></option>
                <?php
                    }
                ?>
            </select>
            <input type="submit">
        </form>
    </main>
    <footer>
        copy right 2025
    </footer> 
</body>
</html>