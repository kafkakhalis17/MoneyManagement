<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Bendahara</title>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.js"></script>
    <script src="assets/vendor/datatables.min.js"></script>
    <script src="assets/vendor/chosen-js/chosen.jquery.min.js"></script>
    <script src="assets/vendor/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/vendor/datatables.min.css">
    <link rel="stylesheet" href="assets/vendor/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap.css">
    <link rel="stylesheet" href="assets/vendor/chosen-js/chosen.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"></script>
    <script>
        function kFormatter(num) {
            return Math.abs(num) > 999 ? Math.sign(num) * ((Math.abs(num) / 1000).toFixed(1)) + 'k' : Math.sign(num) *
                Math.abs(num)
        }

        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
        setInterval(function () {
            var date = new Date();
            $('#clock-wrapper').html(
                date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds()
            );
        }, 500);
    </script>

</head>

<body>
    <?php 
    include_once "init.php";
?>
    <header>
        <!-- <span class="webtitle">Pembayaran Khas</span>
        <nav>
            <ul>
                <li><a class="link" href="http://localhost/MoneyManagement1/" target="_blank" rel="noopener noreferrer">Dashboard</a>
                </li>
                <li><a class="link" href="http://localhost/MoneyManagement1/v_pembayaran.php" target="_blank" rel="noopener noreferrer">Pembayaran</a></li>
                <li>
                    <div class="dropdown">
                        <span>Master Data</span>
                        <div class="dropdown-content">
                            <a href="http://localhost/MoneyManagement1/M_Siswa.php">Siswa</a>
                        </div>
                    </div>
                </li>
                <li><a class="link" href="http://" target="_blank" rel="noopener noreferrer">Laporan</a></li>
            </ul>
        </nav> -->
        <!-- <div class="inner-head">
            
        </div> -->
    </header>

    <nav>
        <div class="inner-nav">
            <span class="webtitle">MoneyManagement</span>
        </div>
        <div class="side-nav">
            <div class="nav-item">
                <!-- <div class="circle"></div> -->
                <ul>
                    <li class="Nav-btn Nav-Dashboard"><span onclick="Page('Dashboard')">Dashboard</span></li>
                    <li class="Nav-btn Nav-Data"><span onclick="Page('MasterData')">MasterData</span></li>
                    <li class="Nav-btn Nav-Pay"><span onclick="Page('v_pembayaran')">Pembayaran</span></li>
                    <!-- <li>Report</li> -->
                </ul>
            </div>
        </div>
    </nav>