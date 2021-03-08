<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

              <h4 class="mt-0 header-title">Import Data Siswa</h4>

            <form name="f_siswa" action="<?php echo base_url(); ?>import/siswa" id="f_siswa" enctype="multipart/form-data" method="post">
                <input type="hidden" name="id" id="id" value="0">
                <table class="table table-form">
                    <tr><td>File</td><td style="width: 100%"><input type="file" class="form-control col-md-6" name="import_excel" required></td></tr>
                    <tr><td></td><td>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>&nbsp;
                        <a href="<?php echo base_url(); ?>adm/m_siswa" class="btn btn-secondary"><i class="fa fa-minus-circle"></i> Kembali</a>
                    </td></tr>
                </table>
            </form>
     

                </div><!--end card-body--> 
          </div><!--end card--> 
        </div> <!--end col-->                               
      </div><!--end row--> 
  </div>
</div>