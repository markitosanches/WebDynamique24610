<?php
require_once('db/connex.php');

echo "<h3>Cities</h3>";
$sql = "SELECT * FROM city order by city";
$result = mysqli_query($connex, $sql);

$cities = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($cities);
echo "<br>";
echo $cities[1]['city'];


echo "<h3>City</h3>";
$sql = "SELECT * FROM city where id = 2";
$result = mysqli_query($connex, $sql);

$city = mysqli_fetch_array($result, MYSQLI_ASSOC);


print_r($city); 
echo "<br>";
echo $city['city'];
?>