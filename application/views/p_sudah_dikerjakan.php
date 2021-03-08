<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
              <h4 class="mt-0 header-title">Ujian yang sudah dikerjakan</h4>
              <br>
              <table class="table  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatable">
          <thead>
            <tr>
              <th width="5%">No</th>
              <th width="20%">Nama Tes</th>
              <th width="10%">Mapel</th>
              <th width="10%">Guru</th>
              <th width="10%">Jmlh Soal</th>
              <th width="10%">Waktu</th>
              <!--<th width="5%">Nilai</th>-->
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
                        <td>'.$d->nmmapel .'</td>
                        <td> '.$d->nmguru.'</td>
                        <td class="ctr">'.$d->jumlah_soal.'</td>
                        <td class="ctr">'.$d->waktu.' menit</td>
                        
                       ';

                  
                //   echo '<td class="ctr">'.$d->nilai.'</td>';
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

  <script type="text/javascript" language="javascript">

     $(function() {

            $(this).bind("contextmenu", function(e) {

                e.preventDefault();

            });

        }); 
</script>
<script type="text/JavaScript"> 
document.addEventListener('contextmenu', event => event.preventDefault());

document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}

function killCopy(e){ return false } 
function reEnable(){ return true } 
document.onselectstart=new Function ("return false"); 
if (window.sidebar)
{ document.onmousedown=killCopy; 
document.onclick=reEnable; } 
</script>
