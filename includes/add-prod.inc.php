<?php

include "../includes/dbh.inc.php";
if (isset($_POST["submit-prod"])) {

    $prodId = $_POST["prodId"];
    $proName= $_POST["prodName"];
    $description = $_POST["description"];
    $proPrix = $_POST["prodPrix"];
    $cout = $_POST["cout"];
    $fourId= $_POST["fourId"];
    $fourQuan= $_POST["fourQuan"];

    if ( empty($prodId) || empty($proName) || empty($proPrix) || empty($fourId) ||empty($fourQuan) ) {
        header("location: ../produit.php?error=emptyfields&prodName=".$proName ."&prodPrix".$proPrix);
        exit();
    }else{

        $sql ="INSERT INTO products (prodId , prodName , description, prix ,cout ,fournId ,quantiter) VALUE (?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conx);

        if (!mysqli_stmt_prepare($stmt , $sql)) {
            header("location: ../produit.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt , "sssiisi" ,$prodId ,$proName ,$description,$proPrix, $cout ,$fourId ,$fourQuan);
            mysqli_stmt_execute($stmt);
            header("location: ../produit.php?singnup=succes");
            exit();
        
        }

        //$sql = "INSERT INTO products "

    }  
   
}
else if(isset($_POST["reset-prod"])){

    echo "you reset the product";
}
else{
    header("Locaion: ../produit.php");
}

?>


<!-- this script for modiffier produit -->

<?php

include "../includes/dbh.inc.php";
if (isset($_POST["modif-produit"])) {

    $prodId = $_POST["prodId"];
    $prodName= $_POST["prodName"];
    $prodPrix = $_POST["prodPrix"];
    $prodQuan= $_POST["prodQuan"];

    if ( empty($prodId) || empty($prodName) || empty($prodPrix) || empty($prodQuan) ) {
        header("location: ../produit.php?error=emptyfields&prodName=".$prodName ."&prodPrix".$prodPrix);
        exit();
    }else{

        $sql ="UPDATE  products  SET prodName=? , prix=? , quantiter=? WHERE  prodId=? ";
        $stmt = mysqli_stmt_init($conx);

        if (!mysqli_stmt_prepare($stmt , $sql)) {
            header("location: ../produit.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt , "siii" , $prodName ,$prodPrix, $prodQuan ,$prodId );
            mysqli_stmt_execute($stmt);
            header("location: ../produit.php?modiffier=succes");
            exit();
        }
    }
}else{
    header("Location: ./produit.php");
}      
?>

<!-- this for supprimer produit -->

<?php

include '../includes/dbh.inc.php';

if (isset($_POST["sup-produit"])) {

    $prodName = $_POST["prodName"];
    $prodId = $_POST["prodId"];

    if ( empty($prodName) || empty($prodId) ) {
        header("location: ../produit.php?error=emptyfields&fourName=".$prodName ."&clientPhone".$fprodIdourid);
        exit();
    }else{

        $sql ="DELETE FROM products WHERE prodId=? OR prdName=? ";
        $stmt = mysqli_stmt_init($conx);

        if (!mysqli_stmt_prepare($stmt , $sql)) {
            header("location: ../produit.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt , "ss",$prodId  ,$prodName );
            mysqli_stmt_execute($stmt);
            header("location: ../produit.php?supprimer=succes");
            exit();
        
        }
  
    }  
}else{
        header("Location: ../produit.php");
    }
?>

