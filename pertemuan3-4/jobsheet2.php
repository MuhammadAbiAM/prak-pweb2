<?php
// Kelas abstrak Pengguna yang diimplementasikan oleh Mahasiswa dan Dosen
abstract class Pengguna {
    abstract public function aksesFitur();
    
    protected $nama; // Atribute atau properti
    
    public function __construct($nama) { // Konstruktor untuk menginisialisasi nama
        $this->nama = $nama;
    }

    public function getNama() { // Metode getter
        return $this->nama;
    }
}

// Kelas Mahasiswa menggunakan konsep inheritance dari kelas Pengguna
class Mahasiswa extends Pengguna
{
    // Atribut atau properti
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) { // Constructor
        parent::__construct($nama);  // Panggil konstruktor kelas induk Pengguna
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode getter
    public function getNama() {
        return $this->nama;
    }
    public function getNim() {
        return $this->nim;
    }
    public function getJurusan() {
        return $this->jurusan;
    }

    // Metode setter
    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function setNim($nim) {
        $this->nim = $nim;
    }
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() { // Metode untuk menampilkan data mahasiswa
        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
    }

    public function aksesFitur() { // Implementasi metode aksesFitur, sesuai dengan peran mahasiswa
        return "Mahasiswa dapat mengakses fitur data mahasiswa";
    }
}

// Kelas Dosen meng-extend kelas Pengguna
class Dosen extends Pengguna
{
    // Atribut atau properti
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) { // Konstruktor untuk inisialisasi nama dan mata kuliah dosen
        parent::__construct($nama); // Panggil konstruktor kelas induk (Pengguna)
        $this->mataKuliah = $mataKuliah;
    }

    public function getMataKuliah() {  // Metode getter
        return $this->mataKuliah;
    }

    public function aksesFitur() { // Implementasi metode aksesFitur untuk dosen
        return "Dosen dapat mengakses data dosen dan data mahasiswa";
    }
}

// Instansiasi objek
$mahasiswa = new Mahasiswa("Muhammad Abi", "230202068", "Teknik Informatika");
echo $mahasiswa->tampilkanData() . "<br>" . "<br>";
echo "Data Mahasiswa telah diubah" . "<br>";
$mahasiswa->setNama("Abi Ganteng");
$mahasiswa->setNim("999999999");
$mahasiswa->setJurusan("Teknik Sastra Mesin");
echo "Nama: ";
echo $mahasiswa->getNama() . "<br>";
echo "NIM: ";
echo $mahasiswa->getNim() . "<br>";
echo "Jurusan: ";
echo $mahasiswa->getJurusan() . "<br>". "<br>";
echo $mahasiswa->aksesFitur() . "<br>". "<br>";

$dosen = new Dosen("Pak Abda'u", "PWEB");
echo "Nama: ";
echo $dosen->getNama() . "<br>";
echo "Mata Kuliah: ";
echo $dosen->getMataKuliah() . "<br>". "<br>";
echo $dosen->aksesFitur() . "<br>";