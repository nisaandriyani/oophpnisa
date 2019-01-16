<?php 

class Produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

		   public function getLabel() {
		   	return "$this->penulis, $this->penerbit";
		   }
}

// $produk1 = new Produk();
// $produk1->judul = "MATI";
//var_dump($produk1);

//$produk1 = new Produk();
//$produk2->judul = "Uncharted";
//$produk->tambahProperty = "ahahha";
//var_dump($produk2);


$produk3 = new Produk();
$produk3->judul = "ILYFROM";
$produk3->penulis = "Michelle Zudith";
$produk3->penerbit = "Paramitha S";
$produk3->harga = 45000;
var_dump($produk3);

$produk2 = new Produk();
$produk2->judul = "3600detik";
$produk2->penulis = "Steevan William";
$produk2->penerbit = "Nisa A";
$produk2->harga = 50000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();

 ?>