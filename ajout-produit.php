<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" >
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;400;500;600;700;800&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="container">
      <div class="produit">
      <form action="./includes/add-prod.inc.php" method="post">
        <div class="field-prod">
        <div class="first">
        <input class="first" type="text" name="prodId" placeholder="entre id produit"><br>
        <input type="text" name="prodName" placeholder="entre le nom de produit"><br>
        <input type="text" name="prodPrix" placeholder="entre le prix"><br>
        <input type="text" name="cout" placeholder="entre la cout"><br>
        </div>
        <div class="second">
        <input type="text" name="fourId" placeholder="entre id de fournisseurs"><br>
        <input type="text" name="fourQuan" placeholder="entre la Quantiter"><br>
        <textarea name="description">Description</textarea><br>
        <div class="buttom">
            <button  type="submit" name="submit-prod">submit</button><br>
            <button  type="reset" name="rest-prod">Reset</button><br>
        </div>
        </div>
    </div>

    </form>
      </div>
   </div>
</body>
</html>