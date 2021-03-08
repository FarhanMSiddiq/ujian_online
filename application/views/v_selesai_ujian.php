<d<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
              <h4 class="mt-0 header-title">Selesai Ujian</h4>
		<?php echo $data; ?>

		<a href="<?php echo base_url(); ?>adm/ikuti_ujian">Kembali</a>
      </div><!--end card-body--> 
          </div><!--end card--> 
        </div> <!--end col-->                               
      </div><!--end row--> 
  </div>
</div>

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
