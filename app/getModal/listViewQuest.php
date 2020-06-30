<?php
    include "../../db/koneksi.php";
    $modal_id=$_GET['idList'];
    $modal=mysqli_query($koneksi,"SELECT * FROM tanya WHERE id='$modal_id'");
    while($a=mysqli_fetch_array($modal))
    {
        ?>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="float: left;">Riview <?php echo $a['subject'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>

                    <div class="modal-body">
                        <form action="proContent.php?action=endTanya" method="POST">
                            <label>Nama</label>
                            <input type="text" name="namaKamu" value="<?php echo $a['namaKamu'] ?>" class="form-control" readonly>
                            <label>Subjek</label>
                            <input type="text" name="subject" value="<?php echo $a['subject'] ?>" class="form-control" readonly>
                            <label>Email</label>
                            <input type="text" name="email"  value="<?php echo $a['email'] ?>" class="form-control" readonly>
                            <label>Jam & Tangal</label>
                            <input type="text" name="email"  value="<?php echo $a['jam'] ?> & <?php echo $a['tanggal'] ?>" class="form-control" readonly>
                            <label>Pesan</label>
                            <textarea name="pesan" class="form-control" readonly><?php echo $a['pesan'] ?></textarea>
                        </form>
                    </div>
                </div>
            </div>
        <?php
    } 
?>

