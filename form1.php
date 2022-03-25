<?php
require '11o.php';


$samochod1 = new samochod($_POST['marka'], $_POST['model'],$_POST['rok'], $_POST['cena'], $_POST['pojemnosc'],$_POST['moc'], $_POST['vin'],$_POST['przebieg'] , $_POST['ilosc_paliwa'], $_POST['spalanie']);
$samochod1->zapisz($samochod1->marka,
                    $samochod1->model,
                    $samochod1->rok,
                    $samochod1->cena,
                    $samochod1->pojemnosc,
                    $samochod1->moc,
                    $samochod1->VIN,
                    $samochod1->przebieg,
                    $samochod1->ilosc_paliwa,
                    $samochod1->spalanie
                );


//dodatkowa zmiana
//nowa zmian
echo "XXXXXXXXXXXXXXXXXXXXXXXXXXX<BR><BR>";

$samochod1->odczyt_vin("aaaaaaaaaaaaaaaaa");


?>