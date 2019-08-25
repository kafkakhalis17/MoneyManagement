<div class="page page-hide" id="MasterMember" visibility="close">
    <?php include 'Template/modal/modal-siswa.php';?>
    <span class="page-title">Data Siswa</span>
    <div class="button-container">
        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-input">Input</button>
    </div>
    <div class="tableData">
        <table id="DataSiswa">
            <thead>
                <tr>
                    <td>NIS</td>
                    <td>Nama</td>
                    <td>Kelas</td>
                    <td>Jurusan</td>
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
</div>