<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie zdalne e-MSI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&family=Plus+Jakarta+Sans:wght@300;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="title">Zadanie zdalne e-MSI</h1>
    <main>
        <div id="left">
        <div><a href="kontrolki.html">Różne kontrolki HTML</a>
            </div>
            <div><a href="pracownicy.html">Tabela Pracowników</a></div>
            <div><a href="faktury.html">Tabela Faktur VAT</a>
            </div>
            <div><a href="delegacje.php">Tabela Delegacji BD</a>
            </div>
            <div><a href="kontrahenci.php">Dane Kontrahentów</a>
            </div>
        </div>
        <div id="right">

        <h2 class="section-title">Tabela dalegacji BD</h2>
        <table>
						<thead>
						<tr>
						<th>Lp.</th>
						<th>Imię i Nazwisko</th>
						<th>Data od:</th>
						<th>Data do:</th>
						<th>Miejsce wyjazdu</th>
						<th>Miejsce przyjazdu</th>
						</tr>
						</thead>
						<tbody>

                      


        <?php

// $pdo = new PDO("mysql:host=localhost;dbname=world", 'my_user', 'my_password');   


$dbhost = "mysql.cba.pl";
$dbname = "tomaszmatwij";
$dbuser = "tomaszmatwij";
$dbpassword = "Krokodyl12!@";
$conn = new PDO("mysql:host=".$dbhost.";dbname=".$dbname, $dbuser, $dbpassword);

    
					
	$table = $conn -> query('SELECT * FROM delegacje');

     
                     
	while($row = $table -> fetch()){
		echo '<tr>';
		echo '<td>' . $row['Lp.'] . '</td>';
		echo '<td>' . $row['Imię i nazwisko'] . '</td>';
		echo '<td>' . $row['Data od'] . '</td>';
		echo '<td>' . $row['Data do'] . '</td>';
		echo '<td>' . $row['Miejsce wyjazdu'] . '</td>';
		echo '<td>' . $row['Miejsce przyjazdu'] . '</td>';							
		echo '</tr>';                           
			}						
					
					?>
 </tbody>
						</table>
        </div>
    </main>


    <script src="script3.js"></script>
</body>

</html>


$conn = new mysqli ('mysql.cba.pl', 'tomaszmatwij','Krokodyl12!@','tomaszmatwij') or die('błąd');