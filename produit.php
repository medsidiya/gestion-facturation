<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<div class="container">
<div class="links">
<a href="./ajout-produit.php">Ajouter produit</a><br>
    <a href="./sup-produit.php">suprimer produit</a><br>
    <a href="./modif-produit.php">modifier produit</a>
</div>

<div class="content">
    <h3>List de produit </h3>
    

<?php

include "./includes/dbh.inc.php";


// Select data from clients table
$sql = "SELECT prodName, description, prix, cout,quantiter FROM products";
$result = mysqli_query($conx, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0) {
  // Output data as an HTML table
  echo "<table>";
  echo "<tr><th>produit Name</th><th>prix</th><th>quantiter</th><th>decription</th><th>cout</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["prodName"] . "</td><td>" . $row["prix"] . "</td><td>" . $row["quantiter"] . "</td><td>" . $row["description"] . "</td><td>" . $row["cout"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No data found.";
}

// Close connection
mysqli_close($conx);
?>

</div>
</div>
</body>
</html>