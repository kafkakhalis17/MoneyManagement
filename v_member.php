<div class="page page-hide" id="MasterMember" visibility="close">
    <?php include 'Template/modal/modal-inputMember.php';?>
    <?php include 'Template/modal/modal-upMember.php';?>
    <span class="page-title">Data Siswa</span>
    <div class="button-container">
        <button data-toggle="modal" data-target="#inputMember" class="btn btn-input">Input</button>
    </div>
    <div class="tableData">
        <table id="DataSiswa">
            <thead>
                <tr>
                    <td>NIS</td>
                    <td>Nama</td>
                    <td>Kelas</td>
                    <td>Jurusan</td>
                    <td>Action</td>
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
                    <td><button data-toggle="modal" data-target="#UpMember<?php echo $d['NIS']; ?>" class="btn btn-warning">Update</button>
                    <a class="btn-danger btn" href="Backend/DeleteMember.php?id=<?php echo $d['NIS']; ?> ">Delete</a></td>
                </tr>

                <?php 
                }
            ?>
            </tbody>

        </table>
    </div>
</div>