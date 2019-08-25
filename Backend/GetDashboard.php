<?php
    // include 'init.php'; 

    function GetTableDashboard($koneksi)
    {
        $sql = "SELECT * FROM V_Pembayaran";
        $Data =mysqli_query($koneksi,$sql);
        return $Data;
    }
        

     