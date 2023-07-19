<?php 


class produk {

    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit= "penerbit",
            $harga = 0,
            $jmlHalaman = 0,
            $waktuMain = 0;


    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain,){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;

        
    }

    public function getLabel() {
            return "$this->penulis, $this->penerbit";
            
        }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;

    }


}

// class child
class komik extends produk{
    public function getInfoProduk() {
        $str = "Komik  : ". parent::getInfoProduk()."  ~ {$this->jmlHalaman} Halaman.";
        return $str; 
    }
}

// class child
class game extends produk {
    public function getInfoProduk() {
        $str = "Game  : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str; 
    }

}



class cetakInfoProduk {
    public function cetak( produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} {$produk->harga}";
        return $str;
        
    }
}





$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new game("Uncharted", "Neil Druckman", "Sony Druckman", 250000, 0, 50, "Game");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();




?>