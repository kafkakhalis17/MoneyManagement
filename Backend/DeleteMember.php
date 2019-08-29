<?php
    include_once 'init.php';

    $id = $_GET['id'];
    $sql= "DELETE FROM Siswa WHERE NIS ='$id';";
  
    mysqli_query($koneksi, $sql);
    header("location:/MoneyManagement1?page=MasterMember");