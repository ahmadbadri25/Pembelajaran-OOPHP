<?php 

// require_once 'produk/infoProduk.php';
// require_once 'produk/produk.php';
// require_once 'produk/komik.php';
// require_once 'produk/game.php';
// require_once 'produk/cetakInfoProduk.php';




spl_autoload_register(function($class){
    require_once 'produk/' . $class . '.php';
});

?>