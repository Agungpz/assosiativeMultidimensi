<?php
//RANGKUMAN
// Array asosiatif.
// Ia adalah suatu array di mana key atau kuncinya bukan berupa indeks integer yang dimulai dari 0, akan tetapi yang menjadi key-nya adalah suatu teks bertipe data string.

// Berikut ini adalah contoh dari array asosiatif:
    // $mahasiswa = [
    //   'nama' => 'Nurul Huda',
    //   'domisili' => 'Surabaya',
    //   'jenis_kelamin' => 'Laki-laki'
    // ];

    // Untuk menampilkan item yang berada di dalam array asosiatif, kita bisa melakukannya dengan memanggil key-nya. Hal ini sama persis dengan array terindeks, hanya saja jika pada array terindeks key-nya bertipe data integer, maka pada array asosisatif, key-nya bertipe data string.

// Perhatikan kode program berikut:
    // echo "Nama : {$mahasiswa['nama']}<br>";
    // echo "Domisili : {$mahasiswa['domisili']}<br>";
    // echo "Jenis Kelamin : {$mahasiswa['jenis_kelamin']}<br>";



    // Array multidimensi adalah suatu istilah untuk sebuah array, yang mana ia memiliki item berupa array yang lain. Contohnya seperti ini:
// $histogram = [
//   [1, 2, 3, 4, 5],
//   [6, 7, 3, 9, 2],
//   [3, 5, 1, 0, 5],
//   [5, 8, 1, 3, 1]
// ];

// Pada contoh di atas, indeks ke-0 dari array $histogram adalah suatu array. Begitu juga indeks ke-1, ke-2, dan ke-3.

// Misal kita ingin menampilkan anga 0 pada array tersebut, maka kita harus memanggil array terluarnya dahulu, baru indeks dari array yang didalam.

// Perhatikan kode program berikut:
// $histogram = [
//   [1, 2, 3, 4, 5],
//   [6, 7, 3, 9, 2],
//   [3, 5, 1, 0, 5],
//   [5, 8, 1, 3, 1]
// ];

// echo $histogram[2][3]; // 0

// Array multidimensi tidak mengharuskan setiap item dari array adalah suatu array dengan panjang yang sama, bahkan tidak harus semua item dari suatu array bertipe data sama. Hal itu karena array dalam PHP bisa memiliki himpunan nilai dari tipe data yang berbeda-beda.
// $arrayMultidimensi = [
//   "Nurul Huda",
//   "Lendis Fabri",
//   [1, 2, 3, 4, 5],
//   [3.4, 10.93],
//   true,
//   false
// ];


$dataPesertadidik = [
    [
    "namalengkap" => "Agung Prakoso",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Tomang Pulo GG.V",
    "nisn" => "6256728",
    "nomor_whatsapp" => "083893164726",
    "hobi" => "Design Grafis",
    "cita_cita" => "Editor Marvel"
],
[
    "namalengkap" => "Afrizal",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Game",
    "cita_cita" => "Orang Kaya"

] ,
[
    "namalengkap" => "Messi",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Gambar",
    "cita_cita" => "Idol"
],
[
    "namalengkap" => "Afrizal",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Olahraga",
    "cita_cita" => "Dokter"
],
[
    "namalengkap" => "Kenzie",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Pacaran",
    "cita_cita" => "Tidak ada"
],
[
    "namalengkap" => "Naufal Putra",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Olahraga",
    "cita_cita" => "River"
],
[
    "namalengkap" => "Irza",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Main Game",
    "cita_cita" => "Memiliki Istri Anime"
],
[
    "namalengkap" => "Rizki",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Ngoding",
    "cita_cita" => "Programmer Internasional"
],
[
    "namalengkap" => "Dimas",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Olahraga",
    "cita_cita" => "Programmer Internasional"
],
[
    "namalengkap" => "Haekal Figo",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Olahraga",
    "cita_cita" => "Pesepak Bola"
],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0" >
    <tr>
        <th>Nama Lengkap</th>
        <th>Kelas </th>
        <th>Alamat</th>
        <th>Nisn</th>
        <th>Nomor Whatsapp</th>
        <th>Hobi</th>
        <th>Cita_Cita</th>
    </tr>
    <?php foreach($dataPesertadidik as $data) : ?>
    <tr>
        <td><?= $data["namalengkap"] ?></td>
        <td><?= $data["kelas"] ?></td>
        <td><?= $data["alamat"] ?></td>
        <td><?= $data["nisn"] ?></td>
        <td><?= $data["nomor_whatsapp"] ?></td>
        <td><?= $data["hobi"] ?></td>
        <td><?= $data["cita_cita"] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>