<?php

class samochod{
    public $id_marka,$marka_nazwa, $marka_rok, $kraj; 
    public $id_samochod, $id_model,$cena, $pojemnosc, $spalanie,$rok;
    public $VIN, $przebieg, $ilosc_paliwa, $moc;

    public function __construct(){
            
    }

    public function zapisz_marka($m,$m_rok, $kr){
       require 'baza.php';
        $this->marka_nazwa = $m;
        $this->marka_rok = $m_rok;
        $this->kraj = $kr;

       $sql = "INSERT INTO marka(`marka_nazwa`, `marka_rok`, `kraj`) VALUES ('$this->marka_nazwa',$this->marka_rok,'$this->kraj') ";
        echo $sql;
       $result = $conn->query($sql);
        
       if($result == true)  echo " Wysłano do bazy "; else echo " Błąd ";
  


    }



}



?>