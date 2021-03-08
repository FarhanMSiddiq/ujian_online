<?php 
$uri4 = $this->uri->segment(4);
?>

<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
              <h4 class="mt-0 header-title">Upload Materi Pelajaran</h4>
              <div class="button-items " align="right">
              <a class="btn btn-success btn-sm" href="<?php echo base_url(); ?>adm/m_pelajaran/edit/0"><i class="mdi mdi-plus mr-2"></i> &nbsp;&nbsp;Tambah Data</a>        
              <div>
              
              <?php echo $this->session->flashdata('k'); ?>
              <br><br>
              <table class="table  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatabel">
                <thead>
                  <tr>
                    <td width="5%">No</td>
                    <td width="45%">Title</td>
                    <td width="15%">Mapel/Guru</td>
                    <td width="15%">File</td>
                    <td width="20%">Aksi</td>
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
