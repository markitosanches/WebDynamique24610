<?php
    $name = "Peter";

    $a = 10;
    $b = 5;
    $c = $a + $b;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Salut ".$name;
?>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia reiciendis id aspernatur vitae beatae, hic minus similique enim dolorum architecto facilis corporis cum, soluta modi earum autem, perspiciatis natus recusandae!</p>

<?php

    echo "<strong>a + b = </strong>".$c;
    echo "<br>";
    $xA = 50;
    $xB = 40;
?>
<h2>Condition et fonction</h2>
<?php
    function maxVariable($fA, $fB){
        if ($fA > $fB){
            echo "A est supérieur";
        }elseif($fB > $fA){
            echo "B est supérieur";
        }else{
            echo "A et B sont equal";
        }
    }

    maxVariable($a, $xB);

    echo "<br>";
?>
<h2>Array</h2>
<h3>key value</h3>
<?php
    // $colors = array("red", "blue", "pink");
    $colors = ["red", "blue", "pink"];
    print_r($colors);
    echo "<br>";
    echo $colors[0];
?>
<h3>Associative</h3>
<?php
    $client = array("name"=> "Peter", "age" => 25, "city" => "Montreal" );
    print_r($client);
     echo "<br>";
     echo $client['name'];
?>

</body>
</html>