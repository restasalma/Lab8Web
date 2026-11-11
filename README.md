## Praktikum 7 : Pemograman Server-Side dengan PHP ##

Pada praktikum 7, saya akan menjelaskan beberapa latihan dan mini projek. Selain itu, saya juga akan menjelaskan eksperiment mandiri.

## Latihan 1 : Menjalankan PHP

Membuat file dalam tipe .php lalu memasukkan kode. Cara menjalankannya, kita menggunakan xampp. Start di apk xampp bagian apache, lalu kita salin alamat filenya ke chrome, nanti akan muncul hasilnya di chrome.

![klt1](ss/klt1.png)
![lt1](ss/lt1.png)

## Latihan 2 : Variabel, operator dan percabangan

$nama, $tugas, $uts, $uas adalah variabel. 0.30 berarti bobot nilai 30% dan 0.40 berarti bobot nilai 40%. if dan elseif digunakan untuk menentukan predikat berdasarkan nilai akhir.number_format() digunakan untuk menampilkan dua angka di belakang koma.

![klt2](ss/klt2.png)
![lt2](ss/lt2.png)

## Latihan 3 : Pengulangan dan array

$mahasiswa adalah array yang menyimpan beberapa nama mahasiswa. foreach digunakan untuk mengambil setiap nama secara bergantian. $nama menyimpan nama yang sedang diproses. < li > membuat daftar bernomor. htmlspecialchars() membantu mengamankan teks sebelum ditampilkan. 

![klt3](ss/klt3.png)
![lt3.1](ss/lt3.1.png)
![lt3.2](ss/lt3.2.png)

## Latihan 4 : Membuat function

function hitungDiskon() adalah fungsi untuk menghitung diskon.$harga adalah harga barang. $persen adalah persentase diskon.$potongan adalah jumlah uang yang dikurangi. return mengembalikan hasil perhitungan. number_format() membuat angka tampil dengan format Rupiah.

![klt4](ss/klt4.png)
![lt4](ss/lt4.png)

## Latihan 5 : Memproses form dengan GET

Form pencarian berhasil ditampilkan. Kata kunci pemograman web berhasil dikirim. PHP berhasil mengambil data menggunakan $_GET. Kata kunci berhasil ditampilkan kembali di halaman. URL berubah dan memuat parameter kata=pemograman+web.

![klt5](ss/klt5.png)
![lt5](ss/lt5.png)

## Latihan 6 : Memproses form dengan POST

Dengan post, hasil pencarian tidak berubah seperti get. Yang ditampilkan hanya pengisian formnya. 

![klt6](ss/klt6.png)
![lt6](ss/lt6.png)

## Latihan 7 : Pengolahan data sederhana

Di latihan ini saya membuat program transaksi barang sederhana. Memasukkan nama barang, memasukkan harga barang,memasukkan jumlah barang, menghitung subtotal secara otomatis,menampilkan ringkasan transaksi, dan memeriksa apakah data yang dimasukkan valid.

![klt7](ss/klt7.png)
![lt7.1](ss/lt7.1.png)
![lt7.2](ss/lt7.2.png)
![lt7.3](ss/lt7.3.png)
![lt7.4](ss/lt7.4.png)
![lt7.5](ss/lt7.5.png)

## Mini project

![kmp1](ss/kmp1.png)
![kmp2](ss/kmp2.png)
![kmp3](ss/kmp3.png)
![mp1](ss/mp1.png)
![mp2](ss/mp2.png)
![mp3](ss/mp3.png)
![mp4](ss/mp4.png)

## Eksperimen mandiri 

1. Menghitung nilai rata-rata

![ke1](ss/ke1.png)
![e1](ss/e1.png)

2. Pencarian nama menggunakan get

![ke2](ss/ke2.png)
![e2](ss/e2.png)
![e2.1](ss/e2.1.png)

3. Membuat function untuk mengubah format harga menjadi Rupiah

![ke3](ss/ke3.png)
![e3](ss/e3.png)

4. Menambahkan validasi NIM hanya berisi angka dan panjangnya sesuai ketentuan

![ke4](ss/ke4.png)
![e4](ss/e4.png)
![e4.1](ss/e4.1.png)
![e4.2](ss/e4.2.png)

5. Menambahkan tombol Reset pada Form

![ke5](ss/ke5.png)
![e5](ss/e5.png)
![e5.1](ss/e5.1.png)
![e5.2](ss/e5.2.png)

## Pertanyaan Evaluasi

1. Apa perbedaan pemrosesan client-side dan server-side?

Jawaban:

Client-side adalah pemrosesan data yang dilakukan di sisi pengguna melalui browser, biasanya menggunakan JavaScript. Server-side adalah pemrosesan data yang dilakukan di server menggunakan bahasa pemrograman seperti PHP. Hasil pemrosesan server kemudian dikirimkan kembali ke browser.

2. Mengapa file PHP harus dijalankan melalui web server?

Jawaban:

Karena PHP merupakan bahasa pemrograman server-side yang membutuhkan web server untuk menjalankan dan memproses kode PHP. Jika file PHP dibuka langsung melalui folder komputer, kode PHP tidak akan diproses dengan benar.

3. Apa fungsi tanda $ pada variabel PHP?

Jawaban:

Tanda $ digunakan untuk mendefinisikan variabel dalam PHP. Variabel berfungsi untuk menyimpan data yang dapat digunakan dan diolah dalam program.

Contoh: $nama = "Alya";

4. Apa perbedaan metode GET dan POST?

Jawaban:

GET mengirimkan data melalui URL sehingga data dapat terlihat pada alamat browser. Sedangkan POST mengirimkan data melalui bagian isi permintaan (request body), sehingga data tidak ditampilkan langsung pada URL.

5. Mengapa input pengguna perlu divalidasi di sisi server?

Jawaban:

Validasi server diperlukan untuk memastikan data yang dikirim pengguna sesuai dengan ketentuan program. Validasi juga membantu mencegah data kosong, format yang salah, dan input yang tidak sesuai.

6. Apa fungsi htmlspecialchars() ketika menampilkan data dari form?

Jawaban:

htmlspecialchars() digunakan untuk mengubah karakter khusus HTML menjadi bentuk yang aman saat ditampilkan. Fungsinya membantu mencegah input pengguna dianggap sebagai kode HTML atau JavaScript yang berbahaya.

7. Apa manfaat penggunaan function dalam program PHP?

Jawaban:

Function bermanfaat untuk mengelompokkan kode berdasarkan tugas tertentu agar program lebih rapi, mudah digunakan kembali, dan tidak perlu menulis kode yang sama berulang kali.