
# Dokumentasi Proyek Pertemuan 1-2 Jobsheet 1 #

## Deskripsi Proyek

Proyek ini mendemonstrasikan konsep dasar OOP dalam PHP, termasuk pembuatan kelas, instansiasi objek, dan implementasi metode.

## Struktur Kelas

### Kelas Mahasiswa

Kelas `Mahasiswa` merepresentasikan seorang mahasiswa dengan atribut dan metode berikut:

#### Atribut:
- `$nama`: Nama mahasiswa
- `$nim`: Nomor Induk Mahasiswa
- `$jurusan`: Jurusan mahasiswa

#### Metode:
- `__construct($nama, $nim, $jurusan)`: Konstruktor untuk inisialisasi data mahasiswa
- `tampilkanData()`: Menampilkan data informasi mahasiswa
- `updateJurusan($jurusan_baru)`: Mengubah jurusan mahasiswa
- `setNim($nim)`: Mengubah NIM mahasiswa

### Kelas Dosen

Kelas `Dosen` merepresentasikan seorang dosen dengan atribut dan metode berikut:

#### Atribut:
- `$nama`: Nama dosen
- `$nip`: Nomor Induk Pegawai
- `$mataKuliah`: Mata kuliah yang diampu

#### Metode:
- `__construct($nama, $nip, $mataKuliah)`: Konstruktor untuk inisialisasi data dosen
- `tampilkanDosen()`: Menampilkan data informasi dosen

## Proses Pembuatan

### Kelas Mahasiswa

1. Membuat class dan atribut `Mahasiswa`:
   ```php
   class Mahasiswa {
   
       private $nama;
       private $nim;
       private $jurusan;
    
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
   ```

2. Menambahkan _constructor_ pada kelas `Mahasiswa`:
   ```php
   public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
   ```

3. Membuat _metode_ tampil data dan _metode_ tambahan update atribut jurusan serta ubah nilai atribut nim pada kelas `Mahasiswa`:
   ```php
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
   ```

### Kelas Dosen

1. Membuat class dan atribut `Dosen`:
   ```php
    class Dosen {
    
        private $nama;
        private $nip;
        private $mataKuliah;
   ```
2.  Menambahkan _constructor_ pada kelas `Dosen`:
    ```php
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    ```

3. Membuat _metode_ tampil data pada kelas `Dosen`:
   ```php
   public function tampilkanDosen() {
        return "Nama: $this->nama <br> NIP: $this->nip <br> Mata Kuliah: $this->mataKuliah";
    }
   }
   ```
   
## Instansiasi / Penggunaan Metode

### Kelas Mahasiswa

1. Membuat objek `Mahasiswa`:
   ```php
   echo "Data Mahasiswa Awal". "<br>";
   $mahasiswa1 = new Mahasiswa("Muhammad Abi", "230202068", "Teknik Informatika");
   ```

2. Menampilkan data mahasiswa awal:
   ```php
   echo $mahasiswa1->tampilkanData();
   ```

3. Mengubah jurusan dan NIM mahasiswa:
   ```php
   $mahasiswa1->updateJurusan("Teknik Mesin");
   $mahasiswa1->setNim("230966977");
   ```
   
4. Menampilkan data mahasiswa setelah diperbaruhi:
   ```php
   echo "Data Mahasiswa setelah diperbaruhi". "<br>";
   echo $mahasiswa1->tampilkanData(). "<br>". "<br>";
   ```

### Kelas Dosen

1. Membuat objek `Dosen`:
   ```php
   echo "Data dosen". "<br>";
   $dosen1 = new Dosen("Pak Abda'u", "123456789", "PWEB");
   ```

2. Menampilkan data dosen:
   ```php
   echo $dosen1->tampilkanDosen();
   ```

## Hasil Output

Setelah menjalankan script, output yang dihasilkan akan terlihat seperti ini:

![image](https://github.com/user-attachments/assets/8aa3808b-44bb-491c-82f2-82b446cd5d2c)


Dengan README ini, kita dapat memahami struktur kelas, penggunaan metode, dan hasil output dari kode PHP yang diberikan. README ini juga memberikan instruksi singkat tentang cara menjalankan script tersebut.

