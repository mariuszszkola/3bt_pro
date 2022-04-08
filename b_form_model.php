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
        
    <?php
    require 'b_samochod.php';
    $s1 = new samochod();

    
    
    ?>


        <form action="b_form_model1.php" method="POST">
            

        <p>MARKA: </p><?php $s1->pobierz_marke(); ?> 
               <p>MODEL:</p> <input type="text" name="model" pattern="[A-Za-z0-9]{2,99}" required>
           
            
            <input type="submit" value="Wyślij">
            
            </form>
    
    </div>
    
    <div class="prawa"><p>ddd</p></div>
    

</div>

    
</body>
</html>





