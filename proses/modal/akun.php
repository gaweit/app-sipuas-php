<div class="modal fade" id="editakunadmin" tabindex="-1" role="dialog" arial-labelledby="myModalLabel" arial-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Kelola Sandi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
        </div>

        <div class="modal-body">
            <div class="edit-akunadmin"></div>
        </div>
      </div>
    </div>
 </div>

 <div class="modal fade" id="editprofil" tabindex="-1" role="dialog" arial-labelledby="myModalLabel" arial-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Kelola Profil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
        </div>

        <div class="modal-body">
            <div class="edit-profil"></div>
        </div>
      </div>
    </div>
 </div>

 

 <script type="text/javascript">

    $(document).ready(function()
    {
        $('#editakunadmin').on('show.bs.modal', function(e)
        {
            var iduser = $(e.relatedTarget).data('id');

            $.ajax( // fungsi ajak untuk mengambil data
            {
                type : 'post',
                url : 'proses/administrator/kelola_akun.php',
                data : 'iduser='+iduser,
                success : function(data)
                {
                    $('.edit-akunadmin').html(data); // menampilkan data ke dalam modal
                }
            });
        });
    });

</script>

 <script type="text/javascript">

    $(document).ready(function()
    {
        $('#editprofil').on('show.bs.modal', function(e)
        {
            var iduser = $(e.relatedTarget).data('id');

            $.ajax( 
            {
                type : 'post',
                url : 'proses/kelola_profil.php',
                data : 'iduser='+iduser,
                success : function(data)
                {
                    $('.edit-profil').html(data); // menampilkan data ke dalam modal
                }
            });
        });
    });

</script>

 