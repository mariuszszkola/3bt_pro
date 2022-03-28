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
        <?php require "menu.php";
                require "11o.php";
                ?>    
    </ul>
        </div> <!--end menu --></a>



    </div>
    <div class="srodek">
    
    <?php  


$s = new samochod("x","x",1111, 11,"1.1",111, "123123123432222",1223 , 22, 2);

    $z = $_POST['vin'];
    $s -> odczyt_vin($z);
    
    ?>

    </div>
    
    <div class="prawa"><p>ddd</p></div>
    

</div>

    
</body>
</html>