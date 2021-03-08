<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
              <h4 class="mt-0 header-title">Data Guru</h4>
              <div class="button-items " align="right">
                  <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_guru_e(0);"><i class="mdi mdi-plus mr-2"></i>Tambah</a>       
                  <a class="btn btn-warning btn-sm tombol-kanan" href="<?php echo base_url(); ?>upload/format_import_guru.xlsx" ><i class="mdi mdi-download mr-2"></i>Download Format Import</a>
                  <a class="btn btn-info btn-sm tombol-kanan" href="<?php echo base_url(); ?>adm/m_guru/import" ><i class="mdi mdi-upload mr-2"></i>Import</a>
              </div>
              <div class="button-items mt-2 mb-2 ml-2">
              <a href="<?php echo base_url('adm/m_siswa/aktifkan_semua'); ?>"  class="btn btn-info btn-sm" style="margin-bottom: 10px"><i class="fa fa-users"></i> Aktifkan semua siswa</a>
              </div>  
              <table class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatabel">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="40%">Nama</th>
                    <th width="20%">NIP/Username</th>
                    <th width="35%">Aksi</th>
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

<div class="modal fade" id="m_guru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title mt-0">Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
          <form name="f_guru" id="f_guru" onsubmit="return m_guru_s();">
            <input type="hidden" name="id" id="id" value="0">
              <table class="table table-form">
                <tr><td style="width: 25%">NIP</td><td style="width: 75%"><input type="text" class="form-control" name="nip" id="nip" required></td></tr>
                <tr><td style="width: 25%">Nama</td><td style="width: 75%"><input type="text" class="form-control" name="nama" id="nama" required></td></tr>
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

