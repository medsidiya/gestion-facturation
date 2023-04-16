

<?php

include '../includes/dbh.inc.php';

if (isset($_POST["sup-client"])) {

    $clientName = $_POST["clientName"];
    $clientid = $_POST["clientid"];

    if ( empty($clientName) || empty($clientid) ) {
        header("location: ../client.php?error=emptyfields&clientName=".$clientName ."&clientPhone".$clientid);
        exit();
    }else{

        $sql ="DELETE FROM clients    WHERE clientName=? OR clientId=?  ";
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

    }  }else{
        header("Location: ../client.php");
    }
?>