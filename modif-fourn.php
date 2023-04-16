<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supprimer fournis</title>
</head>
<body>
    <form action="./includes/add-fournis.inc.php" method="post">
       <label for="" >entre fournis id</label>
       <input type="text" placeholder="id fournisseurs" name="fourid">
       <label for="">entre fournis name</label>
       <input type="text" placeholder="Name" name="fourName" >
       <label for="">entre fournis address</label>
       <input type="text" placeholder="address" name="address" >
       <button type="submit" name="modif-fournis">submit</button>
    </form>

</body>
</html>