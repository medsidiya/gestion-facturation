<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter fournisseurs</title>
</head>
<body>
<form action="./includes/add-fournis.inc.php" method="post">
        <label for="fN">entre your name</label>
        <input type="text" name="fournisName" id="cN" placeholder="name">

        <label for="fA">entre your Adresse</label>
        <input type="text" name="fournisAdresse" id="cA" placeholder="Adresse">

        <label for="fE">entre your email</label>
        <input type="email" name="fournisEmail" id="cE" placeholder="email">

        <label for="fP">entre your phone</label>
        <input type="text" name="fournisPhone" id="cP" placeholder="phone">

        <button type="submit" name="sub-fournis">submit</button>
        <button type="reset" name="res-client">reset</button>
    </form>
 
</body>
</html>