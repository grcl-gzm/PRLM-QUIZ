<!-- 
Name: Graciela Gozum
Date: 04/12/25
Section: WD-201 -->

<?php 
$user = "Lara";
$pagbati = "Hello ". $user."!";

$offer = [
    'Album',
    4,
    25,
    20,
];

$reg_price = $offer[1]*$offer[2];

$offer_price = $offer[1]*$offer[3];

$saving = $offer_price - $reg_price;

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

    <h2><?= $pagbati;?></h2>
    <p>Buy 4 albums to get <?= $saving?>$ your purchases</p>

    <div class="circle">
        <p><b>Save <?= $saving?></b></p>
    </div>
    <?php require 'includes/footer.php'?>
    
</body>
</html>