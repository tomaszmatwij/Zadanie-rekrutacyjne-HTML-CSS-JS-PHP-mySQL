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
         

         
        // zmienne z formularza
       
       
        $NIP =  $_POST['nip'];
        $REGON = $_POST['regon'];
        $NAZWA =  $_POST['name'];
        $VAT = $_POST['vat-payer'];
        $ULICA = $_POST['street'];
        $NUMER_DOMU = $_POST['home-number'];
        $NUMER_MIESZKANIA = $_POST['flat-number'];
        $CZY_AKTYWNY = 'Tak';


        
  
  
 
    $table = $conn -> query("INSERT INTO kontrahenci (`NIP`, `REGON`, `NAZWA`, `CZY PŁATNIK VAT?`, `ULICA`, `NUMER DOMU`, `NUMER MIESZKANIA`) VALUES ('$NIP','$REGON','$NAZWA','$VAT','$ULICA','$NUMER_DOMU','$NUMER_MIESZKANIA')");

   ?>
</body>
 
</html>


$conn -> query

<meta content="0.001; URL=kontrahenci.php" http-equiv="refresh" />