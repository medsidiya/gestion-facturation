<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter client</title>
</head>
<body>
    <form action="./includes/add-client.inc.php" method="post">
        <label for="cN">entre your name</label>
        <input type="text" name="clientName" id="cN" placeholder="name">

        <label for="cA">entre your Adresse</label>
        <input type="text" name="clientAdresse" id="cA" placeholder="Adresse">

        <label for="cE">entre your email</label>
        <input type="email" name="clientEmail" id="cE" placeholder="email">

        <label for="cP">entre your phone</label>
        <input type="text" name="clientPhone" id="cP" placeholder="phone">

        <button type="submit" name="sub-client">submit</button>
        <button type="reset" name="res-client">reset</button>
    </form>
    
</body>
</html>