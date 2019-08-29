<div class="page page-hide" id="v_pembayaran" visibility="close">
<span class="page-title">Daftar Pembayaran</span>
  <div class="tpembayaran-container">  
      <table class="Table-form DataTable">
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
                <td><button class="btn btn-success" onclick="Page('Form','<?php echo $d['id_jenispembayaran']; ?>')">Bayar</button></td>
            </tr>

            <?php 
                    }
                ?>
        </tbody>
    </table>
                </div>
</div>