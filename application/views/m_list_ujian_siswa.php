<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
              <h4 class="mt-0 header-title"> Ujian / Tes</h4>
              <br>
              <table class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatable">
          <thead>
            <tr>
              <th width="5%">No</th>
              <th width="20%">Nama Tes</th>
              <th width="10%">Mapel </th>
              <th width="10%">Guru </th>
              <th width="10%">Jmlh Soal</th>
              <th width="10%">Waktu</th>
              <th width="10%">Status</th>
              <th width="10%">Aksi</th>
            
            </tr>
          </thead>

          <tbody>
            <?php 
              if (!empty($data)) {
                $no = 1;
                foreach ($data as $d) {
                  
                  echo '<tr>
                        <td class="ctr">'.$no.'</td>
                        <td>'.$d->nama_ujian.'</td>
                        <td>'.$d->nmmapel.'</td>
                        <td>'.$d->nmguru .'</td>
                        <td class="ctr">'.$d->jumlah_soal.'</td>
                        <td class="ctr">'.$d->waktu.' menit</td>
                        <td class="ctr">'.$d->status.'</td>
                        <td class="ctr">';

                  if ($d->status == "Belum Ikut") {
                   echo '<a href="'.base_url().'adm/ikut_ujian/token/'.$d->id.'" target="_blank" class="btn btn-info btn-xs"><i class="mdi mdi-pencil mr-2"></i> &nbsp;&nbsp;Ikuti Ujian</a>';
                  } else if ($d->status == "Sedang Tes") {
                    echo '<a href="'.base_url().'adm/ikut_ujian/token/'.$d->id.'" target="_blank" class="btn btn-success btn-xs"><i class="mdi mdi-pencil mr-2"></i> &nbsp;&nbsp; <blink>Ujian Sdg Aktif</blink></a>';
                  } else if ($d->status == "Waktu Habis") {
                    echo '<a href="'.base_url().'adm/ikut_ujian/token/'.$d->id.'" target="_blank" class="btn btn-warning btn-xs"><i class="mdi mdi-pencil mr-2"></i> &nbsp;&nbsp; <blink>Waktu Habis</blink></a>';
                  } else {
                    echo '<a href="'.base_url().'adm/sudah_selesai_ujian/'.$d->id.'" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-ok" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Anda sudah ikut</a>';
                  }
                  echo '</td></tr>';
                $no++;
                }
              } else {
                echo '<tr><td colspan="7">Belum ada data</td></tr>';
              }
            ?>
          </tbody>
        </table>

              </div><!--end card-body--> 
          </div><!--end card--> 
        </div> <!--end col-->                               
      </div><!--end row--> 
  </div>
</div>

