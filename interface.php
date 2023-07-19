<?php 


// class interface
interface infoProduk {
    public function getInfoProduk();
}

abstract class produk {

    protected  $judul = "judul",
            $penulis = "penulis",
            $penerbit= "penerbit",
            $harga = 0,
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


    abstract public function getInfo();


}

// class child
class komik extends produk implements infoProduk {
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        parent::__construct( $judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;


    }

    
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;

    }

    public function getInfoProduk() {
        $str = "Komik  : ". $this->getInfo()."  ~ {$this->jmlHalaman} Halaman.";
        return $str; 
    }
}

// class child
class game extends produk implements infoProduk {
    public $waktuMain;
    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct( $judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;

    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;

    }


    
    public function getInfoProduk() {
        $str = "Game  : ". $this->getInfo(). " ~ {$this->waktuMain} Jam.";
        return $str; 
    }

}


// class child cetak
class cetakInfoProduk {

    public $daftarProduk = array();

    public function tambahProduk( produk  $produk){
        $this->daftarProduk[]= $produk;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";
        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        
        return $str;
        
    }
}





$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new game("Uncharted", "Neil Druckman", "Sony Druckman", 250000,50);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();





?>