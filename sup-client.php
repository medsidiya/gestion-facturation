<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supprimer clients</title>
</head>
<body>
    <form action="./includes/sup-client.inc.php" method="post">
       <label for="" >entre client id</label>
       <input type="text" placeholder="ic client" name="clientid">
       <label for="">entre client name</label>
       <input type="text" placeholder="Name" name="clientName" >
       <button type="submit" name="sup-client">submit</button>
    </form>

</body>
</html>