<div class = "content-wrapper">
	 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Penyakit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!--Navbar-->
<nav class="navbar navbar-expand-lg teal mb-4">

 
  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <!-- Search form -->
    <form class="form-inline ml-auto" method="post" action="<?php echo base_url().'penyakit/search'; ?>">
      <div class="md-form my-0">
        <?php echo form_open('penyakit/search') ?>
        <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search">
        <button type="submit" class="btn btn-success">Cari</button>
        <?php echo form_close() ?>
      </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
    <section class="content">
      
    	<table class="table">
    		<tr>
    			<th>NO</th>
    			<th>NAMA PENYAKIT</th>
    			<th>DESKRIPSI PENYAKIT</th>
    			<th>GEJALA</th>
    			<th>OBAT/PENANGANAN</th>
    			<th>TINGKAT KEWASPADAAN</th>
    		
    		</tr>

    		<?php
    		$no = 1;
    		foreach ($penyakit as $pyt) : ?>
    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $pyt->nama_penyakit ?></td>
    			<td><?php echo $pyt->deskripsi_penyakit ?></td>
    			<td><?php echo $pyt->list_gejala ?></td>
    			<td><?php echo $pyt->obat_penanganan ?></td>
    			<td><?php echo $pyt->tingkat_kewaspadaan ?></td>
    			
    	<?php endforeach; ?>
    	
    	</table>

    </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel" >INPUT DATA PENYAKIT</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      	
      </div>
    </div>
  </div>
</div>
</div>