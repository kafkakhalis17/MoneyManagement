<?php 

include_once 'init.php';


    if (isset($_POST['submit'])) {

        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $nominal = $_POST['nominal-l'];
        $tanggal = $_POST['tanggal-l'];
        $prabayar = $_POST['pra-bayar'];
        
        mysqli_query($koneksi,"INSERT INTO jenis_pembayaran VALUES ('','$jenis','$tanggal','$nama','$prabayar','$nominal','null')");

        header("location:/MoneyManagement1?page=v_pembayaran&form=undefined");
        exit();
    }
    
    if (isset($_POST['update'])) {
        $id =  $_POST['id'];
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $nominal = $_POST['nominal-l'];
        $tanggal = $_POST['tanggal-l'];
        $prabayar = $_POST['pra-bayar'];
        
        mysqli_query($koneksi,"UPDATE jenis_pembayaran  SET jenis_pembayaran ='$jenis',tanggal_pelunasan='$tanggal',nama_pembayaran='$nama',bayarper='$prabayar',nominallunas='$nominal' WHERE 	id_jenispembayaran='$id'");

        header("location:/MoneyManagement1?page=v_pembayaran&form=undefined");
        exit();
    }
    

    // function Formget($koneksi)
    // {
    //     $sql = "SELECT * FROM jenis_pembayaran";
    //     $data =mysqli_query($koneksi,$sql);
    //     $form = array();
    //     while ($p= mysqli_fetch_assoc($data)) {
    //         $idJenis = $p['id_jenispembayaran'];
    //         $jenis   =$p ['jenis_pembayaran'];
    //         $tanggalplns =$p['tanggal_pelunasan'];
    //         $namapembayaran =$p['nama_pembayaran'];
    //         $form[]= array($idJenis, $jenis, $tanggalplns, $namapembayaran);
    //     }
    //     $json = json_encode(array("form" => $form));
    //     return $json;
    // }
     
    function getTable($koneksi)
    {
        $sql = "SELECT * FROM jenis_pembayaran";
        $Data =mysqli_query($koneksi,$sql);
        return $Data;
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $nominal = $_POST['nominal-l'];
        $tanggal = $_POST['tanggal-l'];
        $prabayar = $_POST['pra-bayar'];
        $sql = "UPDATE jenis_pembayaran SET jenis_pembayaran='$jenis',tanggal_pelunasan='$tanggal',nama_pembayaran='$nama',bayarper='$prabayar',nominallunas='$nominal' WHERE id_jenispembayaran='$id'";
        mysqli_query($koneksi,$sql);
        header("location:/MoneyManagement1?page=v_pembayaran&form=undefined");
     }
        
   
