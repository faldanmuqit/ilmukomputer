<?php

	class Mahasiswa{
		//class mahasiswa adalah untuk membuat sebuah class baru atau sebuah sistem kerja//

			public $nim, $nama, $prodi, $asalSma;
			//Baris ini untuk menentukan variabel variabel yang digunakan//

			public function __construct($nim = "NIM", $nama = "NAMA", $prodi = "PRODI", $asalSma = "Asal SMA"){
				//Untuk menentukan tujuan/pasangan kata dan variabel yang telah dibuat//

				$this->nim = $nim;
				$this->nama = $nama;
				$this->prodi = $prodi;
				$this->asalSma = $asalSma;
				//merupakan arti/pasangan variabel//

			}
			public function getinfoMahasiswa(){

				$mhs = "NAMA : {$this->nama}, NIM : {$this->nim}, PRODI : {$this->prodi}, Asal SMA : {$this->asalSma}";

				return $mhs;
				//Untuk menampilkan atau menyusun/susunan Kata yang akan dimunculkan berikutnya//
			}
	}

	Class MahasiswaStrataSatu extends Mahasiswa {
		//Merupakan kelas baru//

		public function getInfoMahasiswa(){
			$mhs = "Mahasiswa S1 : ".parent::getInfoMahasiswa();
			return $mhs;
			//Sebuah perintah untuk menampilkan/mencocokkan variabel yang ada atau yang akan digunakan pada public function getInfoMahasiswa//
		}
	}
	class MahasiswaStrataDua extends Mahasiswa{
		//Merupakan kelas baru//

		public $asalS1;
		public function __construct($nim, $nama, $prodi, $asalSma, $asalS1){
			parent::__construct($nim, $nama, $prodi, $asalSma);
			$this->asalS1 = $asalS1;
			//yaitu perintah untuk menambahkan 1 kata/perintah baru yang akan ditampilkan yaitu AsalS1//
		}
		public function getInfoMahasiswa(){

			$mhs = "Mahasiswa S2 : ".parent::getInfoMahasiswa().", Asal S1 : {$this->asalS1}";
			return $mhs;
			//Untuk menampilkan perintah baru yaitu Mahasiswa S2, sesuai sususan kata yang telah ditentukan dan ditambahkan sebuah kata baru yaitu AsalS1//
		}
	}	

	$mahasiswa1 = new MahasiswaStrataSatu("F1G118061", "Faldan Mqqit", "Ilmu Komputer", "SMA 2 Kendari");
	$mahasiswa2 = new MahasiswaStratadua("F1G118066", "FaldanM", "Ilmu Komputer", "SMA 2 Barangka", "UHO");
	//merupakan hasil dari program, hasil ditampilkan sesuai urutan urutan yang telah ditulis/ditetapkan//

	echo $mahasiswa1->getInfoMahasiswa();
	//Untuk menampilkan data yang ada pada mahasiswa 1, yang tidak memiliki asal S1//
	echo "<br>";
	//untuk membuat baris baru//
	echo $mahasiswa2->getInfoMahasiswa();
	//Untuk menampilkan data yang ada pada mahasiswa 2, yang memiliki asal S1//

?>