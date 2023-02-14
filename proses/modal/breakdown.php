<div class="modal fade" id="tambah" tabindex="-1" role="dialog" arial-labelledby="myModalLabel" arial-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                   
                                                </div>
     
        <div class="modal-body">
            <div class="add-jabatan"></div>
        </div>
      </div>
    </div>
 </div>



 <div class="modal fade" id="edit" tabindex="-1" role="dialog" arial-labelledby="myModalLabel" arial-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                   
                                                </div>
        <div class="modal-body">
            <div class="edit-jabatan"></div>
        </div>
      </div>
    </div>
 </div>

<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <h4 class="modal-title" style="text-align:center;">Apakah Kamu Yakin ingin Menghapus Data Ini?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">IYA</a>
        <button type="submit" class="btn btn-fill btn-inverse" data-dismiss="modal">TIDAK</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

    $(document).ready(function()
    {
        $('#tambah').on('show.bs.modal', function(e)
        {
            $.ajax( // fungsi ajak untuk mengambil data
            {
                url : 'proses/admin_maintenance/tambah_breakdown_admin_maintenance.php',
                success : function(data)
                {
                    $('.add-jabatan').html(data); // menampilkan data ke dalam modal
                }
            });
        });
    });

    $(document).ready(function()
    {
        $('#edit').on('show.bs.modal', function(e)
        {
            var idbt = $(e.relatedTarget).data('id');

            $.ajax( // fungsi ajak untuk mengambil data
            {
                type : 'post',
                url : 'proses/admin_maintenance/ubah_breakdown_admin_maintenance.php',
                data : 'id_bt='+idbt,
                success : function(data)
                {
                    $('.edit-jabatan').html(data); // menampilkan data ke dalam modal
                }
            });
        });
    });

</script>

<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>