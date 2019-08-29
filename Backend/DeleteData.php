<?php
    
    include_once 'init.php';

    $id = $_GET['id'];
    $sql= "DELETE FROM pembayaran WHERE id_jenispembayaran ='$id';";
    $sql .= "DELETE FROM jenis_pembayaran WHERE id_jenispembayaran ='$id;'";
    mysqli_multi_query($koneksi, $sql);
    header("location:/MoneyManagement1?page=MasterData");

