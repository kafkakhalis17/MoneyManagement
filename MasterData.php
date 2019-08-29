<div class="page page-hide" id="MasterData" visibility="close">
    <?php include 'Template/modal/modal-up-form.php';?>
    <span class="page-title">Master Data</span>
    <div class="box-container">
        <div class="box box-grid" onclick="Page('MasterMember')">
            <div class="box-icon">
                <img src="assets/css/man-user.svg" alt="">
            </div>
            <div class="box-title">
                <span>Data Member</span>
            </div>
        </div>
        <div class="box box-grid" onclick="Page('v_generateform')">
            <div class="box-icon">
                <img src="assets/css/checklist.svg" alt="">
            </div>
            <div class="box-title">
                <span>generate form</span>
            </div>
        </div>
        <div class="box box-grid" onclick="Page('v_generateform')">
            <div class="box-icon">
                <img src="assets/css/analytics.svg" alt="">
            </div>
            <div class="box-title">
                <span>Chart</span>
            </div>
        </div>
        
    </div>
    
    <div class="container-Data">
    <?php
        $json =formget($koneksi);
        $file = 'backup/form.json';
        file_put_contents($file,$json);
    ?>
        <table class="Table-form dataTable">
            <thead>
                <tr>
                    <td>ID Table</td>
                    <td>Nama Table</td>
                    <td>Keterangan</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $Data =  getTable($koneksi);
                    while($d = mysqli_fetch_array($Data)){
                ?>
                    <tr>
                        <td><?php echo $d['id_jenispembayaran']; ?></td>
                        <td><?php echo $d['nama_pembayaran']; ?></td>
                        <td></td>
                        <td><a class="btn-danger btn" href="Backend/DeleteData.php?id=<?php echo $d['id_jenispembayaran']; ?> ">Delete</a>
                        <button data-toggle="modal" data-target="#update<?php echo $d['id_jenispembayaran']; ?>" class="btn btn-warning">Update</button></td>
                    </tr>

                    <?php 
                    }
                ?>
                </tbody>
        </table>
    </div>
</div>
<script src="assets/js/json-get.js"></script>