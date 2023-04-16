<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./includes/add-prod.inc.php" method="post">
       <label for="">entre produit id</label>
       <input type="text" placeholder="id de produit" name="prodId">
       <label for="">entre produit name</label>
       <input type="text" placeholder="Name de produit" name="prodName" >
       <label for="">entre produit prix</label>
       <input type="text" placeholder="prix de produit" name="prodPrix" >
       <label for="">entre prodit quantiter</label>
       <input type="text" placeholder="produit de quantiter" name="prodQuan" >
       <button type="submit" name="modif-produit">submit</button>
    </form>
</body>
</html>