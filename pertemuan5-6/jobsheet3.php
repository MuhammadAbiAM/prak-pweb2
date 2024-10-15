<?php
// Kelas induk 'Person' dengan properti $name yang bersifat protected
class Person {
    protected $name;

    // Konstruktor untuk inisialisasi properti $name
    public function __construct($name) {
        $this->name = $name;
    }

    // Method untuk mengambil nilai $name
    public function getName() {
        return $this->name;
    }
}

// Kelas turunan 'Mahasiswa' yang memperluas kelas 'Person' dan memiliki properti $nim (Nomor Induk Mahasiswa) yang bersifat private
class Mahasiswa extends Person {
    private $nim;

    // Konstruktor untuk menginisialisasi $name dari kelas induk dan $nim
    public function __construct($name, $nim) {
        parent::__construct($name); // Memanggil konstruktor dari kelas induk 'Person'
        $this->nim = $nim;
    }

    // Method untuk mengubah nilai $nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Method untuk mengambil nilai $nim
    public function getNim() {
        return $this->nim;
    }

    // Method untuk mendapatkan peran dengan format nama dan NIM
    public function getRole() {
        return "" . $this->name . " (NIM: " . $this->nim . ")";
    }
}

// Kelas turunan 'Dosen' yang juga memperluas kelas 'Person' dan memiliki properti $nidn (Nomor Induk Dosen Nasional) yang bersifat private
class Dosen extends Person {
    private $nidn;

    // Konstruktor untuk menginisialisasi $name dari kelas induk dan $nidn
    public function __construct($name, $nidn) {
        parent::__construct($name); // Memanggil konstruktor dari kelas induk 'Person'
        $this->nidn = $nidn;
    }

    // Method untuk mengubah nilai $nidn
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    // Method untuk mengambil nilai $nidn
    public function getNidn() {
        return $this->nidn;
    }

    // Method untuk mendapatkan peran dengan format nama dan NIDN
    public function getRole() {
        return "" . $this->name . " (NIDN: " . $this->nidn . ")";
    }
}

// Kelas abstrak 'Jurnal' yang berfungsi sebagai blueprint bagi jurnal mahasiswa dan jurnal dosen
abstract class Jurnal {
    abstract public function kelolaPengajuan(); // Method abstrak untuk pengelolaan pengajuan jurnal

    protected $judul;
    protected $penulis;

    // Konstruktor untuk menginisialisasi $judul dan $penulis
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
}

// Kelas turunan 'JurnalMahasiswa' yang memperluas kelas 'Jurnal' dan memiliki properti $jurusan
class JurnalMahasiswa extends Jurnal {
    private $jurusan;

    // Konstruktor untuk menginisialisasi $judul, $penulis, dan $jurusan
    public function __construct($judul, Mahasiswa $penulis, $jurusan) {
        parent::__construct($judul, $penulis);
        $this->jurusan = $jurusan;
    }

    // Implementasi method kelolaPengajuan
    public function kelolaPengajuan() {
        return "Pengajuan Jurnal {$this->judul} oleh Mahasiswa {$this->penulis->getName()} (NIM: {$this->penulis->getNim()}) Jurusan {$this->jurusan} sedang diproses";
    }
}

// Kelas turunan 'JurnalDosen' yang memperluas kelas 'Jurnal' dan memiliki properti $univ
class JurnalDosen extends Jurnal {
    private $univ;

    // Konstruktor untuk menginisialisasi $judul, $penulis, dan $univ
    public function __construct($judul, Dosen $penulis, $univ) {
        parent::__construct($judul, $penulis);
        $this->univ = $univ;
    }

    // Implementasi method kelolaPengajuan
    public function kelolaPengajuan() {
        return "Pengajuan jurnal {$this->judul} oleh Dosen {$this->penulis->getName()} (NIDN: {$this->penulis->getNidn()}) dari {$this->univ} sedang diproses";
    }
}

// Instansiasi objek
$mahasiswa = new Mahasiswa("Muhammad Ali", "23020826");
$dosen = new Dosen("Prof. Drs. Budi Siregar, S.T., M.Eng.", "123456789");

$jurnalMahasiswa = new JurnalMahasiswa("Sistem Informasi", $mahasiswa, "Teknik Informatika");
$jurnalDosen = new JurnalDosen("Belajar Pemrograman", $dosen, "Universitas Negeri");

// Menampilkan hasil output
echo $mahasiswa->getRole() . "<br>";
echo $jurnalMahasiswa->kelolaPengajuan() . "<br>";
echo $dosen->getRole() . "<br>";
echo $jurnalDosen->kelolaPengajuan() . "<br>";
?>
