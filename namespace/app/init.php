<?php 

// require_once 'produk/infoProduk.php';
// require_once 'produk/produk.php';
// require_once 'produk/komik.php';
// require_once 'produk/game.php';
// require_once 'produk/cetakInfoProduk.php';
// require_once 'produk/user.php';

// require_once 'service/user.php';




spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'produk/' . $class . '.php';
});



spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once  'service/' . $class . '.php';
});

?>