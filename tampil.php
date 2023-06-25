<?php
include('koneksi.php');
$sql = "SELECT * FROM matakuliah";
$query = mysqli_query($connect,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Matakuliah</title>
</head>
<body>
    <table>
        <h3>
            <a href="tambah.php">Tambah Data</a>
        </h3>
        <tr>
            <th>Nama</th>
            <th>Semester</th>
            <th>Sks Teori</th>
            <th>Sks Pratikum</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php
        while ($result = mysqli_fetch_array($query)){?>
            <tr>
                <td><?= $result['nama']?></td>
                <td><?= $result['semester']?></td>
                <td><?= $result['sks_teori']?></td>
                <td><?= $result['sks_pratikum']?></td>
                <td><?= $result['jurusan']?></td>
                <td>
                    <a href="" >Ubah<a>
                        <a href="hapus.php?id=<?= $result['id']?>">Hapus<a>
                </td>
            </tr>
            <?php } ?>

    </table>
</body>
</html>
