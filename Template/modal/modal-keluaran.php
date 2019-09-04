<?php
    $Data =  getTable($koneksi);
     while($d = mysqli_fetch_array($Data)){
?>
<div class="modal fade" id="Keluaran<?php echo $d['id_jenispembayaran']; ?>" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Keluaran<?php echo $d['nama_pembayaran']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Backend/Pengeluaran.php" method="post">
          <table class="modal-table">
            <tr>
              <input type="hidden" name="id" value="<?php echo $d['id_jenispembayaran']; ?>">
              <td><label>Nominal Keluar</label></td>
              <td><input type="text" name="nominal" ></td>
            </tr>
            <tr>
               <td><label>Tanggal</label></td>
               <td><input type="date" name="tanggal" ></td>
            </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-input float-right" name="keluar" type="submit" value="Keluaran">
      </div>
      </form>
    </div>
  </div>
</div>
<?php 
          }
 ?>