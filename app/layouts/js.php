<script src="../resources/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../resources/vendor/jquery/jquery.min.js"></script>
<script src="../resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../resources/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
  <script src="../resources/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../resources/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <script src="../resources/js/demo/datatables-demo.js"></script>
  <script type="text/javascript">
  	$(".open_modal").click(function(e) {
      var m = $(this).attr("id");
       $.ajax({
             url: "getModal/modalEdit.php",
             type: "GET",
             data : {modal_id: m,},
             success: function (ajaxData){
               $("#ModalEdit").html(ajaxData);
               $("#ModalEdit").modal('show',{backdrop: 'true'});
             }
           });
        });

   $(".open_review").click(function(e) {
      var m = $(this).attr("idRiview");
       $.ajax({
             url: "getModal/review.php",
             type: "GET",
             data : {id: m,},
             success: function (ajaxData){
               $("#ModalReview").html(ajaxData);
               $("#ModalReview").modal('show',{backdrop: 'true'});
             }
           });
        });

   $(".review").click(function(e) {
      var m = $(this).attr("idList");
       $.ajax({
             url: "getModal/listViewQuest.php",
             type: "GET",
             data : {idList: m,},
             success: function (ajaxData){
               $("#ModalListView").html(ajaxData);
               $("#ModalListView").modal('show',{backdrop: 'true'});
             }
           });
        });

   $(".reviewLaporan").click(function(e) {
      var m = $(this).attr("idListPelaporan");
       $.ajax({
             url: "getModal/listViewPelaporan.php",
             type: "GET",
             data : {idListPelaporan: m,},
             success: function (ajaxData){
               $("#ModalListViewPelaporan").html(ajaxData);
               $("#ModalListViewPelaporan").modal('show',{backdrop: 'true'});
             }
           });
        });

   $(".reviewImage").click(function(e) {
      var m = $(this).attr("idImage");
       $.ajax({
             url: "getModal/imageView.php",
             type: "GET",
             data : {idImage: m,},
             success: function (ajaxData){
               $("#ModalImage").html(ajaxData);
               $("#ModalImage").modal('show',{backdrop: 'true'});
             }
           });
        });

    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
  </script>