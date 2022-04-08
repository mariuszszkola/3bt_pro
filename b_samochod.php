<?php

class samochod{
    public $id_marka,$marka_nazwa, $marka_rok, $kraj; 
    public $id_samochod, $id_model , $model_nazwa,$cena, $pojemnosc, $spalanie,$rok;
    public $VIN, $przebieg, $ilosc_paliwa, $moc;

    public function __construct(){
            
    }

    public function zapisz_marka($m,$m_rok, $kr){
       require 'baza.php';
        $this->marka_nazwa = $m;
        $this->marka_rok = $m_rok;
        $this->kraj = $kr;

       $sql = "INSERT INTO marka(`marka_nazwa`, `marka_rok`, `kraj`) VALUES ('$this->marka_nazwa',$this->marka_rok,'$this->kraj') ";
      // echo $sql;
       $result = $conn->query($sql);
        
       if($result == true)  echo " Wysłano do bazy "; else echo " Błąd ";
    }

    public function pobierz_marke(){
        require 'baza.php';
        $sql = "Select * from marka";
        // echo $sql;
      //  echo "dssd";
        $result = $conn->query($sql);
        echo "<select name='ma'>";
        foreach ($result as $key){
            $klucz = $key["id_marka"];
           // echo $klucz. " ";
            echo "<option value='$klucz'>" . $key["marka_nazwa"] . "<br> </option>";

        }
        echo "</select>";

       // if($result == true)  echo " Wysłano do bazy "; else echo " Błąd ";
     }

     public function zapisz_model($id_marka,$model){
        require 'baza.php';
         $this->model_nazwa = $model;
         $this->id_marka = $id_marka;
         
 
        $sql = "INSERT INTO model(`id_marka`, `model_nazwa`) VALUES ($this->id_marka,'$this->model_nazwa') ";
       // echo $sql;
        $result = $conn->query($sql);
         
        if($result == true)  echo " Wysłano do bazy "; else echo " Błąd ";
     }


}



?>