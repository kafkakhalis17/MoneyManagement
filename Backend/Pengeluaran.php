<?php
include_once 'init.php';
include 'generateform.php';
include 'bayar.php';
   if (isset($_POST['keluar'])) {
      $id = $_POST['id'];
      $nominal = $_POST['nominal'];
      $tanggal = $_POST['tanggal'];

      $total = total($koneksi, $id);
      $Data =  getTable($koneksi);
      while($d = mysqli_fetch_array($Data)){

         if ($d['Total']==0) {
            while ($t = mysqli_fetch_array($total)){
               $hasil = $t['total'] - $nominal;
            }
         }else{
            $hasil = $d['Total'] - $nominal;
         }
      }  
    

      mysqli_query($koneksi,"UPDATE jenis_pembayaran SET Total='$hasil' WHERE id_jenispembayaran='$id'");
      header("location:http://localhost/MoneyManagement1/?page=v_pembayaran&form=undefined");
   }