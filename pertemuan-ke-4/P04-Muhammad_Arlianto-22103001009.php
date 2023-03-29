//Tanaman Buah Cucurbitaceae
<br>
//Parent adn child
<br>
<?php

class Cucurbitaceae{
    public $nama;

    function __construct($nama)
    {
        $this->nama = $nama;
    }

    function getData(){
        return "$this->nama";
    }
}



class Semangka extends Cucurbitaceae{
    public $kulitHalus;
    function __construct($nama, $kulitHalus)
    {
       parent::__construct($nama);
       $this->kulitHalus =$kulitHalus;
    }
    function getData()
    {
        return parent::getData() . " - {$this->kulitHalus} Semangka";
    }

}
class Melon extends Cucurbitaceae{
    public $kulitKasar;
    function __construct($nama, $kulitKasar)
    {
       parent::__construct($nama);
       $this->kulitKasar =$kulitKasar;
    } 
    function getData()
    {
        return parent::getData() . " - {$this->kulitKasar} Melon";
    }
}



$Cucurbitaceae1 = new Semangka("Semangka", "Kulit Halus");
$Cucurbitaceae2 = new Melon("Melon", "Kulit Kasar");


echo $Cucurbitaceae1->getData();
echo $Cucurbitaceae2->getData();



?>