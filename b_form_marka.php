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
        
        <form action="b_form_marka1.php" method="POST">
            <p>MARKA:</p> <input type="text" name="marka" pattern="[A-Za-z]{2,99}" required>
             <p>ROK POWSTANIA MARKI:</p> <input type="text" name="rok" pattern="[0-9]{4}" required>
             <p>KRAJ:</p> <input type="text" name="kraj" pattern="[A-Za-z]{2,99}" required>
           
            
            <input type="submit" value="Wyślij">
            
            </form>
    
    </div>
    
    <div class="prawa"><p>ddd</p></div>
    

</div>

    
</body>
</html>





