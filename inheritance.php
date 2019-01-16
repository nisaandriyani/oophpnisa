<?php 

class produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga,
	       $jumlahalaman,
	       $waktumain;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahalaman = 0, $waktumain = 0 ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jumlahalaman = $jumlahalaman;
		$this->waktumain = $waktumain;
	}
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
		return $str;
	}
}

class buku extends produk {
	public function getInfoProduk() {
		$str = "buku :{$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jumlahalaman} halaman.";
		return $str;
	}
}

class Game extends produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->waktumain} jam.";
		return $str; 
	}
}

class CetakInfoProduk {
	public function cetak( produk $produk ) {
		$str = "{$produk->judul}| {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new komik("ILYFROM", "Michelle Zudith", "Paramitha S", 450000,100, 0);
$produk2 = new Game("3600detik", "Steevan Wiliam", "Nisa A", 50000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

 ?>