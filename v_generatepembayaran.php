<div class="page page-hide" id="v_generateform" visibility="close">
<?php
 $json =formget($koneksi);
 $file = 'backup/form.json';
 file_put_contents($file,$json);
 ?>
 <span class="page-title">Generate Pembayaran</span>
    <div class="form-container">
        <form action="Backend/generateform.php" method="post">
            <table class="tab-gen">
                <tr>
                    <td><label>Nama Form</label></td>
                    <td><input type="text" name="nama" autocomplete="off"></td>
                </tr>
                <tr>
                    <td><label>Jenis Form</label></td>
                    <td>
                        <input class="radio-btn" type="radio" name="jenis" value="Event">Event
                        <input class="radio-btn" type="radio" name="jenis" value="Kas">Kas
                        <input class="radio-btn" type="radio" name="jenis" value="Tabungan">Tabungan
                    </td>
                </tr>
                <tr>
                    <td><label>Nominal lunas</label></td>
                    <td><input type="text" name="nominal-l"></td>
                </tr>
                <tr>
                    <td><label>Tanggal Pelunasan</label></td>
                    <td><input type="date" name="tanggal-l"></td>
                </tr>
                <tr>
                    <td><label>Bayar Per/</label></td>
                    <td>
                        <input class="radio-btn" type="radio" name="pra-bayar"  value="Harian"> Harian
                        <input class="radio-btn" type="radio" name="pra-bayar"  value="Minggu"> Minggu
                        <input class="radio-btn" type="radio" name="pra-bayar"  value="Bulan"> Bulan
                        <input class="radio-btn" type="radio" name="pra-bayar"  value="Minggu"> Cicil
                        <input class="radio-btn" type="radio" name="pra-bayar"  value="Sekali Bayar"> Sekali bayar
                    </td>
                </tr>
                <tr>
                    <td><input class="btn btn-input float-right" name="submit" type="submit" value="Generate Form"></td>
                </tr>
            </table>
        </form>
    </div>
</div>