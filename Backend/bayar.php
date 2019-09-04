<?php
    
    include_once 'init.php';

    if (isset($_POST['submit'])) {

        $nis = $_POST['nama'];
        $nominal = $_POST['nominal-b'];
        $tanggal = $_POST['tanggal-b'];
        $jenis = $_POST['jenis-b'];

        $bulan = date('m',$tanggal);
        $bulant = getBulan($koneksi,$$nis);
        
        $Data =  getJenisbayar($koneksi, $jenis);
        while($d = mysqli_fetch_array($Data)){
            if ($d['bayarper']=='Bulan') {
                if ($bulan==$bulant) {
                    header("Location:/MoneyManagement1/?page=Form&form=$jenis&swal=alert");
                    exit();
                } else{  
                    mysqli_query($koneksi,"INSERT INTO Pembayaran VALUES ('','$nis','$nominal','$tanggal','$jenis')");
                    header("Location:/MoneyManagement1/?page=Form&form=$jenis");
                }
            }else {
                mysqli_query($koneksi,"INSERT INTO Pembayaran VALUES ('','$nis','$nominal','$tanggal','$jenis')");
                header("Location:/MoneyManagement1/?page=Form&form=$jenis");
            }
        }
    }

        function getJenisbayar($koneksi, $where )
        {
            $sql ="SELECT bayarper FROM jenis_pembayaran WHERE id_jenispembayaran = '$where'";
            $Data = mysqli_query($koneksi,$sql);
            return $Data;
        }

        function getBulan($koneksi, $where )
        {
            $sql ="SELECT tanggal_bayar FROM pembayaran WHERE NIS = '$where'";
            $Data = mysqli_query($koneksi,$sql);
            return $Data;
        }

        function total($koneksi, $where)
        {
            $sql ="SELECT * FROM totalmasuk WHERE id_jenispembayaran = '$where'";
            $Data = mysqli_query($koneksi,$sql);
            return $Data;
        }

        function keluaran($koneksi,$WHERE)
        {
            $sql = "SELECT k.id_keluaran, k.id_jenispembayaran, k.nominal_pengeluaran FROM keluaran k WHERE k.id_jenispembayaran = '$WHERE' ORDER BY k.id_keluaran DESC LIMIT 1";
            $Data = mysqli_query($koneksi,$sql);
            return $Data;
        }

          
    function TableBulan($koneksi, $idTable)
    {
         $sql = "SELECT s.NamaSiswa, GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '1', pb.nominal_Bayar, null)) AS Januari,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '2', pb.nominal_Bayar, null)) AS Februari,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '3', pb.nominal_Bayar, null)) AS Maret,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '4', pb.nominal_Bayar, null)) AS April ,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '5', pb.nominal_Bayar, null)) AS Mei,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '6', pb.nominal_Bayar, null)) AS Juni,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '7', pb.nominal_Bayar, null)) AS Juli,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '8', pb.nominal_Bayar, null)) AS Agustus,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '9', pb.nominal_Bayar, null)) AS September,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '10', pb.nominal_Bayar, null)) AS Oktober,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '11', pb.nominal_Bayar, null)) AS November,GROUP_CONCAT(IF(MONTH(pb.tanggal_bayar) = '12', pb.nominal_Bayar, null)) AS Desember FROM Siswa s LEFT OUTER JOIN Pembayaran pb ON s.NIS=pb.NIS  WHERE pb.id_jenispembayaran = '$idTable'  GROUP BY	s.NamaSiswa";
         $execute = mysqli_query($koneksi,$sql);
         return $execute;   
        
    }
    function SekaliBayar($koneksi, $idTable)
    {
        $sql ="SELECT s.NamaSiswa, pb.tanggal_bayar, pb.nominal_Bayar  FROM Siswa s LEFT JOIN Pembayaran pb ON s.NIS=pb.NIS WHERE pb.id_jenispembayaran= '$idTable' GROUP BY s.NamaSiswa ";
        $execute = mysqli_query($koneksi,$sql);
        return $execute;
    }
