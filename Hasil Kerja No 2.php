<?php

	class Buku{
		

			public $jdl, $pnrbt, $nmpnls, $hal;
			public function __construct($jdl = "JUDUL", $pnrbt = "PENERBIT", $nmpnls = "NAMA PENULIS", $hal = "JUMLAH HALAMAN"){
				$this->jdl = $jdl;
				$this->pnrbt = $pnrbt;
				$this->nmpnls = $nmpnls;
				$this->hal = $hal;
			
			}
			public function getinfoBook(){

				$bku = "<br>JUDUL : {$this->jdl}, <br>PENERBIT : {$this->pnrbt}, <br>NAMA PENULIS : {$this->nmpnls}, <br>JUMLAH HALAMAN : {$this->hal}";

				return $bku;		
			}
	}

	Class BukuSatu extends Buku {

		public function getinfoBook(){
			$bku = "BUKU I : ".parent::getinfoBook();
			return $bku;
		
		}
	}
	class BukuDua extends Buku{

		public $rwyt;
		public function __construct($jdl, $pnrbt, $nmpnls, $hal, $rwyt){
			parent::__construct($jdl, $pnrbt, $nmpnls,$hal, $rwyt);
			$this->rwyt = $rwyt;
		}
		public function getinfoBook(){

			$bku = "BUKU II : ".parent::getinfoBook()."<br>RIWAYAT PENULIS : {$this->rwyt}";
			return $bku;
		}
	}	

	$bku1 = new BukuSatu("Pendidikan Kewarganegaraan", "Pustaka Mandiri", "Dr. Muhammad Idrus, M.Pd", "158 Halaman");
	$bku2 = new BukuDua("C++", "MIC Publishing", "Nicko Yp", "228 Halaman", "Penulis adalah seorang Pemrogrammer yang berasal dari Bandung lulusan dari Universitas Gadjah Madha. Penulis memulai karirnya pada tahun 2002 dan bukunya mulai dikenal pada tahun 2005 hingga sekarang");

	echo $bku1->getinfoBook();
	echo "<br>";
	echo "<br>";
	echo $bku2->getinfoBook();


?>