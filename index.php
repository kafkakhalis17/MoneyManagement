<?php include 'Template/header.php';?>
   <div class="container">
        <div class="data-table">
            <table class="TableData">
                <thead>
                    <tr>
                        <td>No.PLN</td>
                        <td>Nama Pengguna</td>
                        <td>Alamat</td>
                        <td>Daerah</td>
                        <td>Gol</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kafka</td>
                        <td>Jalan Suka Maju</td>
                        <td>Pamulang</td>
                        <td>A9</td>
                        <td>Aksi</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="box box-cari">
            <div class="box-head">
                <span>Cari No.Listrik</span>
            </div>
            <div class="box-section">
                <table class="table-cari">
                    <tr>
                        <td>
                            <label>No.Listrik</label>
                            <br><input type="text" name="" id="" placeholder="xxxx-xxxx-xxxx">
                        </td>
                    </tr>
                    <tr>
                        <td class="col-cari"><input class="butt-cari" type="submit" value="Cari"></td>
                    </tr>
                </table>
                <table class="table-hasil">
                    <!-- &nbsp; Buat Spasi di HTML  -->
                    <tr>
                        <td><span>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></td>
                    </tr>
                    <tr>
                        <td><span>Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Total Tagihan :</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="pay-button"><button>Bayar</button></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="assets/js/main.js"></script>

</html>