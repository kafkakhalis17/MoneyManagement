<?php
    include_once 'init.php';

    if (isset($_POST['submit'])) {

        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['Kelas'];
        $jurusan = $_POST['Jurusan'];

        mysqli_query($koneksi,"INSERT INTO Siswa VALUES ('$nis','$nama','$kelas','$jurusan')");

        header("location:/MoneyManagement1?page=MasterMember");
    }
    if (isset($_POST['update'])) {

        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['Kelas'];
        $jurusan = $_POST['Jurusan'];

        mysqli_query($koneksi,"UPDATE siswa SET NamaSiswa='$nama', Kelas='$kelas',Jurusan='$jurusan' WHERE NIS='$nis'");

        header("location:/MoneyManagement1?page=MasterMember");
    }
   
    
    function DataSiswa($koneksi)
    {
        $sql = "SELECT * FROM Siswa";
        $Data =mysqli_query($koneksi,$sql);
        return $Data;
    }
    