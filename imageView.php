<?php
    include "../../db/koneksi.php";
    $modal_id=$_GET['idImage'];
    $modal=mysqli_query($koneksi,"SELECT * FROM lapor WHERE id='$modal_id'");
    while($a=mysqli_fetch_array($modal))
    {
        ?>
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 800px;height: 600px;margin-left: -130px">
                    <div class="modal-header">
                        <h4 class="modal-title" style="float: left;">Pelapor <?php echo $a['namaPelapor'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>

                    <div class="modal-body">
                        <label>Keterangan</label>
                            <textarea name="pesan" id="" cols="20" rows="7" class="form-control" readonly><?php echo $a['keterangan'] ?></textarea>
                        <br>
                        <center>
                            <img src="gambarLaporan/<?php echo $a['image'] ?>" style="width: 778px;height: 475px">
                        </center>
                        <br>
                    </div>
                </div>
            </div>
        <?php
    } 
?>

