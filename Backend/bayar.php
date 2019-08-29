<?php
    
    include_once 'init.php';

    if (isset($_POST['submit'])) {

        $nis = $_POST['nama'];
        $nominal = $_POST['nominal-b'];
        $tanggal = $_POST['tanggal-b'];
        $jenis = $_POST['jenis-b'];
        
        mysqli_query($koneksi,"INSERT INTO Pembayaran VALUES ('','$nis','$nominal','$tanggal','$jenis')");

        header("Location:/MoneyManagement1/?page=Form&form=$jenis");
    }
        function allTable($koneksi, $where){
            $sql="SELECT * jenis_pembayaran WHERE $where";
            $Data = mysqli_query($koneksi,$sql);
            return $Data;
        }

          
    function TableBulan($koneksi, $idTable)
    {
         $sql = "SELECT s.NamaSiswa, GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '1', pb.nominal_Bayar, 'x')) AS Januari,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '2', pb.nominal_Bayar, 'x')) AS Februari,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '3', pb.nominal_Bayar, 'x')) AS Maret,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '4', pb.nominal_Bayar, 'x')) AS April ,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '5', pb.nominal_Bayar, 'x')) AS Mei,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '6', pb.nominal_Bayar, 'x')) AS Juni,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '7', pb.nominal_Bayar, 'x')) AS Juli,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '8', pb.nominal_Bayar, 'x')) AS Agustus,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '9', pb.nominal_Bayar, 'x')) AS September,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '10', pb.nominal_Bayar, 'x')) AS Oktober,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '11', pb.nominal_Bayar, 'x')) AS November,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '12', pb.nominal_Bayar, 'x')) AS Desember FROM Siswa s LEFT OUTER JOIN Pembayaran pb ON s.NIS=pb.NIS  WHERE pb.id_jenispembayaran = '$idTable'  GROUP BY	s.NamaSiswa";
         $execute = mysqli_query($koneksi,$sql);
         return $execute;
        
    }
    function SekaliBayar($koneksi, $idTable)
    {
        $sql ="SELECT s.NamaSiswa, pb.tanggal_bayar, pb.nominal_Bayar  FROM Siswa s LEFT JOIN Pembayaran pb ON s.NIS=pb.NIS WHERE pb.id_jenispembayaran= '$idTable' GROUP BY s.NamaSiswa ";
        $execute = mysqli_query($koneksi,$sql);
        return $execute;
    }
