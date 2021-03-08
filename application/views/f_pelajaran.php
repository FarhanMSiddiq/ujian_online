<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-body">
                <div class="col-md-12">
              <h4 class="mt-0 header-title">Input Soal</h4>
              <?php echo form_open_multipart(base_url()."adm/m_soal/simpan", "class='form-horizontal'"); ?>
            <input type="hidden" name="id" id="id" value="<?php echo $d['id']; ?>">
          <input type="hidden" name="mode" id="mode" value="<?php echo $d['mode']; ?>">
          <div id="konfirmasi"></div>

            <div class="form-group fgsoal">
            
              <div class="col-md-2"><label>Mapel</label></div>
              <div class="col-md-12"><?php echo form_dropdown('id_mapel', $p_mapel, $d['id_mapel'], 'class="form-control" id="id_mapel" required'); ?></div>
            <div>
            </div>
           
            <div class="form-group fgsoal">
              <div class="col-md-2"><label>Guru</label></div>
              <div class="col-md-12"><?php echo form_dropdown('id_guru', $p_guru, $d['id_guru'], 'class="form-control" id="id_guru" required'); ?></div>
            </div>


            <div class="col-md-2"><label>Title</label></div>
            <div class="col-md-12">
                <textarea class="form-control" id="editornya" style="height: 50px;" name="title"></textarea>
              </div>

            <div class="form-group fgsoal">
              <div class="col-md-2"><label>File</label></div>
              <div class="col-md-12 ">
                <input type="file" name="gambar" id="gambar_soal" class="btn btn-info upload">
                <?php 
                if (is_file('./upload/gambar_soal/'.$d['file'])) {
                  echo tampil_media('./upload/gambar_soal/'.$d['file'],"100%");
                }
                ?>
              </div>
             
            </div>
           

            </div>
  
         
            <div class="form-group" style="margin-top: 20px">
              <div class="col-md-12">
                <button type="submit" class="btn btn-info"><i class="fa fa-check"></i> Simpan</button>
                <a href="<?php echo base_url(); ?>adm/m_soal/pilih_mapel/<?php echo $d['id_mapel']; ?>" class="btn btn-default"><i class="fa fa-minus-circle"></i> Kembali</a>
              </div>
            </div>
      </form>

                </div>
              </div><!--end card-body--> 
          </div><!--end card--> 
        </div> <!--end col-->                               
      </div><!--end row--> 
  </div>
</div>