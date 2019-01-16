 <?php

 class Produk {
 	private $judul,
 			$penulis,
 			$penerbit,
 			$harga,
 			$diskon = 0;

 	public function __construct($judul = "judul", $penulis = "penulis", $penerbit ="penerbit",$harga = 0) {
 		$this->judul = $judul;
 		$this->penulis = $penulis;
 		$this->penerbit = $penerbit;
 		$this->harga = $harga;
 	}

 	public function setJudul($judul) {
 		$this->judul = $judul;
 	}

 	public function getJudul() {
 		return $this->judul;
 	}

 	public function setPenulis($penulis) {
 		$this->penulis = $penulis;
 	}

 	public function getPenulis() {
 		return $this->penulis;
 	}

 	public function setPenerbit($penerbit) {
 		$this->penerbit = $penerbit;
 	}

 	public function getPenerbit() {
 		$this->penerbit = $penerbit;
 	}

 	public function setDiskon($diskon) {
 		$this->diskon = $diskon;
 	}

 	public function getDiskon() {
 		return $this->diskon;
 	}

 	public function setHarga($harga) {
 		$this->harga = $harga;
 	}

 	public function getharga() {
 		return $this->harga - ($this->harga * $this->diskon / 100);
 	}

 	public function getLabel() {
 		return "$this->penulis, $this->penerbit";
 	}

 	public function getInfoProduk() {
 		// komik : ILYFROM | Michelle Zudith (Rp. 45000) - 274 halaman.
 		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

 		return $str; 
 	}
 } 

 class komik extends Produk {
 	public $jumlahalaman;

 	public function __construct($judul = "judul", $penulis= "penulis",$penerbit = "penerbit", $harga = 0, $jumlahalaman = 0) {

 		parent:: __construct($judul, $penulis,$penerbit,$harga);
 		$this->jumlahalaman = $jumlahalaman;
 	}

 	public function getInfoProduk() {
 		$str = "Komik : " . parent ::getInfoProduk() . " - {this->jumlahalaman} Halaman.";
 		return $str;
 	}
 }

 class Game extends Produk {
 	public $waktumain;

 	public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", $harga = 0, $waktumain = 0) {
 		parent::__construct($judul,$penulis,$penerbit,$harga);
 	}

 	public function getInfoProduk() {
 		$str = "Game : " . parent ::getInfoProduk() . " ~ {$this->waktumain} Jam.";
 		return $str;
 	}
 }

 class CetakInfoProduk {
 	public function cetak(Produk $produk) {
 		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$Produk->harga})";
 		return $str;
 	}
 }

 $produk1 = new Komik("ILYFROM", "Michelle Zudith", "Paramitha S", 45000,274);

 $produk2 = new Game("3600detik", "Steevan William", "Nisa A", 50000,55);

 echo $produk1->getInfoProduk();
 echo "<br>";
 echo $produk2->getInfoProduk();
 echo "<hr>";

 $produk2->setDiskon(30);
 echo $produk2->getharga();
 echo "<hr>";

 echo $produk1->getPenulis();

  ?>