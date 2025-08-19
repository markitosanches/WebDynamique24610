<?php 
$title="User Create";
require_once('header.php')
?>
        <h1>Create User</h1>
        <form action="user-store.php" method="post">
            <label for="name">Name</label>
            <input id="name" name="name" type="text">
            <label for="username">Userame</label>
            <input id="username" name="username" type="email">
            <label for="password">Password</label>
            <input id="password" name="password" type="password">
            <input type="submit" value="Save" class="btn">
        </form>
<?php 
require_once('footer.php')
?>