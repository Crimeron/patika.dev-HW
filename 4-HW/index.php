<?php
class Sekil{
    protected $kenar=5;
    protected $kenar2=6;
    protected $yukseklik=3;
    protected $alan;
    protected $cevre;
}
class Dikdortgen extends Sekil
{
    public function dikdortgenAlan(){
        $this->alan = $this->kenar*$this->kenar2;
        return $this->alan;
    }
    public function dikdortgenCevre(){
        $this->cevre = $this->kenar*2+$this->kenar2*2;
        return $this->cevre;
    }
}
 class Ucgen extends Sekil
{
    public function ucgenAlan(){
        $this->alan = $this->kenar*$this->yukseklik/2;
        return $this->alan;
    }
    public function ucgenCevre(){
        $this->cevre = $this->kenar*3;
        return $this->cevre;
    }
}
 class Kare extends Sekil
{
    public function kareAlan(){
        $this->alan = $this->kenar*$this->kenar;
        return $this->alan;
    }
    public function kareCevre(){
        $this->cevre = $this->kenar*4;
        return $this->cevre;
    }
}
echo "First edge is 5, if exist second edge is 6, height is 3<br>";
$dik = new Dikdortgen();
echo "Rectangular area and perimeter:<br>";
echo $dik->dikdortgenAlan();
echo "<br>";
echo $dik->dikdortgenCevre();
echo "<br>";
$ucgen = new Ucgen();
echo "Square area and perimeter:<br>";
echo $ucgen->ucgenAlan();
echo "<br>";
echo $ucgen->ucgenCevre();
echo "<br>";
$kare = new Kare();
echo "Triangle area and perimeter:<br>";
echo $kare->kareAlan();
echo "<br>";
echo $kare->kareCevre();
echo "<br>";


?>