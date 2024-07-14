<?php 
//koneksi ke database
//parameter -> lokasi server -> user -> passowrd -> nama database
$conn = mysqli_connect("localhost","root","","phpdasar");


//parameter -> string koneksi databasenya
// syntax sql harus di tulis dengan huruf besar
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// $mhs = mysqli_fetch_assoc($result);
//     var_dump($mhs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ( $row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <th>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </th>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

        
    </table>
</body>
</html>