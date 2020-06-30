<?php
    include "../../db/koneksi.php";
    $modal_id=$_GET['modal_id'];
    $modal=mysqli_query($koneksi,"SELECT * FROM news WHERE id='$modal_id'");
    while($a=mysqli_fetch_array($modal))
    {
        ?>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="float: left;">Edit News</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>

                    <div class="modal-body">
                        <form action="proContent.php?action=updateNews" method="post" accept-charset="utf-8" style="font-size: 13px" autocomplete="off" enctype="multipart/form-data">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" value="<?php echo $a['judul'] ?>">
                            <label>Image</label>
                            <input type="file" accept="image/*" name="file" class="form-control"/>
                             <img id="preview" src="" alt="" width="200px"/>
                            <br>
                            <label>Desk</label>
                            <textarea class="form-control" cols="50" rows="6" name="desk"><?php echo $a['desk'] ?></textarea>

                            <input type="hidden" name="id" value="<?php echo $a['id'] ?>">
                            <input type="submit" name="simpanEdit" value="Submit" style="margin-top: 5px" class="btn btn-success">        
                            <a href="index.php" class="btn btn-danger" style="display: initial;margin-top: 5px" title="cencel">Cencel</a>
                        </form>
                    </div>
                </div>
            </div>
        <?php
    } 
?>

