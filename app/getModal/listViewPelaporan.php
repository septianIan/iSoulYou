<?php
    include "../../db/koneksi.php";
    $modal_id=$_GET['idListPelaporan'];
    $modal=mysqli_query($koneksi,"SELECT * FROM lapor WHERE id='$modal_id'");
    while($a=mysqli_fetch_array($modal))
    {
        ?>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="float: left;">Riview <?php echo $a['namaPelapor'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>

                    <div class="modal-body">
                        <form action="proContent.php?action=endLaporan" method="POST">
                            <label>Nama</label>
                            <input type="text" name="namaPelapor" value="<?php echo $a['namaPelapor'] ?>" class="form-control" readonly>
                            <label>Subjek</label>
                            <input type="text" name="noTelp" value="<?php echo $a['noTelp'] ?>" class="form-control" readonly>
                            <label>Email</label>
                            <input type="text" name="alamat"  value="<?php echo $a['alamat'] ?>" class="form-control" readonly>
                            <label>Jam & Tangal</label>
                            <input type="text" name="email"  value="<?php echo $a['jam'] ?> & <?php echo $a['tanggal'] ?>" class="form-control" readonly>

                            <br>
                            <center>
                                <img src="gambarLaporan/<?php echo $a['image'] ?>" style="width: 458px;height: 252px">
                            </center>
                            <br>

                            <input type="hidden" name="id" value="<?php echo $a['id'] ?>">
                            <input type="submit" name="" value="End" style="float: right;" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        <?php
    } 
?>

