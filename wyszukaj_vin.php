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
    
    <form action = "wyszukaj_vin1.php" method = "POST">
        <input type="text" name="vin"  maxlength="17" pattern="[A-Za-z0-9]{17}" >
        <input type = "submit" value="Wyślij"> 

    </form>


    </div>
    
    <div class="prawa"><p>ddd</p></div>
    

</div>

    
</body>
</html>