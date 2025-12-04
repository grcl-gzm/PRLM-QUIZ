<!-- 
Name: Graciela Gozum
Date: 04/12/25
Section: WD-201 -->

<?php 
$user = "Lara";
$greet = "Hello";
$product= "Album";
$cost = 30;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require 'includes/header.php'?>

    <?php
    if ($user){
        echo "<h2>".$greet. " " . $user."!</h2>";
    } 

    $totals = [];
    for ($i = 1; $i <= 10; $i++){
        $subtotal = $cost * $i;
        $discount = ($cost / 100) * 5;
        $price = $subtotal - $discount;

        $totals[$i] = $price;
    }
    ?>

    <h2>These are the available Merch Discounts</h2>

    <?php
    echo "<table>";
    echo "<tr><th>Products</th><th>Prices</th>";

    foreach ($totals as $quantity => $price){
        echo "<tr>";

        $label = ($quantity == 1) ? "Album" : "Album bundle";
        echo "<td>".$quantity." ".$label."</td>";
        echo "<td>$".$price." ".$label."</td>";

        echo "</tr>";
    }
    echo "</table>";

    ?>


    <?php require 'includes/footer.php'?>
    
</body>
</html>