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
        <script
	src='https://kit.fontawesome.com/4ac80ba84e.js'
	crossorigin='anonymous'
></script>
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
            <section class="contractors">
            
        <h2 class="section-title">Dane kontrahentów</h2>
        <table>
						<thead>
						<tr>
						<th>NIP</th>
						<th>REGON</th>
						<th>Nazwa</th>
						<th>Czy płatnik VAT</th>
						<th>Ulica</th>
						<th>Numer domu</th>
                        <th>numer mieszkania</th>
                        <th></th>
						</tr>
						</thead>
						<tbody>
        <?php

$dbhost = "localhost";
$dbname = "kontrahenci";
$dbuser = "root";
$dbpassword = "";
$conn = new PDO("mysql:host="$dbhost.";dbname=".$dbname, $dbuser, $dbpassword);

$table = $conn -> query('SELECT * FROM kontrahenci');
while($row =$table -> fetch()){
    if($row['CZY ZOSTAŁ USUNIĘTY?'] !=='Tak'){
        echo '<tr>';
        echo "<td class='nip'>" . $row['NIP'] . '</td>';
        echo "<td class='regon'>" . $row['REGON'] . '</td>';
        echo "<td class='name'>" . $row['NAZWA'] . '</td>';
        echo "<td class='vat'>" . $row['CZY PŁATNIK VAT?'] . '</td>';
        echo "<td class='street'>" . $row['ULICA'] . '</td>';
        echo "<td class='house-number'>" . $row['NUMER DOMU'] . '</td>';
        echo "<td class='flat-number'>" . $row['NUMER MIESZKANIA'] . '</td>';
        echo "<td class='table-buttons'> <button class='delete' title='usuń' id={$row['NIP']}><i class='fa-sharp fa-solid fa-trash'></i></button><button class='edit' title='edytuj'><i class='fa-solid fa-pen-to-square'></i></button>";							
        echo '</tr>'; 
    }
                              
        }						

?>
                </tbody>
			</table>
            </section>
           <button class="add-button">Dodaj nowego kontrahenta</button>
           <section class="add-panel">
                <h3 class="add-panel-title">Dodaj nowego kontrahenta</h3>
                <form action="newContractor.php" class="controls" method = 'POST'>
                    <div class="form-element">
                        <lebel for="nip">NIP</lebel><input class="inputform"  type="text" name="nip">
                    </div>
                    <div class="form-element">
                        <lebel for="regon">REGON</lebel><input class="inputform"  type="text" name="regon">
                    </div>
                    <div class="form-element">
                     <lebel for="name">NAZWA</lebel><input class="inputform"   type="text" name="name">
                    </div>
                    <div class="form-element">
                        <lebel for="vat-payer">CZY PŁATNIK VAT?</lebel>
                            <input type="hidden" name="vat-payer" value= 'Nie'>	
							<input type="checkbox" name="vat-payer" class='vat-payer' value= 'Tak'>
                    </div>
                    <div class="form-element">
                        <lebel for="street">ULICA</lebel><input class="inputform" type="text" name="street">
                    </div>
                    <div class="form-element">
                        <lebel for="home-number">NUMER DOMU</lebel><input class="inputform"  type="text" name="home-number">
                    </div>
                    <div class="form-element">
                        <lebel for="flat-number">NUMER MIESZKANIA</lebel><input class="inputform" type="text" name="flat-number">
                    </div>
                    <div class="panel-buttons">
                        <input class="add-user" type="submit" href="kontrahenci.php" value="Dodaj">
                        <input class="cancel-user" value="Anuluj">
                </div>          

            </form>
            </section>
            <section class="update-panel">
            <h3 class="update-panel-title">Aktualizacja danych kontrahenta</h3>
            <h4 class="contracter-title"></h4>          
                <form action="editContractor.php" class="controls" method = 'POST'>
               <input type="text" name='old-nip' id="old-nip" class='old-nip'>
                    <div class="form-element">
                        <lebel for="nip">NIP</lebel><input class="inputform" id="nip" type="text" name="nip">
                    </div>
                    <div class="form-element">
                        <lebel for="regon">REGON</lebel><input class="inputform" id="regon" type="text" name="regon">
                    </div>
                    <div class="form-element">
                     <lebel for="name">NAZWA</lebel><input class="inputform" id="name" type="text" name="name">
                    </div>
                    <div class="form-element">
                        <lebel for="vat-payer">CZY PŁATNIK VAT?</lebel>
                            <input type="hidden" name="vat-payer" value= 'Nie'>	
							<input type="checkbox" name="vat-payer" value= 'Tak' id='vat-payer'>
                    </div>
                    <div class="form-element">
                        <lebel for="street">ULICA</lebel><input class="inputform" id="street" type="text" name="street">
                    </div>
                    <div class="form-element">
                        <lebel for="home-number">NUMER DOMU</lebel><input class="inputform" id="home-number" type="text" name="home-number">
                    </div>
                    <div class="form-element">
                        <lebel for="flat-number">NUMER MIESZKANIA</lebel><input class="inputform" id="flat-number" type="text" name="flat-number">
                    </div>
                    <div class="panel-buttons">
                        <input class="update-user" type="submit" href="kontrahenci.php" value="Aktualizuj">
                        <input class="cancel-update-user" value="Anuluj">
                </div>          

            </form>
            </section>




<section class="delete-panel">
    <h3 class="delete-title-panel">Czy chcesz usunąć kontrahenta?</h3>
    <h4 class="delete-contracter-title"></h4> 
    <form action="deleteContractor.php" method='POST'>   
    <input type="text" name='old-nip2' id="old-nip2" class='old-nip2'>      
    <div class="panel-buttons">
                        <input class="accept-delete" type="submit" href="kontrahenci.php" value="Usuń">
                        <input class="cancel-delete" type =" text" value="Anuluj">
                </div>    
    </form>
</section>



        </div>
    </main>
    <script src="script3.js"></script>
    <script src="script4.js"></script>  
</body>

</html>


