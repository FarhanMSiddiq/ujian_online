<?php 
$uri4 = $this->uri->segment(4);
?>

<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
              <h4 class="mt-0 header-title">Daftar Hasil Tes</h4>
              <br>
              
              <div class="col-lg-12 alert alert-info" style="margin-bottom: 20px">
                <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered" style="margin-bottom: 0px;color:#fff;">
                      <tr><td>Mata Kuliah</td><td><?php echo $detil_tes->namaMapel; ?></td></tr>
                      <tr><td>Nama Guru</td><td><?php echo $detil_tes->nama_guru; ?></td></tr>
                      <tr><td width="30%">Nama Ujian</td><td width="70%"><?php echo $detil_tes->nama_ujian; ?></td></tr>
                      <tr><td>Waktu</td><td><?php echo $detil_tes->waktu; ?> menit</td></tr>
                    </table>
                </div>
                <!--<div class="col-md-2"></div>-->
                <div class="col-md-6">
                    <table class="table table-bordered" style="margin-bottom: 0px;color:#fff;">
                      <tr><td width="30%">Jumlah Soal</td><td><?php echo $detil_tes->jumlah_soal; ?></td></tr>
                      <tr><td>Tertinggi</td><td><?php echo $statistik->max_; ?></td></tr>
                      <tr><td>Terendah</td><td><?php echo $statistik->min_; ?></td></tr>
                      <tr><td>Rata-rata</td><td><?php echo number_format($statistik->avg_); ?></td></tr>
                    </table>
                </div>
              </div>
              </div>

              <br><br>
              <form method="post" action="<?php echo base_url('adm/h_ujian/batalkan_ujian/'); ?>" onsubmit="return validate(this);">
              <div class="button-items " align="right">
              <input type="hidden" value="<?php echo $this->uri->segment(4); ?>" name="id">
              <input type="submit" class="btn btn-danger btn-square btn-outline-dashed waves-effect waves-light"  value="Batalkan Ujian">
              </div>
              <table class="table  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatabel">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="15%">Nis</th>
                    <th width="35%">Nama Peserta</th>
                    <th width="10%">Jumlah Benar</th>
                    <th width="10%">Jumlah Salah</th>
                    <th width="15%">Nilai</th>
                    <th width="10%">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                </tbody>
              </table>
              </form>
              

              </div><!--end card-body--> 
          </div><!--end card--> 
        </div> <!--end col-->                               
      </div><!--end row--> 
  </div>
</div>
<script>
         function validate(form) {

         var chks = document.getElementsByName('check[]');
               var hasChecked = false;
               for (var i = 0; i < chks.length; i++)
               {
                  if (chks[i].checked)
                  {
                  hasChecked = true;
                  break;
                  }
               }


            if(hasChecked == false) {
               alert("Pilih salah satu yang ingin dibatalkan");
               return false;
            }else {
               return confirm('Apakah Kamu Yakin?');
            }
         }
</script>

