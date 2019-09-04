<div class="page" id="Dashboard" visibility="open">
   <div class="Dashboard-head">
      <div class="search"><input type="text"></div>
      <div class="clock-container">
         <span id="clock-wrapper"></span>
      </div>
   </div>
   <div class="status">
      <span class="grid-title">Uang dalam Pembayaran</span>
      <div class="grid-status">
         <div class="grid-status-child">
            <?php 
               $Data =  getTable($koneksi);
               while($d = mysqli_fetch_array($Data)){
                  if ($d['Total']==0) {
                     $total =  total($koneksi,$d['id_jenispembayaran']);
                     while($t = mysqli_fetch_array($total)){?>
            <?php
                        if ($t['id_jenispembayaran']&&$d['id_jenispembayaran']) {?>
            <script>
               $(document).ready(function () {
                  $(".num<?=$t['id_jenispembayaran'] ?>").text(kFormatter( <?=$t['total'] ?> ));
                  $(".num<?=$t['id_jenispembayaran'] ?>").css("color", getRandomColor());
               });
            </script>
            <?php } else{?>
            <script>
               $(document).ready(function () {
                  $(".num<?=$t['id_jenispembayaran'] ?>").text("No Data");
                  $(".num<?=$t['id_jenispembayaran'] ?>").css("color", getRandomColor());
               });
            </script>
            <?php }
                     }
                     }elseif($d['Total']==true){?>
            <script>
               $(document).ready(function () {
                  $(".num<?=$d['id_jenispembayaran'] ?>").text(kFormatter( <?=$d['Total'] ?> ));
                  $(".num<?=$d['id_jenispembayaran'] ?>").css("color", getRandomColor());
               });
            </script>
            <?php }
               ?>
            <div class="box box-status <?=$d['id_jenispembayaran'] ?>">
               <div class="box-num">
                  <span class="num<?=$d['id_jenispembayaran'] ?> number"></span>
                  <div class="box-title">
                     <span><?=$d['nama_pembayaran'] ?></span>
                  </div>
               </div>
            </div>
            <?php }?>
         </div>
      </div>
      <button class="btn-right">Right</button>
      <button class="btn-left">Left</button>
   </div>
</div>