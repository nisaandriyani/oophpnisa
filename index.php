<?php 
require_once 'App/init.php';
// $produk1 = new Komik("ILYFROM", "Michelle Zudith", "Paramitha S", 45000,274);

// $produk2 = new Game("3600d3tik", "Steevan William", "Nisa A", 50000,55);

// $cetakProduk = new CetakInfoProduk();
// cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();

 ?>