<?php 

//jumlah produk
//buku
//komik

class produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new produk();
// $produk1->judul = "ILYFROM";
//var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "3600detik";
// $produk2->tambahproperty ="hahaha";
//var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "ILYFROM";
$produk3->penulis = "Michelle Zudith";
$produk3->penerbit = "Paramitha S";
$produk3->harga = 450000;

echo "komik : " . $produk3->getLabel();
echo "<hr>";
echo "game : " . $produk3->getLabel();