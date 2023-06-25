<?php
    include ('koneksi.php');
    if (isset($_POST['btnSimpan'])) {

        $nama = $_POST['txtNama'];
        $semester = $_POST['txtSemester'];
        $sks_teori = $_POST['txtSksTeori'];
        $sks_pratikum = $_POST['txtSksPratikum'];
        $jurusan = $_POST['rdJurusan'];
        echo 'Nama :' . $nama;
        $query="INSERT INTO matakuliah (nama,semester,sks_teori,sks_pratikum,jurusan)
        VALUES('$nama','$semester','$sks_teori','$sks_pratikum','$jurusan')";
        $sql= mysqli_query($connect, $query);

        if (!$sql){
            echo 'tidak berhasil';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Matakuliah</title>
</head>
<body>
    <a href="tampil.php"></a>
    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" name="txtNama" id="nama">
        <br>
        <label for="semester">Semester</label>
        <input type="text" name="txtSemester" id="semester">
        <br>
        <label for="sks_teori">Sks Teori</label>
        <input type="text" name="txtSksTeori" id="sks_teori">
        <br>
        <label for="sks_pratikum">Sks Pratikum</label>
        <input type="text" name="txtSksPratikum" id="sks_pratikum">
        <br>
        <label for="">Jurusan</label>
        <input type="radio" name="rdJurusan" id="D3rpl" value="D3 RPL">
        <label for="D3rpl">D3 RPL</label>
        <input type="radio" name="rdJurusan" id="D3si" value="D3 SI">
        <label for="D3si">D3 SI</label>
        <button type="submit" name="btnSimpan" >Simpan</button>
        


    </form>
</body>
</html>