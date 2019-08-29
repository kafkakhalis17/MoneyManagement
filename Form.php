<div class="page page-hide" id="Form" visibility="close">
    <?php
        $Data =  getTable($koneksi);
        while($d = mysqli_fetch_array($Data)){
    ?>
    <div class="form-page form-hide" id="<?php echo $d['id_jenispembayaran']; ?>" visibility="close">
       <span class="page-title"><?php echo $d['nama_pembayaran'];?></span> 
        <form action="Backend/bayar.php" method="post">
            <table class="form-bayar">
                <tr>
                    <td><label>Nama Member</label></td>
                    <td>
                        <select name="nama" class="select-nama">
                            <!-- <option value="" disabled selected>Select your option</option> -->
                            <?php
                            $Siswa =  DataSiswa($koneksi);
                            while($s = mysqli_fetch_array($Siswa)){
                            ?>
                            <option value="<?php echo $s['NIS'];?>"><?php echo $s['NamaSiswa']; ?></option>
                            <?php 
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Nominal</label></td>
                    <td><input type="text" name="nominal-b"></td>
                </tr>
                <tr>
                    <td><label>Tanggal bayar</label></td>
                    <td><input type="date" name="tanggal-b"></td>
                </tr>
                <input type="hidden" name="jenis-b" value="<?php echo $d['id_jenispembayaran']; ?>">
                <tr>
                    <td colspan="2"><input class="btn btn-input float-right" name="submit" type="submit" value="Bayar">
                    </td>
                </tr>
            </table>
        </form>
        <div class="table-form-container">
            <table class="Data-Form">
            <?php 
                    if ($d['bayarper'] == 'Bulan') {?>

                <thead>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>Januari</td>
                        <td>Febuari</td>
                        <td>Maret</td>
                        <td>April</td>
                        <td>Mei</td>
                        <td>Juni</td>
                        <td>Juli</td>
                        <td>Agustus</td>
                        <td>September</td>
                        <td>Oktober</td>
                        <td>November</td>
                        <td>Desember</td>
                    </tr>
                    
                </thead>
                <tbody>
                <?php
                    $Col=  TableBulan($koneksi,$d['id_jenispembayaran']);
                    while($c = mysqli_fetch_array($Col)){
                ?>
                    <tr>
                        <td><?php echo $c['NamaSiswa']; ?></td>
                        <td><?php echo $c['Januari']; ?></td>
                        <td><?php echo $c['Februari']; ?></td>
                        <td><?php echo $c['Maret']; ?></td>
                        <td><?php echo $c['April']; ?></td>
                        <td><?php echo $c['Mei']; ?></td>
                        <td><?php echo $c['Juni']; ?></td>
                        <td><?php echo $c['Juli']; ?></td>
                        <td><?php echo $c['Agustus']; ?></td>
                        <td><?php echo $c['September']; ?></td>
                        <td><?php echo $c['Oktober']; ?></td>
                        <td><?php echo $c['November']; ?></td>
                        <td><?php echo $c['Desember']; ?></td>
                    </tr>
                <?php }?>
                </tbody>
                <?php 
                    }else if($d['bayarper'] == 'Sekali Bayar'){?>
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Siswa</td>
                        <td>Tanggal Bayar</td>
                        <td>Nominal</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    $Col=  SekaliBayar($koneksi,$d['id_jenispembayaran']);
                    while($c = mysqli_fetch_array($Col)){
                ?>
                  <tr>  
                        <td><?php echo $no++?></td>
                        <td><?php echo $c['NamaSiswa']; ?></td>
                        <td><?php echo $c['tanggal_bayar']; ?></td>
                        <td><?php echo $c['nominal_Bayar']; ?></td>
                    </tr>
                    <?php }?>
                </tbody>
                   <?php }?>
            </table>
        </div>
    </div>
    <?php
    }
    
    ?>
</div>