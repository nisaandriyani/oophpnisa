<?php 

//define ('NAMA', 'NISA ANDRIYANI');
//echo NAMA;

//echo "<br>";

//const UMUR = 16;
//eco UMUR;


//class Coba {
//const NAMA = 'NISA ANDRIYANI';
// }

//echo Coba::NAMA;



// echo__FILE__;


//function Coba() {
//return__FUNCTION__;
//}

//echo Coba();

class Coba {
	public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;

 ?>