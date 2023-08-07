<!DOCTYPE html>
<html>
 
<html lang="pl">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="0.001; URL=kontrahenci.php" http-equiv="refresh" />
    <title>document</title>
</head>
 
<body>
   
        <?php
 
 $dbhost = "localhost";
 $dbname = "kontrahenci";
 $dbuser = "root";
 $dbpassword = "";
 $conn = new PDO("mysql:host=".$dbhost.";dbname=".$dbname, $dbuser, $dbpassword);

 $OLD_NIP =  $_POST['old-nip2'];
 $CZY_USUNIĘTY = 'Tak';


 $table = $conn -> query(" UPDATE `kontrahenci` SET `CZY ZOSTAŁ USUNIĘTY?` = '$CZY_USUNIĘTY' WHERE `NIP`='$OLD_NIP' " ) ;


?>

