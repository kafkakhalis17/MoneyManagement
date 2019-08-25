<?php 
    session_start();
    $server = "Localhost";
    $username ="root";
    $password ="";
    $database="MoneyManagement";

    $koneksi = mysqli_connect($server,$username,$password,$database);

    
    // if(mysqli_connect_errno()){
    //     echo "Database Error", mysqli_connect_error();
    // }     
    // else echo "berhasil"; 
    // echo "hello";