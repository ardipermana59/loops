

### Apa ini ?  
Sistem diatas dibangun menggunakan laravel versi 7 dengan authentication bawaan laravel. Dengan view menggunakan blade template, style bawaan Bootstrap dan tambahan Sweataler2 untuk mempercantik alertnya.  
  
```
git clone 
copy .env.example
composer install 
php artisan migrate --seed
php artisan serve
```

### Kekurangan  
- Sistem dibangun menggunakan versi yang lawas yaitu laravel 7 sesuai keterangan di dokumentasinya bahwa laravel 7 sudah tidak lagi ada pengembangan dari segi bug ataupun securitynya, jadi jika dikemudian hari ditemukan bug pada laravel versi 7, maka hal yang dapat dilakukan yaitu hanya mengupgrade ke versi terbaru di laravel 8 keatas
- Tampilan yang sangat sederhana
  
  
# Daftar Pertanyaan

### Apa keuntungan menggunakan GIT?  
memudahkan progamer untuk mengatur setiap perubahan source code  

<br>

### Apa yang dimaksud dengan “Staging Area” atau “Index” pada GIT ?  
area penyimpanan sementara sebelum di push ke repo  
  
<br>

### Kapan `git stash` digunakan ?
  
jika ingin kembali ke struktur directory yang bersih tanpa menghapus kode yang sedang dikerjakan  
  
<br>

### Jelaskan Metode pembuatan Repositori yang biasa Anda gunakan  
- Login ke github lalu create new repository
kemudian salin kode dari mulai inisialisasi “git init” sampai “git push”

<br>
  
### Kapan anda menggunakan Git Branch dan bagaimana format penamaanya ?  
saat ingin membuat fitur baru atau versi baru
format penamaan menyamakan dengan nama fitur atau versi

<br>

### Apa peruntukan Fork pada GIT ?  
Mengcopy repository ke repo kita dengan kondisi remote sudah diatur
  
<br>
  
### Bagaimana cara mengatasi Conflict pada Git ?
dengan mebuka file yang conflict dan menghapus tanda merge conflict “<<<<<”  
  
<br>

### Buat perbandingan Antara GITHUB, GITLAB dan BITBUCKET
  
Github : biasanya berisi project open source selain project pribadi
Bitbucket: lebih private
  
<br>
  
### Jelaskan CI/CD menurut sepengetahuan Anda  
Untuk saat ini saya belum mengetahu apapun tentang CI/CD, walaupun sudah baca mengenai hal tersebut, tetapi saya belum mempraktikan jadi saya belum tahu  
  
<br>

### Jelaskan metode deploy yang Anda gunakan.
  
Sampai sekarang, baru pernah deploy di share hosting dan belum pernah di lainya
karena dirasa belum memerlukan kapasitas yang lebih besar dan cepat disamping harganya lebih murah dari
