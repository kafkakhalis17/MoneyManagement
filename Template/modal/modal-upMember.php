<?php
   $Data =  DataSiswa($koneksi);
   while($d = mysqli_fetch_array($Data)){
?>
<div class="modal fade" id="UpMember<?php echo $d['NIS']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Backend/Siswa.php" method="post">
          <table class="modal-table">
            <tr>
              <td><label>Nama Siswa</label></td>
              <td><input autocomplete="off" type="text" name="nama"></td>
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
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-input" name="update" type="submit" value="Tambah">
      </div>
      </form>
    </div>
  </div>
</div>
<?php } ?>