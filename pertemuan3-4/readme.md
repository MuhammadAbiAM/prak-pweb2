# Dokumentasi Proyek Pertemuan 3-4 Jobsheet 2

## Deskripsi Proyek
Program ini mendemonstrasikan konsep encapsulation, inheritance, polimorphysm, dan abstraction dalam PHP dengan membuat kelas abstrak `Pengguna` yang diimplementasikan oleh dua kelas turunan: `Mahasiswa` dan `Dosen`.

## Struktur Kelas

1. **Pengguna (Abstract Class)**
   - **Atribut:**
     - `protected $nama`
   - **Metode:**
     - `__construct($nama)`: Menginisialisasi nama pengguna.
     - `getNama()`: Mengembalikan nama pengguna.
     - `aksesFitur()`: Metode abstrak yang harus diimplementasikan oleh kelas turunan.

2. **Mahasiswa (Kelas Turunan)**
   - **Atribut:**
     - `private $nim`
     - `private $jurusan`
   - **Metode:**
     - `__construct($nama, $nim, $jurusan)`: Menginisialisasi nama, NIM, dan jurusan.
     - `getNim()`, `getJurusan()`: Mengembalikan NIM dan jurusan.
     - `setNama($nama)`, `setNim($nim)`, `setJurusan($jurusan)`: Mengatur nama, NIM, dan jurusan.
     - `tampilkanData()`: Menampilkan data mahasiswa.
     - `aksesFitur()`: Implementasi akses fitur khusus mahasiswa.

3. **Dosen (Kelas Turunan)**
   - **Atribut:**
     - `private $matakuliah`
   - **Metode:**
     - `__construct($nama, $matakuliah)`: Menginisialisasi nama dan mata kuliah dosen.
     - `getMataKuliah()`: Mengembalikan mata kuliah.
     - `aksesFitur()`: Implementasi akses fitur khusus dosen.

## Proses Pembuatan

### Kelas Pengguna (Abstract Class)

1. Membuat abstract class dan atribut `Pengguna`:
   
   ```php
   // Kelas abstrak Pengguna yang diimplementasikan oleh Mahasiswa dan Dosen
   abstract class Pengguna {
       abstract public function aksesFitur();
    
       protected $nama; // Atribute atau properti
   ```

2. Menambahkan _construct_ didalam abstract class `Pengguna`: 

   ```php
   public function __construct($nama) { // Konstruktor untuk menginisialisasi nama
           $this->nama = $nama;
       }
   ```

3. Membuat _metode_ get didalam abstract class `Pengguna`:

   ```php
   public function getNama() { // Metode getter
           return $this->nama;
       }
   }
   ```

### Kelas Mahasiswa (Kelas Turunan)

1. Membuat kelas turunan `Mahasiswa` dari class `Pengguna` dan atribut:

   ```php
   // Kelas Mahasiswa menggunakan konsep inheritance dari kelas Pengguna
   class Mahasiswa extends Pengguna
   {
    // Atribut atau properti
    private $nim;
    private $jurusan;
   ```

2. Menambahkan _construct_ didalam class `Mahasiswa`:

   ```php
   public function __construct($nama, $nim, $jurusan) { // Constructor
      parent::__construct($nama);  // Panggil konstruktor kelas induk Pengguna
      $this->nim = $nim;
      $this->jurusan = $jurusan;
   }
   ```

3. Membuat _metode_ getter, setter, tampilData, dan aksesFitur didalam class `Mahasiswa`:

   ```php
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
   ```

### Kelas Dosen (Kelas Turunan)

1. Membuat kelas turunan `Dosen` dari class `Pengguna` dan atribut:

   ```php
   // Kelas Dosen meng-extend kelas Pengguna
   class Dosen extends Pengguna
   {
    // Atribut atau properti
    private $mataKuliah;
   ```

2. Menambahakan _construct_ didalam kelas turunan `Dosen`:
   
   ```php
   public function __construct($nama, $mataKuliah) { // Konstruktor untuk inisialisasi nama dan mata kuliah dosen
        parent::__construct($nama); // Panggil konstruktor kelas induk (Pengguna)
        $this->mataKuliah = $mataKuliah;
    }
   ```

3. Membuat _metode_ getter dan aksesFitur didalam kelas turunan `Dosen`:

   ```php
    public function getMataKuliah() {  // Metode getter
        return $this->mataKuliah;
    }

    public function aksesFitur() { // Implementasi metode aksesFitur untuk dosen
        return "Dosen dapat mengakses data dosen dan data mahasiswa";
    }
   }

   ```

## Panduan Penggunaan
Berikut adalah contoh cara membuat objek dan mengakses metode dari kelas-kelas tersebut:

1. Instansiasi objek Mahasiswa
```php
$mahasiswa = new Mahasiswa("Muhammad Abi", "230202068", "Teknik Informatika");
```

2. Menampilkan data mahasiswa
```php
echo $mahasiswa->tampilkanData() . "<br><br>";
```

3. Mengubah data Mahasiswa
```php
$mahasiswa->setNama("Abi Ganteng");
$mahasiswa->setNim("99999999");
$mahasiswa->setJurusan("Teknik Sastra Mesin");
```

4. Menampilkan data Mahasiswa yang telah diubah dan akses fitur
```php
echo "Nama: " . $mahasiswa->getNama() . "<br>";
echo "NIM: " . $mahasiswa->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa->getJurusan() . "<br>";
echo $mahasiswa->aksesFitur() . "<br><br>";
```

5. Instansiasi objek Dosen
```php
$dosen = new Dosen("Pak Abdu'a", "PWEB");
```

6. Menampilkan data Dosen dan akses fitur
```php
echo "Nama: " . $dosen->getNama() . "<br>";
echo "Mata Kuliah: " . $dosen->getMataKuliah() . "<br>";
echo $dosen->aksesFitur() . "<br>";
```

## Hasil Output
Program ini akan mencetak informasi pengguna, baik mahasiswa maupun dosen, serta fitur yang dapat diakses oleh masing-masing peran sesuai implementasi dari metode `aksesFitur`.

![Screenshot 2024-10-14 224531](https://github.com/user-attachments/assets/843f363a-3c3a-4d35-9772-2f8d58528dbc)
