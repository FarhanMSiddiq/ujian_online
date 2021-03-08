<div class="page-content">
  <div class="container-fluid">
  <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h4 class="mt-0">Hello ! <?php echo $this->session->userdata('admin_nama')." (".$this->session->userdata('admin_user').")"; ?></h4>  
                                               
                                                <p class="text-muted">
                                                <?php $jam = date('Hi');
                                                      if($jam<1100){
                                                          echo 'Selamat Pagi';
                                                      }elseif($jam>1100 && $jam<1500){
                                                          echo 'Selamat Siang';
                                                      }elseif($jam>1500 && $jam<1800){
                                                        echo 'Selamat Sore';
                                                      }elseif($jam>1800 && $jam<2400){
                                                      echo 'Selamat Malam';
                                                      }

                                                ?>
                                                
                                                 ! Have a nice day.</p>

                                                <?php if($this->session->userdata('admin_level')=='admin' || $this->session->userdata('admin_level')=='proktor'){ ?>
                                                <div class="row justify-content-center">
                                                    <div class="col-md-3">
                                                        <div class="card mb-0">
                                                            <div class="card-body">
                                                                <div class="float-right">
                                                                    <i class="dripicons-user-group font-24 text-secondary"></i>
                                                                </div> 
                                                                <span class="badge badge-danger">Data Guru</span>
                                                                <h3 class="font-weight-bold"><?php echo number_format($jml_guru);?></h3>
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="card mb-0">
                                                            <div class="card-body">
                                                                <div class="float-right">
                                                                    <i class="dripicons-user-group  font-20 text-secondary"></i>
                                                                </div> 
                                                                <span class="badge badge-info">Data Siswa</span>
                                                                <h3 class="font-weight-bold"><?php echo number_format($jml_siswa);?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="card mb-0">
                                                            <div class="card-body">
                                                                <div class="float-right">
                                                                    <i class="dripicons-jewel font-20 text-secondary"></i>
                                                                </div> 
                                                                <span class="badge badge-warning">Data Mapel</span>
                                                                <h3 class="font-weight-bold"><?php echo number_format($jml_mapel);?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="card mb-0">
                                                            <div class="card-body">
                                                                <div class="float-right">
                                                                    <i class="dripicons-wallet font-20 text-secondary"></i>
                                                                </div> 
                                                                <span class="badge badge-success">Data Soal</span>
                                                                <h3 class="font-weight-bold"><?php echo number_format($jml_soal);?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                                <?php }else{ ?>

                                                <div class="row justify-content-center">
                                                    <div class="col-md-3">
                                                        <div class="card mb-0">
                                                            <div class="card-body">
                                                                <div class="float-right">
                                                                    <i class="dripicons-user-group font-24 text-secondary"></i>
                                                                </div> 
                                                                <span class="badge badge-danger">Total Ujian</span>
                                                                <h3 class="font-weight-bold"><?php echo number_format($jml_ujian);?></h3>
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="card mb-0">
                                                            <div class="card-body">
                                                                <div class="float-right">
                                                                    <i class="dripicons-user-group  font-20 text-secondary"></i>
                                                                </div> 
                                                                <span class="badge badge-info">Belum selesai</span>
                                                                <h3 class="font-weight-bold"><?php echo number_format($blm_dikerjakan);?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="card mb-0">
                                                            <div class="card-body">
                                                                <div class="float-right">
                                                                    <i class="dripicons-jewel font-20 text-secondary"></i>
                                                                </div> 
                                                                <span class="badge badge-warning">Sudah selesai</span>
                                                                <h3 class="font-weight-bold"><?php echo number_format($sudah_dikerjakan);?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="card mb-0">
                                                            <div class="card-body">
                                                                <div class="float-right">
                                                                    <i class="dripicons-wallet font-20 text-secondary"></i>
                                                                </div> 
                                                                <span class="badge badge-success">Data Mapel</span>
                                                                <h3 class="font-weight-bold"><?php echo number_format($jml_mapel);?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                                <?php } ?>

                                            <div class="col-md-3 align-self-center">
                                                <img src="<?php echo base_url(); ?>assets/images/dash.svg" alt="" class="img-fluid">
                                            </div>
                                        </div>      

                                        <?php if($this->session->userdata('admin_level')=='admin' || $this->session->userdata('admin_level')=='proktor'){ ?>
                                            <br>                                             
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-body"> 
                                                <h4 class="mt-0 header-title">Grafik data</h4>
                                                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-body"> 
                                                <h4 class="mt-0 header-title">Grafik Jumlah Soal per Mapel</h4>
                                                <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>

                                        <?php  } ?>
                                                
  </div>
</div>


<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: ""
	},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y} data</strong>",
		indexLabel: "{name} - {y} data",
		dataPoints: <?php  echo $chart1;  ?>
	}]
});
chart.render();

var chart2 = new CanvasJS.Chart("chartContainer2", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: ""
	},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y} soal</strong>",
		indexLabel: "{name} - {y} soal",
		dataPoints: <?php  echo $chart2;  ?>
	}]
});
chart2.render();

}

function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();

}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>