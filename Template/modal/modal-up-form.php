<?php
    $Data =  getTable($koneksi);
     while($d = mysqli_fetch_array($Data)){
?>
<div class="modal fade" id="update<?php echo $d['id_jenispembayaran']; ?>" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Backend/generateform.php" method="post">
          <table class="modal-table">
            <tr>
              <input type="hidden" name="id" value="<?php echo $d['id_jenispembayaran']; ?>">
              <td><label>Nama Form</label></td>
              <td><input type="text" name="nama" value="<?php echo $d['nama_pembayaran']; ?>"></td>
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
                <input class="radio-btn" type="radio" name="pra-bayar" value="Harian"> Harian
                <input class="radio-btn" type="radio" name="pra-bayar" value="Minggu"> Minggu
                <input class="radio-btn" type="radio" name="pra-bayar" value="Bulan"> Bulan
                <input class="radio-btn" type="radio" name="pra-bayar" value="Minggu"> Cicil
                <input class="radio-btn" type="radio" name="pra-bayar" value="Sekali Bayar"> Sekali bayar
              </td>
            </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-input float-right" name="update" type="submit" value="Update Form">
      </div>
      </form>
    </div>
  </div>
</div>
<?php 
          }
 ?>