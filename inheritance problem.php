<?php

class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jumlahalaman,
		   $waktumain,
		   $tipe;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",$harga = 0, $jumlahalaman = 0, $waktumain = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jumlahalaman = $jumlahalaman;
		$this->waktumain = $waktumain;
		$this->tipe = $tipe;

	}
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if($this->tipe == "Komik") {
			$str .= "- {$this->jumlahalaman} halaman.";
		}else if ($this->tipe == "Game") {
			$str .= " ~{$this->waktumain} Jam.";
		}
		return $str;
	}
} 

class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "{Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("ILYFROM","Michelle Zudith","Paramitha S", 45000,100, 0, "Komik");

$produk2 = new Produk("3600detik","Steevan William","Nisa A", 50000,0,55, "Game");

echo $produk1->getInfoLengkap();
echo "<hr>";
echo $produk2->getInfoLengkap();

 ?>