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
    <a href="./ajout-fournis.php">Ajouter fournisseurs</a><br>
    <a href="./modif-fourn.php">modifier fournisseurs</a><br> 
    <a href="./sup-fournis.php">supprimer fournisseurs</a><br>

    <?php
       if(isset($_GET["ajouter"]) == "succes"){
        //header("location: ./accueil.php");
         echo "<p>Ajouter avec sucees</p>";
       }
       if(isset($_GET["supprimer"]) == "succes"){
        //header("location: ./accueil.php");
         echo "<p>supprimer avec sucees</p>";
       }
    ?>
</body> 
</html>