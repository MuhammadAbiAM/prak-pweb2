<?php
//Definisi Kelas
class Mahasiswa {
    
    //Atribut atau properti
    private $nama;
    private $nim;
    private $jurusan;
    
    //Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    
    //Metode atau Function
    public function tampilkanData() {
        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
    }
    
    public function updateJurusan($jurusan_baru) {
        $this->jurusan = $jurusan_baru;
    }
    
    public function setNim($nim) {
        $this->nim = $nim;
    }
}

//Instansiasi Objek
echo "Data Mahasiswa Awal". "<br>";
$mahasiswa1 = new Mahasiswa("Muhammad Abi", "230202068", "Teknik Informatika");

echo $mahasiswa1->tampilkanData(). "<br>". "<br>";
$mahasiswa1->updateJurusan("Teknik Mesin");
$mahasiswa1->setNim("230966977");
echo "Data Mahasiswa setelah diperbaruhi". "<br>";
echo $mahasiswa1->tampilkanData(). "<br>". "<br>";


//Tugas

class Dosen {
    
    private $nama;
    private $nip;
    private $mataKuliah;
    
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    
    public function tampilkanDosen() {
        return "Nama: $this->nama <br> NIP: $this->nip <br> Mata Kuliah: $this->mataKuliah";
    }
}

echo "Data dosen". "<br>";
$dosen1 = new Dosen("Pak Abda'u", "123456789", "PWEB");
echo $dosen1->tampilkanDosen(). "<br>";
?>