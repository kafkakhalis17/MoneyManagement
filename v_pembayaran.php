<div class="page page-hide" id="v_pembayaran" visibility="close">
<?php include 'Template/modal/modal-keluaran.php';?>
<span class="page-title">Daftar Pembayaran</span>
  <div class="tpembayaran-container">  
      <table class="Table-form DataTable">
        <thead>
            <tr>
                <td>ID Table</td>
                <td>Nama Table</td>
                <td>Total</td>
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
                <td>
                    <?php
                        if ($d['Total']==0) {
                            $total =  total($koneksi,$d['id_jenispembayaran']);
                            while($t = mysqli_fetch_array($total)){
                                echo "Rp.". number_format($t['total'],2,',','.');
                            }
                        }else echo "Rp.".  number_format($d['Total'],2,',','.');
                    ?>
                </td>
                <td>
                    <button class="btn btn-success" onclick="Page('Form','<?php echo $d['id_jenispembayaran']; ?>')">Bayar</button>
                    <button class="btn btn-danger"  data-toggle="modal" data-target="#Keluaran<?php echo $d['id_jenispembayaran']; ?>">Pengeluaran</button>
                </td>
            </tr>

            <?php 
                    }
                ?>
        </tbody>
    </table>
                </div>
</div>