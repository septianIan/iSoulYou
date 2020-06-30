<?php
    include "../../db/koneksi.php";
    $id = $_GET['id'];
    $modal=mysqli_query($koneksi,"SELECT * FROM tanya WHERE id='$id'");
    while($a=mysqli_fetch_array($modal))
    {
        ?>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="float: left;"><?php echo $a['subject'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>

                    <div class="modal-body">
                        
                    </div>
                </div>
            </div>
        <?php
    } 
?>

