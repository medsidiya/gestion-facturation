

<?php

include '../includes/dbh.inc.php';

if (isset($_POST["sub-fact"])) {

    $clientInfo = $_POST["clientInfo"];
    $prodInfo = $_POST["prodInfo"];
    $quantites = $_POST["quantity"];
    $dateFact = $_POST["dateFact"];
    $numFact = $_POST["numFact"];

    if ( empty($clientInfo) || empty($prodInfo) ) {
        header("location: ../client.php?error=emptyfields&clientName=".$clientInfo ."&clientPhone".$prodInfo);
        exit();
    }else{

        $sql ="SELECT clientName , address , phone FROM clients WHERE clientName= '$clientInfo'";
        $sql1 = "SELECT prodName ,quantiter , prix from products where prodName= '$prodInfo'";
            
            $result = mysqli_query($conx, $sql);
            echo "<h2 style='color:red;'>Bill</h2>";
            echo "<div class='factureInfo' style='position:relative;width:300px;'>";
            echo "<div class='info' style='position:absolute; right:0;'>";
            echo "<div>fature info*** </div>";
            echo "<div>factur Number: $numFact  </div>";
            echo "<div>factur date: $dateFact</div>";
            echo "</div>";
            echo "</div>";
            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $clientName = $row['clientName'];
                $address = $row['address'];
                $phone = $row['phone'];
                echo "client Name: $clientName<br>";
                echo " address: $address<br> ";
                echo " phone:$phone<br>";
            }

   $result = mysqli_query($conx, $sql1);
$total_price =0;
    // Calculate total prix and display row in bill table
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $product_name = $row['prodName'];
        $prix = $row['prix'];
        $quantity = $row['quantiter'];
        if ($quantity < $quantites) {
            echo "quantites of produit is less than yours";
            exit();
        }else{
            $quanFinal = $quantity - $quantites;
            $sql = "UPDATE  products set quantiter = ? where prodName=?";

            $stmt = mysqli_stmt_init($conx);

            if (!mysqli_stmt_prepare($stmt , $sql)) {
                header("location: ../facture.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt , "ss" , $quanFinal,$prodInfo );
                mysqli_stmt_execute($stmt);
                header("location: ../includes/facture.inc.php?modiffier=succes");
                exit();
            }
        }
        $product_total_price = $prix * $quantites;
        $total_price += $product_total_price;
        echo "<table>";
        echo "<tr><th>Product Name</th><th>Price</th><th>Quantity</th><th>Total Price</th></tr>";

        echo "<tr><td>$product_name</td><td>$prix</td><td>$quantites</td><td>$product_total_price</td></tr>";
        echo "<tr><td colspan='3' align='right'>Total Price:</td><td>$total_price</td></tr>";
echo "</table>";
    }

    }

}else{
    header("Location: ../facture.php");
}