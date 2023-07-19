<?php 


class produk {

    private  $judul = "judul",
            $penulis = "penulis",
            $penerbit= "penerbit";
            

    private $harga = 0,
            $diskon = 0;



    public function __construct( $judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }

    // setJudul untuk mengubah judul yang dipravite
    public function setJudul($judul){
        // dibawah script yang dikomenkan ini untuk jika untuk mengganti judul harus menggunakan string
        // if(!is_string($judul)){
        //     throw new Exception("judul Harus String");
        // }
        $this->judul = $judul;
    }


    // menampilkan judul yang diprivate
    public function getJudul(){
        return $this->judul;
    }

    // setpenulis untuk mengubah penulis yang di private
    public function setPenulis($penulis){
            return $this->penulis = $penulis;
        }

    // getpenulis untuk menampikan yang diprivate
    public function getPenulis(){
        return $this->penulis;
    }

    // setpenerbit untuk mengubah penerbit yang di private
    public function setPenerbit($penerbit){
            return $this->penerbit = $penerbit;
        }

    // getpenerbit untuk menampikan yang diprivate
    public function getPenerbit(){
            return $this->penerbit;
    }
    
    // setdiskon untuk mengubah diskon yang di private
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    // getdiskon untuk mengubah diskon yang di private
    public function getDiskon(){
        return $this->diskon;
    }

    // setharga untuk mengubah harga yang di private
    public function setHarga($harga){
            return $this->harga = $harga;
        }

        // HARGA
        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
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
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        parent::__construct( $judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;


    }
    public function getInfoProduk() {
        $str = "Komik  : ". parent::getInfoProduk()."  ~ {$this->jmlHalaman} Halaman.";
        return $str; 
    }
}

// class child
class game extends produk {
    public $waktuMain;
    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct( $judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;

    }


    
    public function getInfoProduk() {
        $str = "Game  : ". parent::getInfoProduk(). " ~ {$this->waktuMain} Jam.";
        return $str; 
    }

}



class cetakInfoProduk {
    public function cetak( produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} {$produk->harga}";
        return $str;
        
    }
}





$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new game("Uncharted", "Neil Druckman", "Sony Druckman", 250000,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


// untuk mendaptkan harga diskon
$produk2->setDiskon(50);
// untuk mendapatkan harga
echo $produk2->getHarga();
echo "<hr>";


// ini setter untuk mengubah judul yang diprivate
$produk1->setPenulis("ahmad badri");
// ini GET untuk mendaptkan judul yang dipravetkan
echo $produk1->getPenulis();





?>