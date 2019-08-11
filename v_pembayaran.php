<?php include 'Template/header.php';?>
<section>
    <div class="container">
        <div class="data-table">
            <table class="TableData">
                <thead>
                    <tr>
                        <td>NIS</td>
                        <td>Nama Siswa</td>
                        <td>Januari</td>
                        <td>Febuari</td>
                        <td>Maret</td>
                        <td>April</td>
                        <td>Mei</td>
                        <td>Juni</td>
                        <td>Juli</td>
                        <td>Agustus</td>
                        <td>Setember</td>
                        <td>Oketober</td>
                        <td>November</td>
                        <td>Desember</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>092831311</td>
                        <td>Kafka Khalis</td>
                        <td>Rp.20000</td>
                        <td>Rp.20000</td>
                        <td>Rp.20000</td>
                        <td>Rp.20000</td>
                        <td>Rp.20000</td>
                        <td>Rp.20000</td>
                        <td>Rp.20000</td>
                        <td>Rp.20000</td>
                        <td>Rp.20000</td>
                        <td>Rp.20000</td>
                        <td>Rp.20000</td>
                        <td>Rp.20000</td>
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
</section>
<?php include 'Template/footer.php';?>