<?php

include "../includes/dbh.inc.php";
if (isset($_POST["sub-fournis"])) {

    $fournisName = $_POST["fournisName"];
    $fournisAdresse= $_POST["fournisAdresse"];
    $fournisPhone = $_POST["fournisPhone"];
    $fournisEmail = $_POST["fournisEmail"];

    if ( empty($fournisName) || empty($fournisAdresse) || empty($fournisPhone) || empty($fournisEmail) ) {
        header("location: ../fournisseurs.php?error=emptyfields&fourName=".$fournisName ."&clientPhone".$fournisAdresse);
        exit();
    }else{

        $sql ="INSERT INTO fournisseurs (name , address ,  Phone, email) VALUE (?,?,?,?)";
        $stmt = mysqli_stmt_init($conx);

        if (!mysqli_stmt_prepare($stmt , $sql)) {
            header("location: ../fournisseurs.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt , "ssis" ,$fournisName ,$fournisAdresse ,$fournisPhone,$fournisEmail);
            mysqli_stmt_execute($stmt);
            header("location: ../fournisseurs.php?ajouter=succes");
            exit();
        
        }

        //$sql = "INSERT INTO products "

    }  
   
}
else if(isset($_POST["reset-client"])){

    echo "you reset the product";
}
else{
    header("Locaion: ../fournisseurs.php");
}
?>


<!-- this  script is for supprimer fournisseur  -->



<?php

include '../includes/dbh.inc.php';

if (isset($_POST["sup-fournis"])) {

    $fourName = $_POST["fourName"];
    $fourid = $_POST["fourid"];

    if ( empty($fourName) || empty($fourid) ) {
        header("location: ../fournisseurs.php?error=emptyfields&fourName=".$fourName ."&clientPhone".$fourid);
        exit();
    }else{

        $sql ="DELETE FROM fournisseurs WHERE fournId=? OR name=? ";
        $stmt = mysqli_stmt_init($conx);

        if (!mysqli_stmt_prepare($stmt , $sql)) {
            header("location: ../fournisseurs.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt , "is",$fourid  ,$fourName );
            mysqli_stmt_execute($stmt);
            header("location: ../fournisseurs.php?supprimer=succes");
            exit();
        
        }

        //$sql = "INSERT INTO products "

    }  }else{
        header("Location: ../fournisseurs.php");
    }
?>



<!-- this  script is for modiffier fournisseur  -->



<?php

include '../includes/dbh.inc.php';

if (isset($_POST["modif-fournis"])) {

    $fourName = $_POST["fourName"];
    $address = $_POST["address"];
    $fourid = $_POST["fourid"];

    if ( empty($fourName) || empty($fourid) ) {
        header("location: ../fournisseurs.php?error=emptyfields&fourName=".$fourName ."&clientPhone".$fourid);
        exit();
    }else{

        $sql ="UPDATE  fournisseurs  SET  name=? ,  address=?  WHERE  fournId=? ";
        $stmt = mysqli_stmt_init($conx);

        if (!mysqli_stmt_prepare($stmt , $sql)) {
            header("location: ../fournisseurs.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt , "ssi" ,$fourName ,$address ,$fourid );
            mysqli_stmt_execute($stmt);
            header("location: ../fournisseurs.php?modiffier=succes");
            exit();
        }

        //$sql = "INSERT INTO products "

    }  }else{
        header("Location: ../fournisseurs.php");
    }
?>