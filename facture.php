
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facture</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<form method="post" action="./includes/facture.inc.php">
  <label for="customer_name">Customer Name:</label>
  <?php
      include "./includes/dbh.inc.php";
        $sql = "SELECT  clientName  FROM clients";
        $result = mysqli_query($conx, $sql);
        $count = 0;
        echo "<select name='clientInfo'>";
        while($row = mysqli_fetch_assoc($result)) {
          echo "<option value='' name='clientInfo'>".$row['clientName']."</option>";
        }
         echo "</select>";

    ?> 
    <input type="text"  placeholder="clientInfo" name="clientInfo">

  <br>
  <div class="product-fields">
    <div class="product-field">
      <label for="">product Name:</label>
    <?php
      $count = 0;
      include "./includes/dbh.inc.php";
        $sql = "SELECT prodId, prodName ,quantiter FROM products";
        $result = mysqli_query($conx, $sql);
        echo "<select name='prodInfo'>";
        while($row = mysqli_fetch_assoc($result)) {
          echo "<option name='prodInfo' value=''>".$row['prodName']."</option>";
        }
         echo "</select>";
         ?>
         <input type="text"  placeholder="prodInfo" name="prodInfo">
      <label for="quantity">Quantity:</label>
      <input type="text" name="quantity">
      <label for="quantity">facture number:</label>
      <input type="text" name="numFact">
      <label for="quantity">date:</label>
      <input type="date" name="dateFact">
    </div>
  </div>
  <button type="submit" name="sub-fact">Add Product</button>
</form>


</body>
</html>
