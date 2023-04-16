<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./includes/add-client.inc.php" method="post">
       <label for="" >entre client id</label>
       <input type="text" placeholder="id client" name="clientId">
       <label for="">entre client name</label>
       <input type="text" placeholder="Name" name="clientName" >
       <label for="">entre client address</label>
       <input type="text" placeholder="address" name="address" >
       <label for="">entre client phone</label>
       <input type="text" placeholder="phone" name="phone" >
       <button type="submit" name="modif-client">submit</button>
    </form>
</body>
</html>