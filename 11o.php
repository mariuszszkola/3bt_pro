<?php

class samochod{
    public $marka, $model, $cena, $pojemnosc, $spalanie,$rok;
    public $VIN, $przebieg, $ilosc_paliwa, $moc;

    public function __construct($marka, $model,$rok, $cena, $poj,$moc, $VIN, $przebieg, $ilosc, $spalanie){
        $this->marka = $marka;
        $this->model = $model;
        $this->cena = $cena;
        $this->pojemnosc = $poj;
        $this->VIN = $VIN;
        $this->przebieg = $przebieg;
        $this->ilosc_paliwa = $ilosc;
        $this->spalanie = $spalanie;
        $this->rok = $rok;
        $this->moc = $moc;
        
    }

    public function zapisz(){
       $plik = fopen("dane.txt","a");

        fwrite($plik, "\r\n". $this->marka . ",");
        fwrite($plik, $this->model . ",");
        fwrite($plik, $this->cena . ",");
        fwrite($plik, $this->pojemnosc . ",");
        fwrite($plik, $this->VIN . ",");
        fwrite($plik, $this->przebieg . ",");
        fwrite($plik, $this->ilosc_paliwa . ",");
        fwrite($plik, $this->spalanie . ",");
        fwrite($plik, $this->rok . ",");
        fwrite($plik, $this->moc . ",");
        fclose($plik);
    }

    public function odczyt(){
        $plik = fopen("dane.txt","r");

        $dane = fread($plik,filesize("dane.txt"));
        $dane1 = explode("\n",$dane);
        $i=1;
       $wielkosc = sizeof($dane1);
        while ($i < $wielkosc){
        $tab = explode(",", $dane1[$i]);
        $this->marka = $tab[0]; 
        $this->model = $tab[1];
        $this->cena = $tab[2]; 
        $this->pojemnosc =  $tab[3]; 
        $this->VIN = $tab[4]; 
        $this->przebieg = $tab[5]; 
        $this->ilosc_paliwa = $tab[6]; 
        $this->spalanie = $tab[7]; 
        $this->rok = $tab[8]; 
        $this->moc = $tab[9];      
        $this->wyswietl();
        
        $i++;
        }
    } 

    public function odczyt_vin($vin){
        $plik = fopen("dane.txt","r");
        $z=0;
        $dane = fread($plik,filesize("dane.txt"));
        $dane1 = explode("\n",$dane);
        $i=1;
        $wielkosc = sizeof($dane1);
         while ($i < $wielkosc){
          $pos = strpos($dane1[$i], $vin);
          if($pos != false){
              $z=1;
            $tab = explode(",", $dane1[$i]);
            $this->marka = $tab[0]; 
            $this->model = $tab[1];
            $this->cena = $tab[2]; 
            $this->pojemnosc =  $tab[3]; 
            $this->VIN = $tab[4]; 
            $this->przebieg = $tab[5]; 
            $this->ilosc_paliwa = $tab[6]; 
            $this->spalanie = $tab[7]; 
            $this->rok = $tab[8]; 
            $this->moc = $tab[9];      
            $this->wyswietl();
            
            

          }  
          
          $i++;
         }
     
         if ($z==0) echo "brak vin";
        
         } 

     function wyswietl(){
        echo "<BR>***********************<br>";
        echo "* MARKA: $this->marka <BR> ";
        echo "* MODEL: $this->model <BR>";
        echo "* ROK PRODUKCJI: $this->rok <BR>";
        echo "* CENA: $this->cena <BR>";
        echo "* POJEMNOŚĆ: $this->pojemnosc <BR>";
        echo "* MOC SILNIKA: $this->moc <BR>";
        echo "* VIN: $this->VIN <BR>";
        echo "* PRZEBIEG: $this->przebieg <BR>";
        echo "* ILOŚĆ PALIWA: $this->ilosc_paliwa <BR>";
        echo "* SPALNIE NA 100 km: $this->spalanie l <br>";
    }

    function tankuj($ile){
        $this->ilosc_paliwa = $this->ilosc_paliwa + $ile;
        echo "Zatankowano $ile litrów więc w zbirniku jest $this->ilosc_paliwa <br>";
    }

    function jedz($ilosc_kilometrow){
        $this -> przebieg = $this -> przebieg + $ilosc_kilometrow;
        $this -> ilosc_paliwa = $this -> ilosc_paliwa - (($ilosc_kilometrow/100) * $this->spalanie);
        $sp = (($ilosc_kilometrow/100) * $this->spalanie);
        echo "Smochód przejechał $ilosc_kilometrow km i spalił $sp l<br>";
    }


} // koniec klasy


//$samochod1->ilosc_paliwa =30;  //nie można tak zmienić ilości paliwa ponieważ składowa ilosc_paliwa jest składową
                                    //typu private


class ciezarowki extends samochod{
public $ilosc_osi;

public function __construct($marka, $model,$rok, $cena, $poj,$moc, $VIN, $przebieg, $ilosc, $spalanie,$ilosc_osi){
    $this->marka = $marka;
    $this->model = $model;
    $this->cena = $cena;
    $this->pojemnosc = $poj;
    $this->VIN = $VIN;
    $this->przebieg = $przebieg;
    $this->ilosc_paliwa = $ilosc;
    $this->spalanie = $spalanie;
    $this->rok = $rok;
    $this->moc = $moc;
    $this->ilosc_osi = $ilosc_osi;
    
}




}



?>