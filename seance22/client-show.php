<?php
if(isset($_GET['id']) && $_GET['id'] !=null){
    require_once('db/connex.php');

    $id = mysqli_real_escape_string($connex, $_GET['id']);

    $sql = "SELECT client.id id, name, address, phone, email, birthday,  city FROM client inner join city on city.id = city_id WHERE client.id = '$id'";

    $result = mysqli_query($connex, $sql);

    $count = mysqli_num_rows($result);
    // echo  $count;
    // die();
    if($count == 1){
        $client = mysqli_fetch_array($result, MYSQLI_ASSOC);
    }else{
        header('location:client-index.php');
    }
}else{
    header('location:client-index.php');
}

?>
<?php 
$title="Client Show";
require_once('header.php')
?>
        <h1>Client Show</h1>
        <p><strong>Name: </strong><?= $client['name'];?></p>
        <p><strong>Address: </strong><?= $client['address'];?></p>
        <p><strong>Phone: </strong><?= $client['phone'];?></p>
        <p><strong>Email: </strong><?= $client['email'];?></p>
        <p><strong>Birthday: </strong><?= $client['birthday'];?></p>
        <p><strong>City: </strong><?= $client['city'];?></p>
        <a href="client-edit.php?id=<?= $client['id']?>" class="btn">Edit</a>
        <form action="client-delete.php" method="post">
            <input type="hidden" name="id" value="<?= $client['id'];?>">
            <input type="submit" value="Delete" class="btn-danger"/>
        </form>
    </main>
<?php 
require_once('footer.php')
?>