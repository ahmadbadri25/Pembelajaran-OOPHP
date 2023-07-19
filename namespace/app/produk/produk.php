<?php 
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

?>