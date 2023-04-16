<?php

include "../includes/dbh.inc.php";
if (isset($_POST["sub-client"])) {

    $clientName = $_POST["clientName"];
    $clientAdresse= $_POST["clientAdresse"];
    $clientEmail = $_POST["clientEmail"];
    $clientPhone = $_POST["clientPhone"];

    if ( empty($clientName) || empty($clientAdresse) || empty($clientEmail) || empty($clientPhone) ) {
        header("location: ../client.php?error=emptyfields&clientName=".$clientName ."&clientPhone".$clientPhone);
        exit();
    }else{

        $sql ="INSERT INTO clients (clientName , address , email, Phone) VALUE (?,?,?,?)";
        $stmt = mysqli_stmt_init($conx);

        if (!mysqli_stmt_prepare($stmt , $sql)) {
            header("location: ../client.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt , "sssi" ,$clientName ,$clientAdresse ,$clientEmail,$clientPhone);
            mysqli_stmt_execute($stmt);
            header("location: ../client.php?singnup=succes");
            exit();
        
        }

        //$sql = "INSERT INTO products "

    }  
   
}
else if(isset($_POST["reset-client"])){

    echo "you reset the product";
}
else{
    header("Locaion: ../client.php");
}


//this is for supprimer clients


if (isset($_POST["sup-client"])) {

    $clientName = $_POST["clientName"];
    $clientid = $_POST["clientPhone"];

    if ( empty($clientName) || empty($clientid) ) {
        header("location: ../client.php?error=emptyfields&clientName=".$clientName ."&clientPhone".$clientid);
        exit();
    }else{

        $sql ="DELETE * FROM clients where clientName=? or clientId=?  ";
        $stmt = mysqli_stmt_init($conx);

        if (!mysqli_stmt_prepare($stmt , $sql)) {
            header("location: ../client.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt , "si" ,$clientName ,$clientid);
            mysqli_stmt_execute($stmt);
            header("location: ../client.php?sup-client=succes");
            exit();
        
        }

        //$sql = "INSERT INTO products "

    }  }

?>
    // this script for modifier client

    
    <?php

    include '../includes/dbh.inc.php';
    
    if (isset($_POST["modif-client"])) {
    
        $clientId = $_POST["clientId"];
        $clientName = $_POST["clientName"];
        $address = $_POST["address"];
        $fourid = $_POST["phone"];
    
        if ( empty($clientName) || empty($address) ) {
            header("location: ../client.php?error=emptyfields&clientName=".$clientName ."&clientPhone".$fourid);
            exit();
        }else{
    
            $sql ="UPDATE  clients  SET  clientName=? ,  address=?  WHERE  clientId=? ";
            $stmt = mysqli_stmt_init($conx);
    
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../client.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt , "ssi" ,$clientName ,$address ,$fourid );
                mysqli_stmt_execute($stmt);
                header("location: ../client.php?modiffier=succes");
                exit();
            }
    
            //$sql = "INSERT INTO products "
    
        }  }else{
            header("Location: ../client.php");
        }
    ?>