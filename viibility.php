<?php 
class produk {
	public $judul,
	       $penulis,
	       $penerbit;

	protected $diskon = 0;

	private $harga;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {

		$this->judul = $judul = $judul;
		$this->penulis = $penerbit;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}
	public function getharga() {
		return $this->harga - ( $this->harga * $this->diskon / 100 );
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

}

class komik extends produk {
	public $jumlahalaman;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahalaman = 0 ) {

		parent:: __construct( $judul, $penulis, $penerbit, $this->jumlahalaman = $jumlahalaman);
	}
	public function getInfoProduk(){
		$str = "buku :" . parent::getInfoProduk() . " - $this->jumlahalaman} halaman.";
		return $str;
	}
}

class Game extends produk {
	public $waktumain;

	public function __construct( $judul = "judul", $penulis ="penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0 ){
		parent::__construct( $judul, $penulis, $penerbit, $harga );
		$this->waktumain = $waktumain;

	}

	public function setdiskon( $diskon ) {
		$this->diskon = $diskon;
	}

	public function getInfoProduk() {
		$str = "Game : " . parent::getInfoProduk() . " - {$this->waktumain} jam.";
		return $str;
	}
 }


 class CetakInfoProduk {
 	public function cetak( produk $produk) {
 		$str = "{$produk->judul}| {$produk->getLabel()} (Rp. {$produk->harga})";
 	}
 }
 $produk1 = new Komik("ILYFROM", "Michelle Zudith","Paramitha S",45000,50);

 $produk2 = new Game("3600detik","Steevan William","Nisa A",50000,55);

 echo $produk1->getInfoProduk();
 echo "<br>";
 echo $produk2->getInfoProduk();
 echo "<hr>";

 $produk2->setdiskon(30);
 echo $produk2->getharga();


 ?>