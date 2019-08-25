<?php include 'Template/header.php';?>
<div class="container">
    <section>
        <div class="input">
            <h3>Tambah Siswa</h3>
            <form action="Backend/Siswa.php" method="post">
            <table>
                <tr>
                    <td><label>NIS</label></td>
                    <td><input type="text" name="nis"></td>
                </tr>
                <tr>
                    <td><label>Nama Siswa</label></td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td><label for="">Kelas</label></td>
                    <td>
                        <select name="Kelas" id="">
                            <option value="10">X</option>
                            <option value="11">XI</option>
                            <option value="12">XII</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Jurusan</label></td>
                    <td>
                        <select name="Jurusan" id="">
                            <option value="RPL">RPL</option>
                            <option value="TKJ">TKJ</option>
                            <option value="MM1">Multimedia 2</option>
                            <option value="MM2">Multimedia 1</option>
                            <option value="BC">Broadcast</option>
                            <option value="Animasi">Animasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input class="btn btn-input" name="submit" type="submit" value="Tambah"></td>
                </tr>
            </table>
            </form>
        </div>
        <hr>
        <div class="tableData">
            <table id="DataSiswa">
                <thead>
                    <tr>
                        <td>NIS</td>
                        <td>Nama</td>
                        <td>Kelas</td>
                        Kelas <td>Jurusan</td>
                    </tr>
                </thead>
           
                <tbody>
            <?php
                $Data =  DataSiswa($koneksi);
                while($d = mysqli_fetch_array($Data)){
            ?>
                    <tr>
                        <td><?php echo $d['NIS']; ?></td>
                        <td><?php echo $d['NamaSiswa']; ?></td>
                        <td><?php echo $d['Kelas']; ?></td>
                        <td><?php echo $d['Jurusan']; ?></td>
                    </tr>

                <?php 
                }
            ?>
                </tbody>

            </table>
        </div>
    </section>
</div>
<?php include 'Template/footer.php';?>