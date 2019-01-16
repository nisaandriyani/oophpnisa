<?php 

class produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}


}

$produk1 = new produk("ILYFROM", "Michelle Zudith", "Paramitha S", 45000);
$produk2 = new produk("3600detik", "Steveen William", "Cokro Adj", 500000);
$produk3 = new produk("London Love Story", "Dimas Anggara", "Nisa A", 55000);

echo "komik : " . $produk1->getLabel();
echo "<br";
echo "game : " . $produk2->getLabel();
echo "<br";
var_dump($produk3);

 ?>