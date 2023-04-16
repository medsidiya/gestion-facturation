<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<div class="container">
   <div class="links">
        <a href="./ajout-client.php">Ajouter Client</a>
        <a href="./modif-client.php">modifier Client</a>
        <a href="./sup-client.php">supprimer Client</a>
        <a href="./list-clients.php">list Client</a>
   </div>

   

<?php

include "./includes/dbh.inc.php";


// Select data from clients table
$sql = "SELECT clientName, address, email, phone FROM clients";
$result = mysqli_query($conx, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0) {
  // Output data as an HTML table
  echo "<table>";
  echo "<tr><th>Client Name</th><th>Address</th><th>Email</th><th>Phone</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["clientName"] . "</td><td>" . $row["address"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No data found.";
}

// Close connection
mysqli_close($conx);
?>

</div>
</body>
</html>