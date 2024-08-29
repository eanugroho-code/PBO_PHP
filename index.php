<!DOCTYPE html>
<html>
<body>
    <?php
class Mobil{
    public $merk;
    public $warna;

    public function setMerk($merk){
        $this->merk = $merk;
    }
    public function getMerk(){
        return $this->merk;
    }

}
?>
<h1><?php



$mobilSaya = new Mobil();
$mobilSaya -> setMerk('Toyota');

echo $mobilSaya ->getMerk();




?></h1>


</body>
</html>

