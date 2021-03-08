<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
              <h4 class="mt-0 header-title">Data Mata Pelajaran</h4>
              <div class="button-items " align="right">
              <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_mapel_e(0);"><i class="mdi mdi-plus mr-2"></i> &nbsp;&nbsp;Tambah</a>
              </div>
              <br><br>
              <table class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatabel">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="75%">Nama</th>
                    <th width="20%">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                </tbody>
              </table>

              </div><!--end card-body--> 
          </div><!--end card--> 
        </div> <!--end col-->                               
      </div><!--end row--> 
  </div>
</div>





<div class="modal fade" id="m_mapel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title mt-0">Data Mata Pelajaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
          <form name="f_mapel" id="f_mapel" onsubmit="return m_mapel_s();">
            <input type="hidden" name="id" id="id" value="0">
              <table class="table table-form">
                <tr><td style="width: 25%">Nama</td><td style="width: 75%"><input type="text" class="form-control" name="nama" id="nama" required></td></tr>
                <tr><td style="width: 25%">Detail</td><td style="width: 75%"><textarea class="form-control" name="detail" id="detail"></textarea></td></tr>
                <tr><td style="width: 25%">Thumbnail</td><td style="width: 75%"><input type="text" class="form-control" name="thumbnail" id="thumbnail" required></td></tr>
              </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="fa fa-minus-circle"></i> Tutup</button>
      </div>
        </form>
    </div>
  </div>
</div>
