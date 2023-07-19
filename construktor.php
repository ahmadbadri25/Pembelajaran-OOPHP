<?php 


class produk {

    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit= "penerbit",
            $harga = 0 ;


    public function __construct( $judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }

    public function getLabel() {
            return "$this->penulis, $this->penerbit";
            
        }


}

$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new produk("Uncharted", "Neil Druckman", "Sony Druckman", 250000);

echo "Komik :". $produk3->getLabel();
echo "<br>";
echo "Game :". $produk4->getLabel();


?>