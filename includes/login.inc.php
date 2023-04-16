<?php
if (isset($_REQUEST['login-submit'])) {
    require 'dbh.inc.php';

    $usersName =$_REQUEST['uid'];
    $usersPwd =$_REQUEST['pwd'];

    if (empty($usersName) || empty($usersPwd)) {
        header("location: ../accueil.php?error=emptyfileds");
        exit();
    }else {
        $sql = "SELECT * FROM users WHERE userPwd =? OR userName=?;";
        $stmt = mysqli_stmt_init($conx);
        if (!mysqli_stmt_prepare($stmt , $sql)) {
            header("location: ../index.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt , "ss" , $usersName,$usersName);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) { 
                $pwdCheck = password_verify($usersPwd ,$row['userPwd']);
                if ($pwdCheck == false) {
                    header("location: ../index.php?error=Wrong-usersPwd");
                    exit(); 
                }else if($pwdCheck == true) {
                    session_start();
                    $_SESSION['userPass'] = $row['usersPwd'];
                    $_SESSION['userName'] = $row['usersName'];

                    header("location: ../accueil.php?login=success");
                    exit();
                }
            }else {
                header("location: ../index.php?error=no-user");
                exit();
            }
        }
    }
}
else{
    header("location: ../index.php");
    exit();
}