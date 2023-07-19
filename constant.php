<?php 
// // define
// define('NAMA', 'Ahmad Badri');
// echo NAMA;

// echo "<br>";
// // constant
// const UMUR = 32;
// echo UMUR;





// class coba {
//     const NAMA = 'ahmad ';
// }

// echo coba::NAMA;


// echo __FILE__;


// function coba() {
//     return __FUNCTION__;    
// }

// echo coba();

class coba {
    public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;

?>