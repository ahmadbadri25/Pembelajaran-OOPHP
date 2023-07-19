<?php 

require_once 'app/init.php';

// $produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new game("Uncharted", "Neil Druckman", "Sony Druckman", 250000,50);

// $cetakProduk = new cetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

use app\service\user as serviceUser;
use app\produk\user as produkUser;

new serviceUser();
echo "<br>";
new produkUser();


// new app\produk\user();


?>