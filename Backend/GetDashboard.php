<?php
    include 'init.php'; 

    function getCards($koneksi)
    {
        $sql = "SELECT * FROM totalmasuk";
        $Data =mysqli_query($koneksi,$sql);
        return $Data;
    }
        

     