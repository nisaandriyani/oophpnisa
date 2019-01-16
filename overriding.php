<?php

class Produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
} 

class komik extends Produk {
	public $jumlahalaman;

	public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", $harga = 0, $jumlahalaman = 0) {
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->jumlahalaman = $jumlahalaman;
	}

	public function getInfoProduk() {
		$str = "komik : " . parent ::getInfoProduk() . " - {$this->jumlahalaman} halaman.";
		return $str;
	}
}

class Game extends Produk {
	public $waktumain;

	public function __construct($judul = "judul",$penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0) {
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->waktumain = $waktumain;
	}
	public function getInfoProduk() {
		$str = "Game : " . parent ::getInfoProduk()." ~ {$this->waktumain} Jam.";
		return $str;
	}
}
$produk1 = new Komik("ILYFROM", "Michelle zudith","Paramitha S", 45000,100);

$produk2 = new Komik("3600detik", "Steevan William","Nisa A",50000,55);

echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();


 ?>