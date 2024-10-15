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

## Tahapan OOP

1. **Membuat class dan object**
   
   - Membuat class _Mahasiswa_ yang memiliki atribut nama, nim, dan jurusan.
   - Membuat metode tampilData didalam class _Mahasiswa_.
   - Instansiasi objek dari class _Mahasiswa_.

   ```php
   class Mahasiswa
   {
    // Atribut atau properti
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) { // Constructor
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

   public function tampilkanData() { // Metode untuk menampilkan data mahasiswa
        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
    }

   // Instansiasi objek
   echo "Data Mahasiswa: ". "<br>";
   $mahasiswa = new Mahasiswa("Muhammad Abi", "230202068", "Teknik Informatika");
   echo $mahasiswa->tampilkanData() . "<br>" . "<br>";
   ```

2 Encapsulation

   - Mengubah atribut dalam class _Mahasiswa_ menjadi private.
   - Membuat metode getter dan setter untuk atribut nama, nim, dan jurusan.
   - Mendemonstrasikan akses ke atribut menggunakan metode getter dan setter.

   ```php
   class Mahasiswa
   {
    // Atribut atau properti
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) { // Constructor
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

   echo "Data Mahasiswa setelah diperbaruhi: " . "<br>";
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
   ```

3. Inheritance

   - Membuat class _Pengguna_ dengan atribut nama dan metode getNama().
   - Membuat class _Dosen_ yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
   - Menginstansiasi objek dari class _Dosen_ dan tampilkan data dosen.

   ```php
   class Pengguna {
    
    protected $nama; // Atribute atau properti
    
    public function __construct($nama) { // Konstruktor untuk menginisialisasi nama
        $this->nama = $nama;
    }

    public function getNama() { // Metode getter
        return $this->nama;
    }
   }

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

   $dosen = new Dosen("Pak Abda'u", "PWEB");
   echo "Data Dosen: ". "<br>";
   echo "Nama: ";
   echo $dosen->getNama() . "<br>";
   echo "Mata Kuliah: ";
   echo $dosen->getMataKuliah() . "<br>". "<br>";
   ```

4. Polimorphysm

   - Membuat class _Pengguna_ dengan metode aksesFitur().
   - Meng-implementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa.
   - Meng-instansiasi objek dari class _Dosen_ dan _Mahasiswa_, lalu panggil metode aksesFitur().

   ```php
   class Pengguna {
    public function aksesFitur();
    
    protected $nama; // Atribute atau properti
    
    public function __construct($nama) { // Konstruktor untuk menginisialisasi nama
        $this->nama = $nama;
    }

    public function getNama() { // Metode getter
        return $this->nama;
    }
   }

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
        return "Mahasiswa dapat mengakses data mahasiswa";
    }
   }

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

   echo $mahasiswa->aksesFitur() . "<br>". "<br>";
   echo $dosen->aksesFitur() . "<br>";
   ```

5. Abstraction

   - Membuat class abstrak _Pengguna_ dengan metode abstrak aksesFitur().
   - Meng-implementasikan class _Mahasiswa_ dan _Dosen_ yang mengimplementasikan metode abstrak tersebut.
   - Mendemonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.

   ```php
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
        return "Mahasiswa dapat mengakses data mahasiswa";
    }
   }

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

   // Instansiasi objek;
   echo $mahasiswa->aksesFitur() . "<br>". "<br>";
   echo $dosen->aksesFitur() . "<br>";
   ```

## Implementasi

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

4. Membuat kelas turunan `Mahasiswa` dari class `Pengguna` dan atribut:

   ```php
   // Kelas Mahasiswa menggunakan konsep inheritance dari kelas Pengguna
   class Mahasiswa extends Pengguna
   {
    // Atribut atau properti
    private $nim;
    private $jurusan;
   ```

5. Menambahkan _construct_ didalam class `Mahasiswa`:

   ```php
   public function __construct($nama, $nim, $jurusan) { // Constructor
      parent::__construct($nama);  // Panggil konstruktor kelas induk Pengguna
      $this->nim = $nim;
      $this->jurusan = $jurusan;
   }
   ```

