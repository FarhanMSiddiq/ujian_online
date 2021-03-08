<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
              <h4 class="mt-0 header-title">Daftar Ujian / Tes</h4>
              <div class="button-items " align="right">
              <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_ujian_e(0);"><i class="mdi mdi-plus mr-2"></i> &nbsp;&nbsp;Tambah</a>
              <div>
              <br>
              <table class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatabel">
                <thead>
                  <tr>
                    <th width="3%">No</th>
                    <th width="20%">Nama Tes</th>
                    <th width="20%">Mata Pelajaran</th>
                    <th width="10%">Jumlah Soal</th>
                    <th width="15%">Waktu</th>
                    <th width="15%">Pengacakan Soal</th>
                    <th width="15%">Aksi</th>
                  </tr>
                </thead>

                <tbody></tbody>
              </table>

              </div><!--end card-body--> 
          </div><!--end card--> 
        </div> <!--end col-->                               
      </div><!--end row--> 
  </div>
</div>


<div class="modal fade" id="m_ujian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title mt-0">Ujian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-info">
        <a  onclick="return view_petunjuk('petunjuk');">petunjuk ..?</a>
        <div id="petunjuk">
          <ul>
            <li><b>Jml Soal</b>, harap dimasukkan sesuai jumlah soal yang sudah ada di bank soal</li>
            <li><b>Tgl Mulai</b>, adalah waktu awal boleh mulai meng-klik tombol "mulai ujian"</li>
            <li><b>Tgl Selesai</b>, adalah waktu akhir boleh mulai meng-klik tombol "mulai ujian"</li>
            <li><b>Acak Soal</b>, jika dipilih acak, maka soal akan diacak, jika diurutkan, maka akan diurutkan berdasarkan urutan soal masuk</li>
          </ul>
        </div>
      </div>

          <form name="f_ujian" id="f_ujian" onsubmit="return m_ujian_s();">
            <input type="hidden" name="id" id="id">
            <input type="hidden" name="jumlah_soal1" id="jumlah_soal1" >
              <table class="table table-form">
                <tr><td style="width: 25%">Nama Ujian</td><td style="width: 75%"><input type="text" class="form-control" name="nama_ujian" id="nama_ujian" required></td></tr>
                <?php if ($this->session->userdata('admin_level') == "admin") {?>
                <tr><td>Nama Guru</td><td><?php echo form_dropdown('guru', $p_guru, '', 'class="form-control"  id="guru" required'); ?></td></tr>
                <?php }?>     
                <tr><td>Mata Pelajaran</td><td><?php echo form_dropdown('mapel', $p_mapel, '', 'class="form-control"  id="mapel" required'); ?></td></tr>
                <tr><td>Jumlah soal</td><td><?php echo form_input('jumlah_soal', '', 'class="form-control"  id="jumlah_soal" required'); ?></td></tr>
                <tr><td>Tgl Mulai</td><td>
                  <input type="date" name='tgl_mulai' class="form-control" style="width: 150px; display: inline; float: left" id="tgl_mulai" placeholder="Tgl" data-tooltip="waktu awal boleh menge-klik tombol \"mulai\" ujian" required>
                  <input type="time" name='wkt_mulai' class="form-control" style="width: 100px; display: inline; float: left" id="wkt_mulai" placeholder="Waktu" required>
                </td></tr>
                <tr><td>Tgl Selesai</td><td>
                  <input type="date" name='terlambat' class="form-control" style="width: 150px; display: inline; float: left" id="terlambat" placeholder="Tgl" required>
                  <input type="time" name='terlambat2' class="form-control" style="width: 100px; display: inline; float: left" id="terlambat2" placeholder="Waktu" required>
                </td></tr>
                <tr><td>Waktu Ujian</td><td><?php echo form_input('waktu', '', 'class="form-control" id="waktu" placeholder="menit" required style="width: 100px; display: inline; float: left"'); ?> <div style="float: left; margin: 4px 0 0 10px"> menit</div></td></tr>
                <tr><td>Acak Soal</td><td><?php echo form_dropdown('acak', $pola_tes, '', 'class="form-control"  id="acak" required'); ?></td></tr>
              </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
         </form>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="fa fa-minus-circle"></i> Tutup</button>
      </div>
       
    </div>
    
  </div>
 

</div>