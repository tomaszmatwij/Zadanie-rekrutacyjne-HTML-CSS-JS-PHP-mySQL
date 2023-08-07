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


        $OLD_NIP = $_POST['old-nip'];
        $NIP =  $_POST['nip'];
        $REGON = $_POST['regon'];
        $NAZWA =  $_POST['name'];
        $VAT = $_POST['vat-payer'];
        $ULICA = $_POST['street'];
        $NUMER_DOMU = $_POST['home-number'];
        $NUMER_MIESZKANIA = $_POST['flat-number'];
        $CZY_AKTYWNY = 'Tak';
        // $NEW_NIP = $NIP;
        echo $OLD_NIP;



  $table = $conn -> query( " UPDATE `kontrahenci` SET `NIP`='$NIP',`REGON`='$REGON',`NAZWA`='$NAZWA',`CZY PŁATNIK VAT?`='$VAT',`ULICA`='$ULICA',`NUMER DOMU`='$NUMER_DOMU',`NUMER MIESZKANIA`='$NUMER_MIESZKANIA' WHERE `NIP`='$OLD_NIP'") ;





 ?>
 </body>
  
 </html>