6. Membuat _metode_ getter, setter, tampilData, dan aksesFitur didalam class `Mahasiswa`:

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
        return "Mahasiswa dapat mengakses data mahasiswa";
    }
   }   
   ```

### Kelas Dosen (Kelas Turunan)

7. Membuat kelas turunan `Dosen` dari class `Pengguna` dan atribut:

   ```php
   // Kelas Dosen meng-extend kelas Pengguna
   class Dosen extends Pengguna
   {
    // Atribut atau properti
    private $mataKuliah;
   ```

8. Menambahakan _construct_ didalam kelas turunan `Dosen`:
   
   ```php
   public function __construct($nama, $mataKuliah) { // Konstruktor untuk inisialisasi nama dan mata kuliah dosen
        parent::__construct($nama); // Panggil konstruktor kelas induk (Pengguna)
        $this->mataKuliah = $mataKuliah;
    }
   ```

9. Membuat _metode_ getter dan aksesFitur didalam kelas turunan `Dosen`:

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
echo "Data Mahasiswa: ". "<br>";
$mahasiswa = new Mahasiswa("Muhammad Abi", "230202068", "Teknik Informatika");
```

2. Menampilkan data mahasiswa
```php
echo $mahasiswa->tampilkanData() . "<br><br>";
```

3. Mengubah data Mahasiswa
```php
echo "Data Mahasiswa setelah diperbaruhi: " . "<br>";
$mahasiswa->setNama("Abi Ganteng");
$mahasiswa->setNim("99999999");
$mahasiswa->setJurusan("Teknik Sastra Mesin");
```

4. Menampilkan data Mahasiswa yang telah diubah dan akses fitur
```php
echo "Nama: ";
echo $mahasiswa->getNama() . "<br>";
echo "NIM: ";
echo $mahasiswa->getNim() . "<br>";
echo "Jurusan: ";
echo $mahasiswa->getJurusan() . "<br>". "<br>";
echo $mahasiswa->aksesFitur() . "<br>". "<br>";
```

5. Instansiasi objek Dosen
```php
$dosen = new Dosen("Pak Abdu'a", "PWEB");
```

6. Menampilkan data Dosen dan akses fitur
```php
echo "Data dosen: ";
echo "Nama: " . $dosen->getNama() . "<br>";
echo "Mata Kuliah: " . $dosen->getMataKuliah() . "<br>";
echo $dosen->aksesFitur() . "<br>";
```

## Hasil Output
Program ini akan mencetak informasi pengguna, baik mahasiswa maupun dosen, serta fitur yang dapat diakses oleh masing-masing peran sesuai implementasi dari metode `aksesFitur`.

![Screenshot 2024-10-14 225713](https://github.com/user-attachments/assets/7e09e1a5-3212-477d-bd41-2f6f74cb4e6b)

Dengan README ini, kita dapat memahami struktur kelas, penggunaan metode, dan hasil output dari kode PHP yang diberikan. README ini juga memberikan instruksi singkat tentang cara menjalankan script tersebut.


# Dokumentasi Proyek Pertemuan 5-6 Jobsheet 3

## Deskripsi Proyek

Dokumentasi ini berisi implementasi sistem manajemen jurnal akademik sederhana menggunakan konsep Object-Oriented Programming (OOP) dalam PHP. Sistem ini memungkinkan pengelolaan jurnal untuk mahasiswa dan dosen.

## Struktur Proyek

### 1. Person
Kelas dasar untuk representasi individu.

#### Atribut:
- `$name` (protected): Nama individu

#### Method:
- `__construct($name)`: Konstruktor untuk inisialisasi nama
- `getName()`: Mengembalikan nama individu

### 2. Mahasiswa
Kelas turunan dari Person, merepresentasikan mahasiswa.

#### Atribut:
- `$nim` (private): Nomor Induk Mahasiswa

#### Method:
- `__construct($name, $nim)`: Konstruktor untuk inisialisasi nama dan NIM
- `setNim($nim)`: Mengatur NIM mahasiswa
- `getNim()`: Mengembalikan NIM mahasiswa
- `getRole()`: Mengembalikan peran sebagai mahasiswa dengan format tertentu

### 3. Dosen
Kelas turunan dari Person, merepresentasikan dosen.

#### Atribut:
- `$nidn` (private): Nomor Induk Dosen Nasional

#### Method:
- `__construct($name, $nidn)`: Konstruktor untuk inisialisasi nama dan NIDN
- `setNidn($nidn)`: Mengatur NIDN dosen
- `getNidn()`: Mengembalikan NIDN dosen
- `getRole()`: Mengembalikan peran sebagai dosen dengan format tertentu

### 4. Jurnal
Kelas abstrak untuk representasi jurnal.

#### Atribut:
- `$judul` (protected): Judul jurnal
- `$penulis` (protected): Penulis jurnal (objek Person)

#### Method:
- `__construct($judul, $penulis)`: Konstruktor untuk inisialisasi judul dan penulis
- `kelolaPengujian()`: Method abstrak untuk mengelola pengujian jurnal

### 5. JurnalMahasiswa
Kelas turunan dari Jurnal, merepresentasikan jurnal mahasiswa.

#### Atribut:
- `$jurusan` (private): Jurusan mahasiswa

#### Method:
- `__construct($judul, Mahasiswa $penulis, $jurusan)`: Konstruktor untuk inisialisasi jurnal mahasiswa
- `kelolaPengujian()`: Implementasi pengujian jurnal mahasiswa

### 6. JurnalDosen
Kelas turunan dari Jurnal, merepresentasikan jurnal dosen.

#### Atribut:
- $univ (private): Universitas dosen

#### Method:
- `__construct($judul, Dosen $penulis, $univ)`: Konstruktor untuk inisialisasi jurnal dosen
- `kelolaPengujian()`: Implementasi pengujian jurnal dosen

## Penerapan Konsep OOP

### Kode ini mendemonstrasikan penerapan berbagai konsep OOP dalam bahasa PHP. Berikut adalah penjelasan untuk masing-masing konsep:
1. Class dan Object
### Kode ini mendefinisikan beberapa class seperti Person, Mahasiswa, Dosen, Jurnal, JurnalMahasiswa, dan JurnalDosen.
```php

$mahasiswa = new Mahasiswa("Muhammad Abi", "232020068");
$dosen = new Dosen("Prof. Drs. Budiono Siregat, S.T., M.Eng.", "123456789");
```

2. Encapsulation
### Enkapsulasi diterapkan dengan menggunakan access modifiers seperti public, private, dan protected.

```php
class Person {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
}
```

3. Inheritance
### Pewarisan diimplementasikan menggunakan keyword extends.

```php
class Mahasiswa extends Person {
    private $nim;
    
    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }
}
```

5. Polymorphism
Polimorfisme ditunjukkan melalui penggunaan method getRole() yang diimplementasikan secara berbeda di class Mahasiswa dan Dosen:

```php
class Mahasiswa extends Person {
    public function getRole() {
        return "'" . $this->name . " (NIM: " . $this->nim . ")'";
    }
}

class Dosen extends Person {
    public function getRole() {
        return "'" . $this->name . " (NIDN: " . $this->nidn . ")'";
    }
}
```

5. Abstraction
Abstraksi diterapkan melalui penggunaan abstract class Jurnal dan abstract method kelolaPengujan():

```php
abstract class Jurnal {
    abstract public function kelolaPengujian();
    
    // ... other methods ...
}
```

## Implementasi

### Kelas Person

1. Membuat class dan atribut `Person`

```php
class Person {
    protected $name;
```

2. Membuat _construct_ didalam class `Person`

```php
public function __construct($name) {
        $this->name = $name;
    }
```

3. Membuat _method_ didalam class `Person`

```php
public function getName() { 
        return $this->name; 
    }
}
```

### Kelas Mahasiswa (Extend Class)

4. Membuat extend class dan atribut `Mahasiswa`

```php
class Mahasiswa extends Person {
    private $nim;
```

5. Membuat _construct_ didalam extend class `Mahasiswa`

```php
public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }
```

6. Membuat _method_ didalam extend class `Mahasiswa`

```php
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
```

### Kelas Dosen (Extend class)

7. Membuat extend class dan atribut `Dosen`

```php
class Dosen extends Person {
    private $nidn;
```

8. Membuat _construct_ didalam extend class `Dosen`

```php
public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }
```

9. Membuat _method_ didalam extend class `Dosen`

```php
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
```


## Panduam Penggunaan



## Contoh Output

```
Muhammad Abi (NIM: 232020068)
adalah seorang Mahasiswa
Pengujian jurnal Sistem Informasi Berbasis Web Andriawan Neval oleh Mahasiswa Muhammad Abi (NIM: 232020068) Jurusan Teknik Informatika sedang diproses
Prof. Drs. Budiono Siregat, S.T., M.Eng. (NIDN: 123456789)
adalah seorang Dosen
Pengujian jurnal Belajar Programing Dasar oleh Dosen Prof. Drs. Budiono Siregat, S.T., M.Eng. (NIDN: 123456789) dari Universitas Negeri Medan sedang diproses
```

Dokumentasi ini memberikan gambaran komprehensif tentang struktur dan fungsi sistem manajemen jurnal akademik. Untuk pengembangan lebih lanjut, Anda dapat menambahkan fitur-fitur seperti penyimpanan data ke database, antarmuka pengguna, atau integrasi dengan sistem akademik yang lebih besar.
