<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane samochodow</title>
</head>
<body>


<header>
    <div class="gora">
<p>ddd</p>

    </div>
</header>

<div class="zawartosc">
    <div class="lewa">
        
    <div class="menu">
        <ul>
            <?php require "menu.php"?>  
        </ul>
        </div> <!--end menu --></a>



    </div>
    <div class="srodek">
        
        <form action="form1.php" method="POST">
            <p>MARKA:</p> <input type="text" name="marka" pattern="[A-Za-z]{2,99}" required>
            <p>MODEL:</p> <input type="text" name="model" pattern="[A-Za-z0-9]{1,99}" required>
            <p>ROK PRODUKCJI:</p> <input type="text" name="rok" pattern="[0-9]{4}" required>
            <p>CENA:</p> <input type="text" name="cena" pattern="[0-9]{1,6}">
            <p>POJEMNOŚĆ SILNIKA:</p> <input type="text" name="pojemnosc" pattern="[A-Za-z0-9.]{1,99}" required>
            <p>MOC SILNIKA:</p> <input type="text" name="moc" pattern="[0-9]{1,4}" required>
            <p>VIN:</p> <input type="text" maxlength="17" name="vin" pattern="[A-Za-z0-9]{17}" required>
            <p>PRZEBIEG:</p> <input type="text" name="przebieg" pattern="[0-9]{1,6}" >
            <p>ILOŚĆ PALIWA:</p> <input type="text" name="ilosc_paliwa" pattern="[0-9]{1,3}">
            <p>SPALANIE:</p> <input type="text" name="spalanie" pattern="[0-9]{1,2}" required>
            
            
            <input type="submit" value="Wyślij">
            
            </form>
    
    </div>
    
    <div class="prawa"><p>ddd</p></div>
    

</div>

    
</body>
</html>





