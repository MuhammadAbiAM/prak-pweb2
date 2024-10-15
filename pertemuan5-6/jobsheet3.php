<?php 
class Person {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() { 
        return $this->name; 
    }
}
class Mahasiswa extends Person {
    private $nim;
    
    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }
    
    public function setNim($nim) { 
        $this->nim = $nim; 
    }
    public function getNim() { 
        return $this->nim; 
    }

    public function getRole() { 
        return "" . $this->name .  "  (NIM: " . $this->nim . ")";
    }
}

class Dosen extends Person {
    private $nidn;
    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function setNidn($nidn) { 
        $this->nidn = $nidn; 
    }
    public function getNim() { 
        return $this->nidn; 
    }
    
    public function getRole() { 
        return "" . $this->name . " (NIDN: " . $this->nidn . ")"; 
    }
}

abstract class Jurnal {
    abstract public function kelolaPengajuan();

    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
}
class JurnalMahasiswa extends Jurnal {

    private $jurusan;
    
    public function __construct($judul, Mahasiswa $penulis, $jurusan)
    {
        parent::__construct($judul, $penulis, $jurusan);
        $this->jurusan = $jurusan;
    }
    
    public function kelolaPengajuan() {
        return "Pengajuan jurnal {$this->judul} oleh Mahasiswa {$this->penulis->getName()} (NIM: {$this->penulis->getNim()}) Jurusan {$this->jurusan} sedang diproses";
    }
}
class JurnalDosen extends Jurnal {
    
    private $univ;

    public function __construct($judul, Dosen $penulis, $univ) {
        parent::__construct($judul, $penulis, $univ);
        $this->univ = $univ;
    }
    
    public function kelolaPengajuan() {
        return "Pengajuan jurnal {$this->judul} oleh Dosen {$this->penulis->getName()} (NIDN: {$this->penulis->getNim()}) dari {$this->univ} sedang diproses";
    }
}

$mahasiswa = new Mahasiswa("Muhammad Abi", "230202068");
$dosen = new Dosen("Prof. Drs. Budiono Siregar, S.T., M.Eng.", "123456789");

$jurnalMahasiswa = new JurnalMahasiswa("Sistem Informasi Berbasis Web Angkringan Ngawi", $mahasiswa, "Teknik Informatika ");
$jurnalDosen = new JurnalDosen("Belajar Progamming Dasar", $dosen ,"Universitas Negeri Ngawi");

echo $mahasiswa->getRole();
echo " adalah seorang Mahasiswa". "<br>";
echo $jurnalMahasiswa->kelolaPengajuan() . "<br>". "<br>";
echo $dosen->getRole();
echo " adalah seorang Dosen". "<br>";
echo $jurnalDosen->kelolaPengajuan() . "<br>";
?>